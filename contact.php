<?php
	require_once("admin/phpscripts/init.php");
	if(isset($_POST['name']))
	{
		//echo "Thanks, I will get back to you shortly, {$_POST['name']}.";
		$name = $_POST['name'];
		$email = $_POST['email'];
		$company = $_POST['company'];
		$phone = $_POST['phone'];
		$msg = $_POST['msg'];
		$direct = "thankyou.php";
		sendMessage($name, $email, $company, $phone, $msg, $direct);
	}
	else
	{
		//echo "Please fill out the form.";	
	}

?>


<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | Justin West - Web Developer</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> 
  </head>
  <body>
	
    <h1 class="hide">Contact | Justin West - Web Developer</h1>

   	<header class="row">
        <nav class="small-12 column">
     <h2 class="hide">Main Navigation</h2>
     
		<div id="menu" class="overlay">

		  <a id="close">X</a>

		  <div id="overlayNav">
	        <ul>
				<li><a href="index.html">Home</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="contact.php">Contact</a></li>
      		</ul>
      		
      		    <object data="images/index/facebook.svg" id="facebookIcon" class="socialIcons"></object>
				<object data="images/index/twitter.svg" id="twitterIcon" class="socialIcons"></object>
				<object data="images/index/linkedin.svg" id="linkedinIcon" class="socialIcons"></object>
		  </div>

		</div>

		<a id="open">&#9776;</a>
         
		</nav>
      </header>
      <noscript>
        <header class="row">
         <nav id="noJSNav" class="small-12 column">
			<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="portfolio.html">Portfolio</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		</header>
	</noscript>
    
    <section class="row">
    <div class="small-12 column"> 
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">
	<h2>Say Hi</h2>
  	
		<h3>Looking for some web help?</h3>
		<h4>Send me a message!</h4>
   	
    	<label>Name*</label>
        <input required name="name" id="name" type="text">
        <label>Company</label>
        <input name="company" id="company" type="text">
        <label>E-Mail*</label>
        <input required name="email" id="email" type="email">
        <label>Phone Number</label>
        <input name="phone" id="phone" type="tel">
        <label>Message*</label>
        <textarea required id="msg" name="msg"></textarea>
        <input type="submit" id="send" value="Send">  
        
    </form>
	</div>
	</section>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
</body>
</html>