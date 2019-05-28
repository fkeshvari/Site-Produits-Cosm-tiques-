<?php
if(!empty($_POST['pseudo']))
{
<html>
<head>
       <title>Ycare</title>
       <script
  src="http://code.jquery.com/jquery-3.3.1.slim.js"
  integrity="sha256-fNXJFIlca05BIO2Y5zh1xrShK3ME+/lYZ0j+ChxX2DA="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" type="text/css" href="css/accueil.css"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" type="text/css" href="styles/inscription.css">
</head>
<body>
<header>
<!-- <nav class="navbar navbar-inverse">
<ul class="nav nav-bar">
<li class="active"><a href="#">Acceuil</a></li>
<li><a href="#">Homme</a></li>
<li><a href="#">Femme</a></li>
<li><a href="#">Inscription</a></li>
</ul>
</nav> -->
<nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"> <div id="lelogo"><img src="images/Logoblanc.png" width="80px" height="80px"></div></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul id="menu" class="nav navbar-nav">
        <li id="accueil">
        <a class="nav-link dropdown-toggle" href="index.html">
          Accueil
        </a>
       <!--  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Qui sommes nous?</a><br><br>
          <a class="dropdown-item" href="#">Les nouveautés</a><br><br>
          <a class="dropdown-item" href="#">Comment nous trouver?</a> -->
        </li>
        <li id="homme"><a class="nav-link dropdown-toggle" href="hommes.html">
          Hommes
        </a>
  
        <li id="femme">
        <a class="nav-link dropdown-toggle" href="femmes.html">
          Femmes
        </a>
     
        </li>
        <li id="faq"><a <a class="nav-link dropdown-toggle" href="#">
          FAQ
        </a>
     <!--    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Forum</a><br><br>
          <a class="dropdown-item" href="#">Poser une question</a><br><br>
          <a class="dropdown-item" href="#">Questions fréquentes</a><br> -->


        </li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="inscription.html"><span class="glyphicon glyphicon-user"></span> S'inscrire</a></li>
        <li><a href="connexion.html"><span class="glyphicon glyphicon-log-in"></span>Se connecter</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span>Mon Panier</a></li>
      </ul>
    </div>
  </div>
</nav>
</header>

<div class="total">
       <div class="container-fluid">
                    <div class="col-md-12">
              
       <h1>Création de votre compte</h1>
</div> 
</div>


<form method="post"> <!-- ouverture du formulaire -->
<div class="col-md-12">
       <div class="col-md-4">

       <h2>Civilité</h2>
</div>
       <div class="col-md-4">
        <br>
      

              <input type="checkbox" name="case">
              <label for="case">Mme</label>
              <input type="checkbox" name="case">
              <label for="case">M</label>
       </div>
</div>

<br>
<div class="col-md-12">
       <div class="col-md-4">
       <h2>Prénom</h2>
</div>
<div class="col-md-4">
       <input type="text" class="explication">
</div>
</div>

<br>
       <div class="col-md-12">
       <div class="col-md-4">
       <h2>Nom</h2>
</div>
<div class="col-md-4">
       <input type="text" class="explication">
</div>
</div>

<br>
<div class="col-md-12">
       <div class="col-md-4">
       <h2>Adresse mail</h2>
</div>
       <div class="col-md-4">
       <input type="text" class="explication">
</div>
</div>
<br>
<div class="col-md-12">
       <div class="col-md-4">
       <h2>Mot de passe</h2>
</div>
       <div class="col-md-4">
       <input type="password" class="explication" placeholder="   6 caracteres minimum(avec 1 lettre, 1 chiffre)">
</div>
</div>
<br> 
<br>
<br>
<div class="col-md-12">
       <div class="col-md-4">
       <h2>Confirmation de mot de passe</h2>
</div>
<div class="col-md-4">
       <input type="password" class="explication">
</div>
</div>

<div class="col-md-12">
       <div class="col-md-4">
       <h2>Voulez-vous recevoir l'actualité de Ycare par mail?</h2>
</div>

<br>
<br>
<br>
<div class="col-md-4">
       <input type="radio">
       <label>Oui</label>
       <input type="radio">
       <label>Non</label>
</div>
</div>


       
       <div class="col-md-12">
       <div class="col-md-4">
       <input type="submit" id="bouton" value="Valider">
</div> 
</div>

</div>  <!--div total-->
</form>


<footer>
       <div class="col-md-12">

              
       
              <div class="col-md-6">
                    <h3>Copyright &copy; Ycare.co</h3>
              </div> 


              <div class="col-md-6" id="reseau_socieux">
                    <ul class="col-md-6">
                           <li class="col-md-3 col-xs-3"><a href="https://www.facebook.com" target="blank"><img  id="fb" src="images/fb.gif"></a></li>
                           <li class="col-md-3 col-xs-3"><a href="https://www.youtube.com" target="blank"><img id="youtube" src="images/tenor.gif"></a></li>
                           <li class="col-md-3 col-xs-3"><a href="https://www.instagram.com" target="blank"><img id="insta" src="images/insta.gif"></a></li>
                           <li class="col-md-3 col-xs-3"><a href="https://www.plus.google.com" target="blank"><img id="googleplus" src="images/googleplus.gif"></a></li>
                           
                    </ul>
                    
              </div> 
              
</div>

       
</footer> 
</body>
</html>

}
?>
