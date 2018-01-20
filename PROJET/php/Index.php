<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Club Hippique de l'Elorn</title>
    <link href="css/mon_style.css" rel="stylesheet">
    

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>

	<div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Club Hippique de l'Elorn</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="./Index.php">Index</a></li>
                <li><a href="./FAQ.php">FAQ</a></li>
                <li><a href="./Membres.php">Membres</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu déroulant <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Lien1</a></li>
                    <li><a href="#">Lien2</a></li>
                    <li><a href="#">Lien3</a></li>
                    <li role="separator" class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
	
    <article>
             <div class="container">

      <div class="starter-template">
          <br/><br/><br/>
          <h1>Club Hippique de l'Elorn</h1>
        <p class="lead">Texte au dessus du carousel </p>
      </div>
	  
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/poney-club-cours.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide"  src="images/poney-club-cours.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
        <div class="item">
 
            <img class="third-slide"  src="images/poney-club-cours.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4" >
          
            <div  class="texte-media largeurColone well">
            <h4>Document audio compatible avec Chrome et Firefox et Internet Explorer</h4>
            <audio controls="controls" aligne="center">
            <source src="audio/Panda_mp3.mp3" type="audio/mp3"  />
            <p>navigateur non compatible</p>
            </audio>
         </div>
          
             
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-4">
          <div  class="texte-media largeurColone well">
            <h4>Document video compatible avec Chrome et Firefox et Internet Explorer</h4>
            <iframe src="https://www.youtube.com/embed/pUUGJD-JjGA" frameborder="0" allowfullscreen></iframe>
          </div>
         </div>
        <div class="col-lg-4">
            <div class="texte-media largeurColone well" >
            <h4>video intégré au site </h4>
            <video  controls="controls">
                <source src="video/Panda.mp4" type="video/mp4">
                <source src="video/Panda.ogg" type="video/ogg">
                <p>Video non supporté</p>
            </video>
            </div>
        </div><!-- /.col-lg-6-->
      </div><!-- /.row -->


     


      <!-- FOOTER -->
      <footer>

        <p><a href="https://validator.w3.org">Lien</a> vers le validator HTML</p>
        <p><a href="https://jigsaw.w3.org/css-validator/">Lien</a> vers le validator CSS</p>

      </footer>

    </div>
    </div>
    </article><!-- /.container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>

