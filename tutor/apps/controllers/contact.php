<?php

if (!defined('BASEPATH'))
  exit('No direct script access allowed');

class Contact extends CI_Controller {

  function __construct() {
    parent::__construct();
    $this->load->library(array('form_validation', 'email', 'session'));
    $this->load->helper('url');
  }

  function index() {
    $this->load->view('contact/header');
    $this->load->view('contact/form_contact');
    $this->load->view('contact/footer');
  }

  function process() {
    if ($this->input->post('send')) {
      $this->form_validation->set_rules('name', 'Name', 'strip_tags|trim|required|xss_clean');
      $this->form_validation->set_rules('email', 'Email Address', 'strip_tags|trim|required|valid_email');
      $this->form_validation->set_rules('subject', 'Subject', 'strip_tags|trim|required|xss_clean');
      $this->form_validation->set_rules('msg', 'Message', 'strip_tags|trim|required|xss_clean');
      if ($this->form_validation->run() == FALSE):
        $this->session->set_flashdata('error', validation_errors());
        redirect('contact');
      else :
        $this->email->from($this->input->post('email'), $this->input->post('name'));
        $this->email->to('your_email@domain.com');
        $this->email->subject($this->input->post('subject'));
        $this->email->message($this->input->post('msg'));
        if ($this->email->send()) {
          ?>
          <script type="text/javascript" language="javascript">
            alert("Thanks. Your Message have been sent!!!");
          </script>
          <?php
          redirect('contact');
        } else {
           ?>
          <script type="text/javascript" language="javascript">
            alert("Error In Sending Your Message !!");
          </script>
          <?php
          redirect('contact');
        }
      endif;
    }
  }

}