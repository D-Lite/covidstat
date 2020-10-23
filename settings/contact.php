<?php
	require_once('conn.php');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="A quick COVID-19 API use">
<meta name="author" content="Daniel  Olabemiwo">
<title>Contact Me</title>
<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">

<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="fonts/fontawesome-all.min.css">
<script src="https://use.fontawesome.com/cc60e61ffa.js"></script>
</head>

<body>
	<header>	
  		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
		<h1>
					<a class="navbar-brand text-capitalize" href="index.php">
						<img src="img/star.png" width="50px" alt="logo">
					</a>
				</h1>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">   
			<span class="navbar-toggler-icon"></span>
 			 </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../index.php"><h3>Home</h3></a>
      </li>
      <li class="nav-item active">
		  <a class="nav-link" href="#"><h3>Contact</h3><span class="sr-only">(current)</span></a>
      </li>
	   <li class="nav-item">
        <a class="nav-link" href="#"><h3>News</h3></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><h3>Disabled</h3></a>
      </li>
    </ul>
  </div>
</nav>
	</header>
	<main>
  		<section id="csection" style="margin-top: 50px; padding-top: 100px;" >
  		  <div class="container justify-content-start" id="contform">
            <div class="row">
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
            
             <div class="col-md-6 span-6" id="formmsg">
                    <h2>Social Media</h2> 
                    <p> Check out my recent engagement on social media! </p>
 
				 	<div class="col-md-6 span-6" style="width: 100%; height: 60px; border-color: black; border-style: thick; "><span><a class="twitter-timeline" href="https://twitter.com/fikkyman1?ref_src=twsrc%5Etfw">Tweets by fikkyman1</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
					</span>
          </div>
                    
                </div>
            </div>
        </div>
	</section>
	</main>
	<footer class="py-2 bg-light navbar fixed-bottom navbar-expand-sm" style="margin-bottom: auto;" id="footer">
  <div class="container-sm justify-content-center">
    <span class="text-muted justify-content-center">&copy;Daniel Ola</span>
  </div>
  <div class="justify-content-end" id="social" style="letter-spacing:  10px;">
	<a href="https://facebook.com/olabemiwodaniel"><span class="fab fa-facebook-f"></span></a>
	<a href="https://twitter.com/fikkyman1"><span class="fab fa-twitter"></span></a>
	<a href="https://instagram.com/danielolabemiwo"><span class="fab fa-instagram"></span></a>
	<a href="https://linkedin.com/olabemiwodaniel"><span class="fab fa-linkedin"></span></a>
  </div>
</footer>
</body>
</html>