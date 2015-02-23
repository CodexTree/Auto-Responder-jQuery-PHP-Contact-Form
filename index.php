<!DOCTYPE html>
<html>
	<head>
		<title>Contact Form With Response</title>
		<link href="css/style.css" rel="stylesheet"/>
	</head>
	<body>
	
		<div id="contact_form_holder">
		    <form action="index.php" method="post" id="contact_form">
		        <h2>Contact Us</h2>
		        <div id="topic_error" class="error"><img src="error.png" /> What category should this be filed in?</div>
		        
		        NAME:<div id="name_error" class="error"><img src="error.png" /> We don't talk to strangers.</div>
		        <div><input class="contact_name" type="text" name="name" id="name" /></div>
		        EMAIL:<div id="email_error" class="error"><img src="error.png" /> You don't want us to answer?</div>
		        <div><input class="contact_email" type="text" name="email" id="email" /></div>
		        SUBJECT:<div id="subject_error" class="error"><img src="error.png" /> What's the purpose of this email?</div>
		        <div><input class="contact_subject" type="text" name="subject" id="subject" /></div>
		        MESSAGE:<div id="message_error" class="error"><img src="error.png" /> Forgot why you came here?</div>
		        <div><textarea class="contact_message" name="message" id="message"></textarea></div>
		        <div id="mail_success" class="success"><img src="success.png" /> Thank you. The mailman is on his way.</div>
		        <div id="mail_fail" class="error"><img src="error.png" /> Sorry, we don't know what happened. Please try again later.</div>
		        
		        <div id="cf_submit_p">
		            <input class="submit" type="submit" id="send_message" value="Send Message">
		        </div>
		    </form>
		</div>
	
	
		<script src="http://code.jquery.com/jquery-1.4.2.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
