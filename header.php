<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF8" />
  <meta name="author" content="JG" />
  <meta name="keywords" content="Mon appli web" />
  <meta name="description" content="Appli en ligne pour le TP SLAM5" />
  <meta name="date" content="2012-08-01T13:45:15+01:00" />
  <link rel="shortcut icon" type="image/x-icon" href="monIcon.ico" /> 
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Mon application web</title>
  <script src="monscript.js"></script>
  </head>
    <body>
    <div id="monEntete">
<h2><img src="logo.jpg" alt="logo du site" />Mon application web
<img src="logo.jpg" alt="logo du site" /></h2>
</div>
<div id="maDivMenu">
  <ul id="monMenu">
<li><a href="index.php" title="Accueil"
<?php if (!isset($_GET['page'])) echo "class=\"current\""; ?>
>Accueil</a>
</li>
<li><a href="index.php?page=presentation" title="Présentation"
<?php if (isset($_GET['page']))
if ($_GET['page']=="presentation")
echo "class=\"current\""; ?>
>Présentation</a>
</li>
<li><a href="index.php?page=articles" title="Articles"
<?php if (isset($_GET['page']))
if ($_GET['page']=="articles")
echo "class=\"current\""; ?>
>Articles</a>
</li>
<li><a href="index.php?page=Tutos" title="Tutos"
<?php if (isset($_GET['page']))
if ($_GET['page']=="Tutos")
echo "class=\"current\""; ?>
>Tutos</a>
</li>
<li><a href="index.php?page=Forums" title="Forums"
<?php if (isset($_GET['page']))
if ($_GET['page']=="Forums")
echo "class=\"current\""; ?>
>Forums</a>
</li>
<li>
<a href="index.php?page=nous-contacter" title="Nous contacter"
<?php if (isset($_GET['page']))
if ($_GET['page']=="nous-contacter")
echo "class=\"current\""; ?>
>Nous contacter</a>
</li>
</ul>
</div>