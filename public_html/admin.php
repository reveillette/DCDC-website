<?php require_once("../resources/db_connection.php"); ?>
<?php require_once("../resources/functions.php"); ?>
<?php include("../resources/layouts/header.php"); ?>

	<div id="main">
		<div id="navigation">
			&nbsp;
		</div>
		<div id="page">
			<h2>Admin Menu</h2>
			<p>Welcome to the admin area for the Community How-To Guides Site.</p>
			<ul>
				<li><a href="manage_content.php">Manage Website Content</a></li>
				<li><a href="manage_admins.php">Manage Admin Users</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</div>
	</div>

<?php include("../resources/layouts/footer.php"); ?>
