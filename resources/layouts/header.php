<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- DO NOT MODIFY THE ABOVE! Must be in this order for Bootstrap to function properly. Any other head content must come *after* these tags -->


		<!--Add PHP function for title here-->     
		<title>Community How-to Guides</title>
		<!--Add PHP function for description here-->
		<meta name="description" content="">
		<!--Google translate header-->
        <meta name="google-translate-customization" content="a1dd492345a82165-4839edc4d467aee0-gde77ab7fde45b4bd-2d"></meta>

		<!--Google Fonts-->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Oswald:400,300,700|Montserrat:400,700|Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'>
        <!-- Bootstrap -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <!-- Bootstrap select by Silvio Moreto, http://silviomoreto.github.io/bootstrap-select/-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap-select.css">
        <!-- JQuery UI -->
		<link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/themes/smoothness/jquery-ui.css">
		<!--Simptip simple tooltips by Arash Manteghi, http://arashm.net/lab/simptip/-->
        <link rel="stylesheet" type="text/css" href="css/simptip.css">
		<!--Custom styles-->
		<link rel="stylesheet" type="text/css" href="css/styles.css" media="all">

	    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->

	</head>
	<body>
	<!--[if lt IE 7]>
    	<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->



    <!-- Header content -->
    <nav id="navbar-main" class="navbar navbar-default navbar-static-top">
    	<div class="container">
    		<div class="navbar-header">
				<!-- Navbar toggle button -->
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="true" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
    			<a class="navbar-brand" href="index.php"><img id="logo" src="img/logo.png"></a>
    		</div>

		  	<div id="navbar" class="navbar-collapse collapse">
		        <ul class="nav navbar-nav">
		            <li><a id="header-howto-url" href="howto.php">How This Works</a></li>
		            <li><a id="header-library-url" href="library.php">Library</a></li>
		            <li><a id="header-create-url" href="create.php">Create a Guide</a></li>
		        </ul>
		        <ul class="nav navbar-nav navbar-right hidden" id="navbar-login-false">
		            <li><button class="btn navbar-btn btn-primary outline-blue" id="register-button-top">Sign up</button></li>
		            <li><button class="btn navbar-btn btn-primary outline-gray" id="login-button">Login</button></li>
		        </ul>
     		    <ul class="nav navbar-nav navbar-right" id="navbar-login-true">
		            <div class="dropdown">
						<button class="btn btn-primary dropdown-toggle outline-blue " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">Welcome, Ceara!&nbsp;<span class="caret"></span></button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#!"><span class="glyphicon glyphicon-wrench text-muted">&nbsp;</span>Account</a></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#!"><span class="glyphicon glyphicon-folder-open text-muted">&nbsp;</span>View my guides</a></li>
							<li class="divider"></li>
							<li role="presentation"><a role="menuitem" tabindex="-1" href="#!"><span class="glyphicon glyphicon-log-out text-muted">&nbsp;</span>Sign out</a></li>
						</ul>
					</div>
		        </ul>

			</div>
		</div> 	   
	</nav>
