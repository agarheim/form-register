
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
      <div id="form">
	  <?php echo $form; ?>
      </div>
