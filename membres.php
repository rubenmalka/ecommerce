<?php
$titre = 'Espace membre' ;
include 'header.php';
  ?>

<?php
try {
 // connexion a la bdd
 $bdd= new PDO('mysql:host=localhost;dbname=letsShop;','root','');
} catch(exception $e){
 die('Erreur : '.$e->getMessage());
 // s'il y a des erreurs
}


$reponse = $bdd ->query('SELECT id_user,email,nom,mdp FROM user');
while ($donnees = $reponse ->fetch()) {
  if ($donnees['email'] == isset($_POST['email2']) AND $donnees['mdp'] == isset($_POST['mdp2'])){
    $_SESSION['id'] = $donnees['id_user'];
    $_SESSION['nom'] = $donnees['nom'];
    // $_SESSION['connect'] = true;
    // $_SESSION['premium'] = true;
    echo 'bienvenu ' .$_SESSION['id'];
  }else {
  // echo "Inscris toi"

  }

}


 ?>





<?php
include 'footer.php';
 ?>
