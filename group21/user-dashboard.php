<!-- Lab Info Variables -->
<?php
		$title = "Campus Crush - Dash";
		$createddate = "September 19 2017";
		$updateddate = "xxxx xx 2017";
		$filename = "user-dashboard.php";
		$banner = "Campus Crush - Dashboard";
		$description = "Hello, User Name";

?>
<!--
		Creator:      Connlaoi Smith
        Filename:    <?php echo $filename; ?>
        Created:      <?php echo $createddate; ?>
        Updated:     <?php echo $updateddate; ?>
        Description: <?php echo $description; ?>
-->

<!-- Include Header PHP -->
<?php include 'header.php'; ?>

<!-- HTML -->
<p class="content"><?php if(isset($_SESSION["username"])) {
   echo("Hello " . $_SESSION["username"]);
}  ?></p>

<br />
<hr />
<br />



<!-- Include Footer PHP -->
 <?php include 'footer.php'; ?>