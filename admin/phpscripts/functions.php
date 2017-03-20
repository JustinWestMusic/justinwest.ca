<?php
	
	function redirect_to($location)
	{
		if($location != NULL)
		{
			header("Location: {$location}");
		}
		else
		{
			//echo "Redirect not sent.";
		}
	}
	
	function sendMessage($name, $email, $company, $phone, $msg, $direct)
	{
		
		$to = "justin@justinwest.ca";
		$subj = "Message from justinwest.ca";
		$extra = "Reply-To: {$email}";
		$body = "Name: {$name}\n\nEmail: {$email}\n\nMessage: {$msg}\n\nPhone: {$phone}\n\nCompany: {$company}";
			
		//echo $body;
		
		
		//This will not work locally on your machine
		mail($to, $subj, $body, $extra);
		redirect_to($direct);
		
		
	}

?>