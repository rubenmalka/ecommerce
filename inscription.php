
<?php
$titre = 'Devenez membres';
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
// Relier formulaire inscription a la bdd
 if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['email']) AND isset($_POST['mdp']) AND isset($_POST['password-confirmation'])){
   if($_POST['mdp'] == $_POST['password-confirmation']){
     $requete = $bdd->prepare('INSERT INTO user(nom, prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)');
     $requete->execute(array(
       'nom'     => $_POST['nom'],
       'prenom'  => $_POST['prenom'],
       'email'    => $_POST['email'],
       'mdp'    => $_POST['mdp']
     ));
   }else {
     echo "Mot de passe incorrect !";
   }

}else {
  // Les info n'ont pas été envoyés par le form
}


$reponse = $bdd ->query('SELECT email,mdp FROM user');
while ($donnees = $reponse ->fetch()) {
  if ($donnees['email'] == isset($_POST['email2']) AND $donnees['mdp'] == isset($_POST['mdp2'])){
    echo "Bienvenue";
  }else {
  // echo "Inscris toi"
  }
}


 ?>



 <!-- BLOC INSCRIPTION -->
 <div id="inscription">
   <div class="container">
     <form class="form-horizontal" role="form" method="POST" action="inscription.php">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6">
                 <h2>Inscription</h2>
                 <hr>
             </div>
         </div>
         <div class="row">
             <div class="col-md-3 field-label-responsive">
                 <label for="name">Nom</label>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                         <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-user"></i></div>
                         <input type="text" name="nom" class="form-control" id="name"
                                placeholder="Votre nom" required autofocus>
                                <input type="text" name="prenom" class="form-control"
                                       placeholder="Votre prénom" required autofocus>
                     </div>
                 </div>
             </div>

             <div class="col-md-3">
                 <div class="form-control-feedback">
                         <span class="text-danger align-middle">
                             <!-- Put name validation error messages here -->
                         </span>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-3 field-label-responsive">
                 <label for="email">E-mail</label>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                         <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                         <input type="text" name="email" class="form-control" id="email"
                                placeholder="you@example.com" required autofocus>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="form-control-feedback">
                         <span class="text-danger align-middle">
                             <!-- Put e-mail validation error messages here -->
                         </span>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-3 field-label-responsive">
                 <label for="password">Mot de passe</label>
             </div>
             <div class="col-md-6">
                 <div class="form-group has-danger">
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                         <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                         <input type="password" name="mdp" class="form-control" id="password"
                                placeholder="Mot de passe confidentiel" required>
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="form-control-feedback">

                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-3 field-label-responsive">
                 <label for="password">Confirm Password</label>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                         <div class="input-group-addon" style="width: 2.6rem">
                             <i class="fa fa-repeat"></i>
                         </div>
                         <input type="password" name="password-confirmation" class="form-control"
                                id="password-confirm" placeholder="Password" required>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row" id="bouton">
             <div class="col-md-3"></div>
             <div class="col-md-6">
                 <button class="btn btn-dark"><i class="fa fa-user-plus"></i> Inscription</button>
                 <a id="inscris" class="btn btn-dark"><i class="fa fa-users" aria-hidden="true"></i> Déja membres</a>
             </div>
         </div>
     </form>
   </div>
 </div>



 <!-- BLOC CONNEXION -->
<div id="connexion">
  <div class="container">
     <form class="form-horizontal" role="form" method="POST" action="membres.php#">
         <div class="row">
             <div class="col-md-3"></div>
             <div class="col-md-6">
                 <h2>Connexion</h2>
                 <hr>
             </div>
         </div>

         <div class="row">
             <div class="col-md-3 field-label-responsive">
                 <label for="email">E-mail</label>
             </div>
             <div class="col-md-6">
                 <div class="form-group">
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                         <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-at"></i></div>
                         <input type="text" name="email2" class="form-control" id="email_connect"
                                placeholder="you@example.com">
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="form-control-feedback">
                         <span class="text-danger align-middle">
                             <!-- Put e-mail validation error messages here -->
                         </span>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-md-3 field-label-responsive">
                 <label for="password">Mot de passe</label>
             </div>
             <div class="col-md-6">
                 <div class="form-group has-danger">
                     <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                         <div class="input-group-addon" style="width: 2.6rem"><i class="fa fa-key"></i></div>
                         <input type="password" name="mdp2" class="form-control" id="password_connect"
                                placeholder="Mot de passe">
                     </div>
                 </div>
             </div>
             <div class="col-md-3">
                 <div class="form-control-feedback">

                 </div>
             </div>
         </div>

         <div class="row" id="bouton">
             <div class="col-md-3"></div>
             <div class="col-md-6">
                 <button class="btn btn-dark"><i class="fa fa-users" aria-hidden="true"></i> Se connecter</button>
                 <a id="nvmembre" class="btn btn-dark"><i class="fa fa-user-plus"></i> Pas de compte?</a>
             </div>
         </div>
       </form>
   </div>
  </div>





<?php
include('footer.php')
?>
