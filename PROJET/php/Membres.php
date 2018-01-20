<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Membres</title>
	<link href="css/mon_style.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
	<style> <!-- sinon le menu est sur le texte -->
	body {
  padding-top: 50px;
	}
	.starter-template {
  padding: 40px 15px;
  text-align: center;
	}
	</style>

  </head>
  <body>

	
	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Club hippique de l'Elorn</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Accueil</a></li>
            <li><a href="#about">A propos</a></li>
            <li><a href="#contact">Contacts</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="starter-template">
        <h1>Club Hippique de l'Elorn</h1>
        <p class="lead"><br> </p>
      </div>

    </div><!-- /.container -->
	<article>
	<?php

	$nb=0;
	$dir = opendir("./images");
	echo '<div class='."table-responsive".'>';
	echo '<table class='."table  table-bordered  table-hover table-striped".'>'."\n";
	echo '<thead>';	
		echo '<tr>';
		echo '<th>'.'Photo'.'</th>';
		echo '<th>'.'Nom'.'</th>';
		echo '</tr>'."\n";
		echo '<tr>';
	echo '</thead>';
	echo '<tbody>';
		echo '<td>'.'<img src='."images/1".' alt="image-1" />'.'</td>';
		echo '<td>'."Membre 1".'</td>';
		echo '</tr>'."\n";
		echo '<tr>';
		echo '<td>'.'<img src='."images/1".' alt="image-1" />'.'</td>';
		echo '<td>'."Membre 2".'</td>';
		echo '</tr>'."\n";
		echo '<tr>';
		echo '<td>'.'<img src='."images/1".' alt="image-1" />'.'</td>';
		echo '<td>'."Membre 3".'</td>';
		echo '</tr>'."\n";
	echo '</tbody>';
	echo '</table>';
	closedir($dir);
	?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

