<?php require_once("../resources/db_connection.php"); ?>
<?php require_once("../resources/functions.php"); ?>
<?php
	// 2. Perform database query
	$query  = "SELECT * ";
	$query .= "FROM pages ";
	$query .= "WHERE id < 10 ";
	$query .= "ORDER BY id ASC";
	$result = mysqli_query($connection, $query);
	confirm_query($result);
?>
<!--Header-->
<?php include("../resources/layouts/header.php"); ?>

<div class="container-fluid">
  <div class="page-header">
    <h1>Manage Content</h1>

  </div>
  <div id="navigation">
		<ul class="subjects">
		<?php
			// 3. Use returned data (if any)
			while($subject = mysqli_fetch_assoc($result)) {
				// output data from each row
		?>
				<li><?php echo $subject["page_title"] . " (" . $subject["id"] . ")"; ?></li>
	  <?php
			}
		?>
		</ul>
  </div>
</div>

<?php
  // 4. Release returned data
  mysqli_free_result($result);
?>

<!--Footer-->
<?php include("../resources/layouts/footer.php"); ?>
