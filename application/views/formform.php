<form action="<?php echo base_url();?>form" method="post" id="formsubmit" role="form" class="contactForm">
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

