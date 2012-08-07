<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head profile="http://gmpg.org/xfn/11">
    <title>Contact Form</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" href="assets/style-contact.css" type="text/css" media="screen" />
    <script language="javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script>
      $(document).ready(function() {// When the Dom is ready
        $('#error').fadeIn(2000);
      });
    </script>

    <style>
      #error{
        display: none;
        border: 1px solid;
        margin: 15px 0px;
        padding:15px 20px 15px 55px;
        width: 300px;	
        color: #D8000C;
        background: #FFBABA;
        font: bold 12px verdana;
        -moz-box-shadow: 0 0 5px #888;
        -webkit-box-shadow: 0 0 5px#888;
        box-shadow: 0 0 5px #888;
        text-shadow: 2px 2px 2px #ccc;
        -webkit-border-radius: 15px;
        -moz-border-radius: 15px;
        border-radius: 15px;
      }
    </style>
  </head>
  <body>
    <div id="wrap">
      <div id="header">
        <h1>Contact Form</h1>
      </div>