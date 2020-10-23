<?php
	require_once('conn.php');
?>
<?php
	if (isset($_POST['message']) && isset($_POST['name']) && isset($_POST['email'])) {
		$msg = $_POST['message'];
		$nam = $_POST['name'];
		$mail = $_POST['email'];

		$fullname = $nam;
		$email_body = $msg;
		$email_end = "Thank you ".$fullname." . ";


		$stmt = "INSERT INTO contact(cname, cemail, cmessage) VALUES('$nam', '$mail', '$msg')";
		$query = mysqli_query($connect, $stmt) or die(mysqli_error($connect));

		if ($query) {
			echo "<script>window.alert('Successful')</script>";

			$mine = "olabemiwodaniel@yahoo.com";
			$headers ="From: ".$mail;

			$sendmail  = mail($mine, "Contact form sent", $email_body, $headers);

			echo $sendmail; 
		}


	}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Aquick COVID-19 API use">
<meta name="author" content="Daniel  Olabemiwo">
<title>Contact Me</title>
<link rel="stylesheet" href="contact.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="fonts/fontawesome-all.min.css">
</head>

<body>
	
	 <div class="col-md-6 col-md-offset-3" id="formmsg">
                    <h2>Contact Us</h2> 
                    <p> Please send your message below. We will get back to you very soon! </p>
                    <form role="form" method="post" id="cform">
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="message"> Message:</label>
                                <textarea class="form-control" type="textarea" name="message" id="message" maxlength="6000" rows="7" placeholder="Your message must contain not more than 5000 characters"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="name"> Your Name:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="email"> Email:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <button type="submit" class="btn btn-lg btn-default pull-right btn-primary" id="sendd">Send &rarr;</button>
                            </div>
                        </div>
                    </form>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your message successfully!</h3> </div>
                    <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
                </div>
            
</body>
</html>