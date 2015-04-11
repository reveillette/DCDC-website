<?php require_once("../resources/db_connection.php"); ?>
<?php require_once("../resources/functions.php"); ?>

<!--Header-->
<?php include("../resources/layouts/header.php"); ?>

<!-- Fullpage landing -->
<div class="container-fluid">
	<div class="jumbotron" id="landing">
	    <div class="title">
	        <h1>How Do I...</h1>
	        <a href="howto.php"><h2><span id="flip"></span></h2></a>
	    </div>
	</div>
</div>


<!-- Main content -->
<div class="container-fluid" id="main">

	<div class="color-bar centered" id="intro"> 
		<h4 class="half">Share what you know, <br> build stronger communities.</h4>
		<div class="container">
			<div class="row centered">
			    <div class="col-sm-4" id="share">
			        <a href="howto.php">
						<img class="icon" src="img/icons/wrench.svg">
						<br/>
						<h6>What is How To City?</h6>
					</a>
					<p>How To City lets community builders share their knowledge so others can take action for themselves. Take our guides into the field and organize your friends and neighbors to start impacting your community.</p>
				</div> 
				<div class="col-sm-4" id="library">
			        <a href="library.php">
						<img class="icon" src="img/icons/lightbulb.svg">
						<br/>
						<h6>Get ideas in the Library</h6>
			        </a>
					<p>The Library is a repository of guides for community enagement and action that is available to anybody for free download.</p>
				</div>     			   
				<div class="col-sm-4" id="create">
			        <a href="create.php">
						<img class="icon" src="img/icons/notepad.svg">
						<br/>
						<h6>Create your own guide</h6>
			        </a>
					<p>Create your own how-to guide, then publish it to web or download it as a PDF to print. The sky is the limit: how-to guides can cover any topic and can reach community members and professionals alike.</p>
				</div>     			   
			</div>
		</div>
	</div>

    <div class="navy color-bar" id="register">
    	<div class="container half">
		    <h5 class="white">Create a free account</h5>
		    <div class="row">    
		        <p class="lead light">Feel free to browse, download and share the guides on this site. When you're reading to start making your own guides and adding them to the library for others around the world to use, you can register for an account. It's quick and totally free!</p>
		        <br/>
		        <br/>
		        <div>
		        	<button class="btn btn-lg btn-primary" id="register-button">Sign up</button>
		        </div>	    
		    </div>
		</div>
    </div>
</div>


<!--Footer-->
<?php include("../resources/layouts/footer.php"); ?>
