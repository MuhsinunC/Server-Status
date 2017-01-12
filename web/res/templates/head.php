<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Load Font Awesome -->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Load Materialize-CSS -->
	<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
	<!-- Load JQuery 3.1.1 -->
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
	<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<!--Import Google Icon Font-->
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Load Roboto Font -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
<!-- Load Custom CSS -->
	<link rel="stylesheet" href="./res/css/custom.css">
<!-- Load Config.php File -->
	<?php $configs = include('./res/templates/config.php');?>

<!-- Load Nav Bar -->

	<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
		})
	</script>
	
	<div class="row">
		<nav>
			<div class="nav-wrapper indigo">
				<div class="col s12">
					<a href="<?php echo $configs->title_link?>" class="brand-logo"><?php echo $configs->title?></a>
					<a href="#" data-activates="mobile-nav" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="#">Home</a></li>
						<li><a href="#">Link</a></li>
					</ul>
					<ul class="side-nav" id="mobile-nav">
						<li><a href="#">Home</a></li>
						<li><a href="#">Link</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>