<?php
require_once('settings/conn.php');

$confirmed = getData("https://services1.arcgis.com/0MSEUqKaxRlEPj5g/arcgis/rest/services/Coronavirus_2019_nCoV_Cases/FeatureServer/1/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22Confirmed%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&cacheHint=true");

$deaths = getData("https://services1.arcgis.com/0MSEUqKaxRlEPj5g/arcgis/rest/services/Coronavirus_2019_nCoV_Cases/FeatureServer/1/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22Deaths%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&cacheHint=true");

$recovered = getData("https://services1.arcgis.com/0MSEUqKaxRlEPj5g/arcgis/rest/services/Coronavirus_2019_nCoV_Cases/FeatureServer/1/query?f=json&where=1%3D1&returnGeometry=false&spatialRel=esriSpatialRelIntersects&outFields=*&outStatistics=%5B%7B%22statisticType%22%3A%22sum%22%2C%22onStatisticField%22%3A%22Recovered%22%2C%22outStatisticFieldName%22%3A%22value%22%7D%5D&cacheHint=true");

function getData($url){

   $client = curl_init($url);
   curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
   $response = curl_exec($client);

   return json_decode($response);
};

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="A quick COVID-19 API use">
<meta name="author" content="Daniel  Olabemiwo">
<title>Home</title>
<script type="text/javascript" src="settings/js/jquery-2.2.3.min.js"></script>
<link rel="stylesheet" href="settings/css/bootstrap.min.css">

<link rel="stylesheet" href="settings/index.css">
<link rel="stylesheet" href="settings/fonts/fontawesome-all.min.css">
<script src="https://use.fontawesome.com/cc60e61ffa.js"></script>

</head>
 <body>
	<header>	
  		<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
		<h1>
					<a class="navbar-brand text-capitalize" href="index.php">
						<img src="settings/img/star.png" width="50px" alt="logo">
					</a>
				</h1>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">   
			<span class="navbar-toggler-icon"></span>
 			 </button>

  <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><h3>Home</h3><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="settings/contact.php"><h3>Contact</h3></a>
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
  <section style="margin-top: 88px; padding-top: 100px;">
  	<div class="container">
		<br>
  <div class="card-deck text-center">
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">TOTAL</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"><?php echo $confirmed->features[0]->attributes->value; ?> </h1>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Recovered</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"><?php echo $recovered->features[0]->attributes->value; ?></h1>
      </div>
    </div>
    <div class="card mb-4 shadow-sm">
      <div class="card-header">
        <h4 class="my-0 font-weight-normal">Deaths</h4>
      </div>
      <div class="card-body">
        <h1 class="card-title"><?php echo $deaths->features[0]->attributes->value;?></h1>
      </div>
    </div>
  </div>
</div>	 
  </section>
</main>
	
<footer class="py-2 bg-light navbar fixed-bottom navbar-expand-sm" style="margin-bottom: auto;">
  <div class="container-sm justify-content-center">
    <span class="justify-content-center" style="color: black; opacity: 90%; font-size: 20px; font-weight: 500;">&copy;Daniel Ola</span>
  </div>
  <div class="justify-content-end" id="social" style="letter-spacing:  10px;">
	<a href="https://facebook.com/olabemiwodaniel"><span class="fab fa-facebook-f"></span></a>
	<a href="https://twitter.com/fikkyman1"><span class="fab fa-twitter"></span></a>
	<a href="https://instagram.com/danielolabemiwo"><span class="fab fa-instagram"></span></a>
	<a href="https://linkedin.com/olabemiwodaniel"><span class="fab fa-linkedin"></span></a>
  </div>
</footer>
</body>

<script type="text/javascript" src="settings/js/bootstrap.min.js"></script>
</html>