<?php include 'header.php'; ?>
<div id="contenuPage">
<?php
if (!isset($_GET['page']))
include 'calculatrice.html';
if (isset($_GET['page']))
if ($_GET['page']=="articles")
include 'articles.html';
if (isset($_GET['page']))
if ($_GET['page']=="nous-contacter")
include 'nous-contacter.html';
?>
</div>
<?php include 'footer.html'; ?>