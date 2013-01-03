<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Rel8</title>
	<meta name="Description" content="Rel8. it's awsome! Come and rel8">
	<link rel="stylesheet" href="css/Style.css">
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/plax.js"></script>
	<script src="js/Scripts.js"></script>
	<script src="js/Tween.js"></script>
</head>
<body>
	<div id="fb-root"></div>
	<script>
	  window.fbAsyncInit = function() {
	    // init the FB JS SDK
	    FB.init({
	      appId      : '465230120155284', // App ID from the App Dashboard 
//	      channelUrl : '//WWW.YOUR_DOMAIN.COM/channel.html', // Channel File for x-domain communication
	      status     : true, // check the login status upon init?
	      cookie     : true, // set sessions cookies to allow your server to access the session?
	      xfbml      : true  // parse XFBML tags on this page?
	    });
	
	    // Additional initialization code such as adding Event Listeners goes here
	
	  };
	
	  // Load the SDK's source Asynchronously
	  // Note that the debug version is being actively developed and might 
	  // contain some type checks that are overly strict. 
	  // Please report such bugs using the bugs tool.
	  (function(d, debug){
	     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement('script'); js.id = id; js.async = true;
	     js.src = "//connect.facebook.net/en_US/all" + (debug ? "/debug" : "") + ".js";
	     ref.parentNode.insertBefore(js, ref);
	   }(document, /*debug*/ false));
	</script>

	<div id="Wrapper">
		<div id="port">
			<img src="images/pics4.png" class="parallax-layer" style="left: 164px; top:68px; width: 628px; height: 325px;" data-xrange="30" data-yrange="10" data-invert="true">
			<img src="images/pics5.png" class="parallax-layer" style="left: 358px; top:258px; width: 617px; height: 116px;" data-xrange="30" data-yrange="20" data-invert="true">
			<img src="images/pics7.png" class="parallax-layer" style="left: 244px; top:170px; height: 134px;" data-xrange="30" data-yrange="30" data-invert="true">
			<img src="images/pics3.png" class="parallax-layer" style="left: 5px; top:198px; width: 947px; height: 233px;" data-xrange="10" data-yrange="10" data-invert="true">
			<img src="images/pics6.png" class="parallax-layer" style="left: 192px; top:84px; width: 568px; height: 171px;" data-xrange="20" data-yrange="20" data-invert="true">
			<img src="images/pics8.png" class="parallax-layer" style="left: 240px; top:194px; width: 737px; height: 322px;" data-xrange="20" data-yrange="0" data-invert="true">
			<img src="images/pics2.png" class="parallax-layer" style="left: 70px; top:144px; width: 833px; height: 209px;" data-xrange="10" data-yrange="10" data-invert="true">
		</div>
		<div id="Main">
			<div id="Welcome">
				<img src="images/Logo.png">
				<p style="font-size:20px;margin-bottom:10px">We change the way you use social networks</p>
				<div id="Tip">We will not share, rent or sell your information to third party</div>
				<img src="images/Tip.png" id="Tip">
				<a href="#"><img src="images/Facebook_Off.png" id="Btn_Facebook"></a>
				<br>or<br>
				<a href="#" id="Btn_Email">leave your email</a> and we will notify you when we are online
				<div id="Win_Email">
					<a href="#"><img src="images/x.png" id="Btn_X"></a>
					<input type="text" value="Your email here" id="tb_email">
					<a href="#"><img src="images/invite.png" id="Btn_Invite"></a>
				</div>
			</div>
			<div id="Thanks">
				<h1>THANK YOU!</h1>
				<h2>Now, spread the word</h2>
				<p style="font-size:24px;">
				Get early access by inviting your friends.<br>
				The more friends you invite, the sooner you'll get access!
				</p>
				<div id="shares">
					<a href="" id="SFacebook" target="_blank"><img src="images/FacebookS_Off.png"></a>
					<a href="" id="SLinkedin" target="_blank"><img src="images/Linkedin_Off.png"></a>
					<a href="" id="STwitter" target="_blank"><img src="images/Twitter_Off.png"></a>
					<a href="" id="SGoogle" target="_blank"><img src="images/Google_Off.png"></a>
				</div>
				<p style="font-size:18px;">
				or - just email this link to your friends and you'll get referral credit!<br>
				<a href="#" id="SLink" target="_blank"></a>
				</p>
			</div>
		</div>
	</div>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-37359138-1']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>
</body>
</html>