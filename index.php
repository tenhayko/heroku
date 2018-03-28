<!DOCTYPE html>
<html>
    <head>
	<title>Facebook Messenger</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1">
    </head>
    <body>
	<script>
	 window.fbAsyncInit = function() {
	     FB.init({
			 appId      : '525241941203642',
			 cookie     : true,
			 xfbml      : true,
			 version    : 'v2.12'
	     });

	     FB.Event.subscribe('messenger_checkbox', function(e) {
		 console.log("messenger_checkbox event");
		 console.log(e);
		 
		 if (e.event == 'rendered') {
		     console.log("Plugin was rendered");
		 } else if (e.event == 'checkbox') {
		     var checkboxState = e.state;
		     console.log("Checkbox state: " + checkboxState);
		 } else if (e.event == 'not_you') {
		     console.log("User clicked 'not you'");
		 } else if (e.event == 'hidden') {
		     console.log("Plugin was hidden");
		 }
		 
	     });
	 };
	 (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "https://connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
	 }(document, 'script', 'facebook-jssdk'));
	</script>

	<div>Messenger checkbox</div>
	<div class="fb-messenger-checkbox"  
	     origin="https://<?php echo $_SERVER['SERVER_NAME']; ?>"
	     page_id="156005821760985"
	     messenger_app_id="525241941203642"
	     user_ref="<?php echo uniqid(time().'.', true); ?>"
	     prechecked="true"
             allow_login="true"
             size="large">
	</div>
    </body>
</html>
