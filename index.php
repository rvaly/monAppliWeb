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
<li><a href="index.html" title="Accueil" class="current">Accueil</a></li>
<li><a href="index.html" title="Présentation">Présentation</a></li>
<li><a href="index.html" title="Articles">Articles</a></li>
<li><a href="index.html" title="Tutos">Tutos</a></li>
<li><a href="index.html" title="Forums">Forums</a></li>
<li><a href="index.html" title="Nous contacter">Nous contacter</a></li>
</ul>
</div>
<form name="maCalculette" action="" onSubmit="affResult();return false;">
<div id="contenuPage">
<table class="calc">
<tr>
<td colspan="4" class="ecran">
<input type="text" name="ecran" class="ecran" />
</td>
</tr>
<tr>
<td class="boutons"><input type="button" class="unBouton" value="7"
onClick="touche('7')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="8"
onClick="touche('8')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="9"
onClick="touche('9')" /></td>
<td class="boutons"><input type="button" class="unBouton"
value="&divide;" onClick="touche('/')" /></td>
</tr>
<tr>
<td class="boutons"><input type="button" class="unBouton" value="4"
onClick="touche('4')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="5"
onClick="touche('5')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="6"
onClick="touche('6')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="x"
onClick="touche('*')" /></td>
</tr>
<tr>
<td class="boutons"><input type="button" class="unBouton" value="1"
onClick="touche('1')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="2"
onClick="touche('2')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="3"
onClick="touche('3')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="-"
onClick="touche('-')" /></td>
</tr>
<tr>
<td class="boutons"><input type="button" class="unBouton" value="0"
onClick="touche('0')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="."
onClick="touche('.')" /></td>
<td class="boutons"><input type="button" class="unBouton" value="="
onClick="affResult()" /></td>
<td class="boutons"><input type="button" class="unBouton" value="+"
onClick="touche('+')" /></td>
</tr>
</table>
</div>
</form>


  </body>
</html>
