<?php
$CURRENT_DIR = __DIR__;
$TITLE = "Quote of the Day";
require_once("php/lib/head-utils.php");
?>
<?php require_once($PREFIX . "php/lib/header.php") ?>

<!-- BEGIN page content -->
<div class="container">
	<div class="row">
		<div class="col-md-4">
			<?php require_once($PREFIX . "php/lib/sidebar.php") ?>
		</div>
		<div class="col-md-8">
			<?php require_once($PREFIX . "php/lib/quote.php") ?>
		</div>
	</div>
</div>
<!-- END page content -->

<?php require_once($PREFIX . "php/lib/footer.php"); ?>
</body>
</html>