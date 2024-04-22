<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Vehicle Dealer of Nepal, national motors, national motors in Nepal, national motors in biratnagar, bus dealer in nepal, bus dealer in biratnagar, engine parts dealer in biratnagar, tyre dealer in biratnagar, truck dealer in biratnagar,
    different types on transport in nepal,  engine parts dealer in nepal, tyre dealer in nepal, truck dealer in nepal">
    <meta name="description" content="National Motors is one of the most branded and registered Super Engines Dealer situated at the Mid-Biratnagar.">
    <meta name="author" content="Pracas Infosys">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dealer | Track Your Cargo | CargoPress</title>

    <!-- Styling -->
    <link href="css/style.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto%3A400%2C700%7CSource+Sans+Pro%3A700%2C900&amp;subset=latin" rel="stylesheet">
	
	<script src="js/modernizr.custom.24530.js" type="text/javascript"></script>
	
	<link rel="shortcut icon" href="images/fav.png">
	
	<script>
	/* Google Map Market Settings */
	
	var route = {
		origin: "Chiang Mai, Thailand",
		destination: "Singapore",
		waypoints: [
			{
				location:"Bangkok",
				stopover:true
			},{
				location:"Songkhla",
				stopover:true
			}
			,{
				location:"Kuala Lumpur, Malaysia",
				stopover:true
			}
		]
	}
	</script>
	
</head>
<body>
	
	<!-- MAIN PAGE CONTAINER -->
	<?php include("header.php"); ?>
	<?php include_once("analyticstracking.php") ?>
		<!-- MAIN TITLE -->
		<!-- BREADCRUMBS -->
		<div class="breadcrumbs">
			<div class="container">
				<span>
					<a class="home" href="index.php" title="Go to National Motors." rel="v:url">National Motors</a>
				</span>
				<span>
					<a class="post post-page" href="#" title="Go to dealers." rel="v:url">Dealers</a>
				</span>
			</div>
		</div><!-- /.breadcrumbs -->
		
		<div class="container">
			
			<div class="row">
			
				<div class="col-sm-8 col-sm-offset-2 margin-bottom-60">
					
					<p>
						Enter your tracking code below and click the "Track" button to find out exactly where your cargo is right now and when it will arrive at its final destination.
					</p>
				
					<form method="post" action="tracking_result.html" class="trackForm clearfix">
						<input type="text" name="code" placeholder="Enter your tracking code here..." id="name">
						<button type="submit" class="btn btn-info">Track</button>
					</form>
				
				</div><!-- /.col -->
			
			</div><!-- /.row -->
			
		</div><!-- /.container -->
		
		<!-- FOOTER -->
	<?php include("footer.php"); ?>
		
	</div><!-- /.boxed-container -->
	
	<script src="js/jquery-2.1.4.min.js" type="text/javascript"></script>
	<script src="js/bootstrap/carousel.js"></script>
	<script src="js/bootstrap/transition.js"></script>
	<script src="js/bootstrap/button.js"></script>
	<script src="js/bootstrap/collapse.js"></script>
	<script src="js/bootstrap/validator.js"></script>
	<script src="js/underscore.js"></script>
	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/SimpleMap.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>