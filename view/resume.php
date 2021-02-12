<!DOCTYPE html>
<html lang="en">
	<head>
		
		<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="content-script-type" content="text/javascript" />
		<meta http-equiv="content-style-type" content="text/css" />
		<meta http-equiv="content-language" content="en" />
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<meta name="author" content="Auriga Aristo" />
		<meta name="description" content="I'm Auriga Aristo, a ninja web and app developer with great knowledge of back-end technics." />
		<meta name="keywords" content="Auriga Aristo, Interactive Resume, PHP programmer, Web developer, Laravel developer, Startup, Interactive CV, Resume, CV, Algorithms, PHP, MySQL, Laravel, Apps Developer, Android, iOS" />
		<meta name="robots" content="index, follow" />
		<meta name="revisit-after" content="14 days" />
			
		<title>Auriga Aristo - Web and Apps Developer</title>
		
		<!-- Bootstrap core CSS -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" type="text/css" />
		<link href="<?= VIEW_PATH; ?>css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?= VIEW_PATH; ?>style.css" rel="stylesheet" />

        <link href="https://use.fontawesome.com/f9a85eeda0.css" media="all" rel="stylesheet">
        <script src="https://use.fontawesome.com/f9a85eeda0.js"></script>
		
		<link rel="shortcut icon" href="<?= BASE; ?>favicon.ico" type="image/x-icon" />
		<link rel="icon" href="<?= BASE; ?>favicon.ico" type="image/x-icon" />
		
		<!--[if lt IE 9]>
			<script src="<?= VIEW_PATH; ?>js/html5shiv.js"></script>
			<script src="<?= VIEW_PATH; ?>js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body data-spy="scroll" data-target="#navbar-example">
	
		<div id="top" class="jumbotron">
			<div class="container">
				<h1><?= $profile->full_name; ?></h1>
				<p class="lead">Web and Apps Developer</p>
			</div>
			
			<div class="overlay"></div>
			
			<a href="#profile" class="scroll-down">	
				<span class="glyphicon glyphicon-chevron-down"></span>
			</a>
		</div>
		
		<nav class="navbar navbar-default" id="navbar-example" role="navigation">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#profile">Profile</a></li>
					<li><a href="#experiences">Experiences</a></li>
					<li><a href="#abilities">Abilities</a></li>
					<li><a href="#interests">Interests</a></li>
					<li><a href="#projects">Projects</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</nav>
		
		<div class="background-white">
			<div id="profile" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/profile.inc.php'); ?>
			</div>	
		</div>	
		
		<div id="experiences" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/experiences.inc.php'); ?>
		</div>
		
		<div class="background-white">
			<div id="abilities" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/abilities.inc.php'); ?>
			</div>
		</div>

		<div id="interests" class="container">
			<?php include(VIEW_INCLUDE_PATH.'sections/interests.inc.php'); ?>
		</div>

        <div class="background-white">
            <div id="projects" class="container">
                <?php include(VIEW_INCLUDE_PATH.'sections/projects.inc.php'); ?>
            </div>
        </div>

		<div class="background-gray">
			<div id="contact" class="container">
				<?php include(VIEW_INCLUDE_PATH.'sections/contact.inc.php'); ?>
			</div>
		</div>

        <?php include(VIEW_INCLUDE_PATH.'sections/upgrade.inc.php'); ?>
		
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/script.js"></script>
		<script type="text/javascript" src="<?= VIEW_PATH; ?>js/bootstrap.min.js"></script>
	</body>
</html>
