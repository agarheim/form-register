<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />
	<title>Welcome!</title>

	<!-- Remember to include jQuery :) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

	<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="<?php echo base_url();?>assets/css/docs.css" rel="stylesheet">

</head>
<body>
  <div class="container">
	  <div class="row">
		  <div class="span2"></div>
	  <div class="span6 text-info"><h1>Register form! </h1>
      <div id="sendmessage" class="hidden">Your message has been sent. Thank you! </div>
	  <div id="errormessage"><?php echo validation_errors(); ?></div>
	  </div>
	  </div>
	  <!-- Modal HTML embedded directly into document -->
		  <div id="ex1" class="modal close">
			  <p>Your info added!</p>
		  </div>
	   <form action="<?php echo base_url();?>form" method="post" role="form" class="contactForm">
            <div class="row">
				<div class="span2"></div>
              <div class="span6 ">
                <input type="text" name="name" class="input-block-level" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
			  <div class="span2"></div>
			</div>
		   <div class="row">
			   <div class="span2"></div>
              <div class="span6 ">
                <input type="email" class="input-block-level" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
				<div class="span2"></div>
		   </div>
		   <div class="row">
			   <div class="span2"></div>
				<div class="span6 ">
					<input type="date" class="input-block-level" name="date" id="date" placeholder="Date birth" data-msg="Please enter date birth" />
					<div class="validation"></div>
				</div>
				<div class="span2"></div>
		   </div>
		   <div class="row">
			   <div class="span2"></div>
              <div class="span6 ">
                <input type="text" class="input-block-level" name="color" id="subject" placeholder="color" data-msg="Please check your color" />
                <div class="validation"></div>
              </div>
				<div class="span2"></div>
		   </div>
		   <div class="row">
			  <div class="span2"></div>
              <div class="span6 ">
<!--                <textarea class="input-block-level" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>-->
<!--                <div class="validation"></div>-->
              <div style="text-align: center;">
                  <button class="btn btn-medium btn-success" type="submit">Send a message</button>
              </div>
              </div>
			   <div class="span2"></div>
            </div>
          </form>
	    </div>

  </div>

  <!-- jQuery Modal -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>

   <script src="<?php echo base_url();?>assets/js/jquery-1.8.2.min.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
   <script src="<?php echo base_url();?>assets/js/google-code-prettify/prettify.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
   <script src="<?php echo base_url();?>assets/js/jquery.elastislide.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.prettyPhoto.js"></script>
   <script src="<?php echo base_url();?>assets/js/application.js"></script>
   <script src="<?php echo base_url();?>assets/js/portfolio/jquery.quicksand.js"></script>
   <script src="<?php echo base_url();?>assets/js/portfolio/setting.js"></script>
   <script src="<?php echo base_url();?>assets/js/hover/jquery-hover-effect.js"></script>
   <script src="<?php echo base_url();?>assets/js/hover/setting.js"></script>
   <!-- Contact Form JavaScript File -->
   <script src="<?php echo base_url();?>assets/contactform/contactform.js"></script>
  </body>

</html>
