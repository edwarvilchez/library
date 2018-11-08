<?php
$pageTitle = "Full Catalog";
$section = null;
include("./inc/header.php");

//agregamos las categorias al ciclo para mostrarlas
if (isset($_GET["cat"])) {
	if($_GET["cat"] == "books"){
	$pageTitle = "Books";
	$section = "books";
	}
	else if ($_GET["cat"] == "movies") {
	$pageTitle = "Movies";
	$section = "movies";
	}
	else if ($_GET["cat"] == "music") {
	$pageTitle = "Music";
	$section = "music";
	}
}
?>

<div class="section page">
	<h1><?php echo $pageTitle; ?></h1>
</div>

<?php
include("./inc/footer.php");
?>
