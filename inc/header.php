<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>

	<div class="header">

		<div class="wrapper">

			<h1 class="branding-title"><a href="/">Try it</a></h1>

			<ul class="nav">
		<li class="games<?php if ($section == "games") {echo " on";} ?>"><a href="catalog.php?cat=games">Games</a></li>
        <li class="books<?php if ($section == "books") {echo " on";} ?>"><a href="catalog.php?cat=books">Books</a></li>
        <li class="movies<?php if ($section == "movies") {echo " on";} ?>"><a href="catalog.php?cat=movies">Movies</a></li>
        <li class="music<?php if ($section == "music") {echo " on";} ?>"><a href="catalog.php?cat=music">Music</a></li>
        <li class="suggest<?php if ($section == "suggest") {echo " on";} ?>"><a></a></li>
      </ul>

		</div>

	</div>

	<div id="content">
