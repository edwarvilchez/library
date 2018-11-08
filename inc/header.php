<!DOCTYPE htlm>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

<!--apertura del header-->
<div class="header">
	<div class="wrapper">
	<h1 class="branding-title">Personal Media Library</a></h1>
	<ul class="nav">
		<li class="books<?php if ($section == "books"){echo " on";} ?>"><a href="catalog.php?cat=books">Books</a></li>
		<li class="movies"><a href="catalog.php?cat=movies<?php if ($section == "movies"){echo " on";} ?>">Movies</a></li>
		<li class="music"><a href="catalog.php?cat=music<?php if ($section == "music"){echo " on";} ?>">Music</a></li>
		<li class="suggest <?php if ($section == "suggest"){echo " on";} ?>"><a href="suggest.php">Suggest</a></li>
	</ul>
	</div>
</div>
<!--cierre del header-->

<!--apertura del contenido-->
<div id="content">