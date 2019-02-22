<?php
session_start();
header('Content-Type: text/html;charset=UTF-8');
?>
<?php //require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?php echo $titre; ?> </title>  <!-- Pour afficher le titre a chaque page -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.ico">
    <!-- <link rel="shortcut icon" href=".ico"> -->
    <!-- <link rel="" href="index.php"> -->
    <link rel="favicon" href="logo.ico">



    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    

    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->

<!------ Include the above in your HEAD tag ---------->
  </head>
  <body>

    <!-- Bouton du menu -->
  <div class="container-fluid" style="padding-left:0px; padding-right:0px;">  <!-- Pour bouger le menu au milieu -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="#">

   </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>

     <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav mr-auto">
         <li class="nav-item active">
           <a class="nav-link" href="index.php#" id="accueil">Accueil</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link" href="test.php" id="accueil">TEST</a>
         </li>


         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Hommes
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="hommes.php">Hommes</a>
             <a class="dropdown-item" href="tshirts_hommes.php">T-Shirt</a>
             <a class="dropdown-item" href="sweats_hommes.php">Sweat</a>
             <a class="dropdown-item" href="jeans_hommes.php">Jeans</a>
             <a class="dropdown-item" href="vestes_hommes.php">Vestes</a>
             <a class="dropdown-item" href="chemises_hommes.php">Chemises</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="tshirt_hommes.php">NOUVEAUTES</a>
           </div>
         </li>

         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Femmes
           </a>
           <div class="dropdown-menu" aria-labelledby="navbarDropdown">
             <a class="dropdown-item" href="femmes.php">Femmes</a>
             <a class="dropdown-item" href="tshirt_femmes.php">T-Shirt</a>
             <a class="dropdown-item" href="pull_femmes.php">Pulls</a>
             <a class="dropdown-item" href="veste_femmes.php">Vestes</a>
             <a class="dropdown-item" href="robe_femmes.php">Robes</a>
             <a class="dropdown-item" href="jupe_femmes.php">Jupes</a>
             <a class="dropdown-item" href="pantalon_femmes.php">Pantalons</a>
             <div class="dropdown-divider"></div>
             <a class="dropdown-item" href="#">NOUVEAUTES</a>
           </div>
         </li>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link" href="boutiques.php" id ="boutiques">Nos boutiques <span class="sr-only">(current)</span></a>
             </li>

         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <!-- <ul class="navbar-nav mr-auto"> -->
             <?php if(isset($_SESSION['id'])) { ?>
               <li class="Deconnexion"><a href="deconnexion.php">Deconnecter de <?= $_SESSION['nom'] ?></a></li>
    <?php }else{?>
      <li class="nav-item active">
        <a class="nav-link" href="inscription.php" id="membres"> <i class="fa fa-user-plus"></i> Membres <span class="sr-only">(current)</span></a>
      </li>
  <?php  } ?>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
               <a class="nav-link" href="panier.php" id="panier"> <i class="fa fa-cart-plus" aria-hidden="true"></i> Panier<span class="sr-only">(current)</span></a>
             </li>

     </div>
    </nav>
    <!-- <?php if(!isset($_SESSION['nom'])){ ?>
    <li class="Account"><a href="formulaire.php"><span class="icon-user"></span> Inscription </a></li>
    <?php } else { ?>
    <span>bonjour,</span><strong><?php echo $_SESSION['nom'] ?></strong>
    <?php }?> -->
    <?php
    try {
     // connexion a la bdd
     $bdd= new PDO('mysql:host=localhost;dbname=letsShop;','root','');
    } catch(exception $e){
     die('Erreur : '.$e->getMessage());
     // s'il y a des erreurs
    }
    ?>
