<?php
if ($this->session->flashdata('error')) {
  echo "<div id='error'>";
  echo $this->session->flashdata('error');
  echo "</div>";
}
?>
<form action="<?php echo base_url();?>index.php/contact/process" method="post">
<ul id="contactform">
  <li>
    <label for="name">Your Name*</label>
    <span class="fieldbox"><input type="text" name="name" id="name" value=""/></span>
  </li>	
  <li>
    <label for="email">Email*</label>
    <span class="fieldbox"><input type="text" name="email" id="email" value=""/></span>
  </li>
  <li>
    <label for="subject">Subject*</label>
    <span class="fieldbox"><input type="text" name="subject" id="subject" value=""/></span>
  </li>
  <li>
    <label for="msg">Message*</label>
    <span class="msgbox"><textarea class="area" id="msg" name="msg" rows="8" cols="30"></textarea></span>
  </li>
</ul>
<label></label>
<input type="submit" value="Send" id="sendbutton" name="send"/>
</form>
