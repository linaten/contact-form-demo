<html lang="en">
<!--
Begin Sample Contact Form

Create your own contact form.
Do not copy and paste this one.
-->
<head>
	<!-- jQuery Form, Additional Methods, Validate -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha384-vk5WoKIaW/vJyUAd9n/wmopsmNhiy+L2Z+SBxGYnUkunIxVxAv/UtMOhba/xskxh"
			  crossorigin="anonymous"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
	<script type="text/javascript"
			  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>

	<!-- Your JavaScript Form Validator -->
	<script src="js/form-validate.js"></script>

	<!-- Google reCAPTCHA -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<form id="lindseys-demo-form" action="../php/" method="post">
	<div class="form-group">
		<label for="contactDemoName">Name <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-user" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="contactDemoName" name="contactDemoName" placeholder="Name">
		</div>
	</div>
	<div class="form-group">
		<label for="contactDemoEmail">Email <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<input type="email" class="form-control" id="contactDemoEmail" name="contactDemoEmail" placeholder="Email">
		</div>
	</div>
	<div class="form-group">
		<label for="contactDemoSubject">Subject</label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="contactDemoSubject" name="contactDemoSubject" placeholder="Subject">
		</div>
	</div>
	<div class="form-group">
		<label for="contactDemoMessage">Message <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-prepend">
				<span class="input-group-text"></span>
				<i class="fa fa-comment" aria-hidden="true"></i>
			</div>
			<textarea class="form-control" rows="5" id="contactDemoMessage" name="contactDemoMessage" placeholder="I <3 CopyPasta :D~ (2000 characters max)"></textarea>
		</div>
	</div>

	<!-- reCAPTCHA -->
	<div class="g-recaptcha" data-sitekey="6LeuKsIUAAAAAKmCaWKGEc-n_BPunv0tezg3B9VS"></div>

	<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
	<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
</form>

<!--empty area for form error/success output-->
<div class="row">
	<div class="col-xs-12">
		<div id="output-area"></div>
	</div>
</div>
</html>