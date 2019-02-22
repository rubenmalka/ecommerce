<?php
try {
 // connexion a la bdd
 $bdd= new PDO('mysql:host=localhost;dbname=letsShop;','root','');
} catch(exception $e){
 die('Erreur : '.$e->getMessage());
 // s'il y a des erreurs
}
// si il y a bien un id, bien ecris dans l url et qu'il n'ya pas de txt dans l'url c bon et on le force a etre un entier avec intval
// isset pour voir sil est ien defini
// superieur a 0 pour qu'on est bien une valeur obligatoirement positive et non negativ -1 -2

 if(isset($_GET['id']) AND intval($_GET['id']) >0){
   // on recupere get id
   //echo 'ok';
   $id=intval($_GET['id']);
   $req = $bdd->prepare('SELECT id_produit, titre_pdt, photo_pdt, designation_pdt, prix_pdt FROM produit WHERE id_produit=:id');
   $req->execute(array(
     "id"=> $id
   ));

   if ($req->rowCount()>0) {
     // tant quon recupere un id un titre une photo... on les met dans un tableau row
     // puis les valeurs on les mets dans des variables idpdt, titrepdt.....

     while($row=$req->fetch()) {
       $idpdt= $row['id_produit'];
       $titrepdt = $row['titre_pdt'];
       $photo = $row['photo_pdt'];
       $designation = $row['designation_pdt'];
       $prix = $row['prix_pdt'];
     }
   }else{
     echo 'erreur 404';
     //erreur  //echo 'erreur'; sinon on renvoie vers une page header location 404
   }

//boucle qui recupere toute les données de ma requete sql, de la bdd

 }else{
   //echo 'erreur'; sinon on renvoie vers une page header location 404
   echo 'erreur 404';
 }
 $titre=$titrepdt;
 include 'header.php';

// $req = $bdd->query('SELECT id_produit, titre_pdt, photo_pdt, designation_pdt, prix_pdt FROM produit WHERE id_produit=$id');?>
       <!-- on demande les articles de la table produits -->
 <?php // while($row=$req->fetch()) { ?>



<div class="container">
  <div class="row">
  <div class="col-md-4 mt-3 cat-fav">
    <img class="card-img" src="<?php echo $photo;?>" alt="tshirt">
  </div>
  <div class="col-md-4 mt-3 cat-fav">
  <h3><?php echo $titrepdt ?></h3>
  <h3><?php echo $prix ?></h3> </br>
  <p><?php echo $designation ?></p> </br>


    <li class="list-inline-item">
      <a href="" class="btn btn-info btn-rounded" id="panier">Ajouter au panier</a>
    </li>
  </div>
</div>

</div>
<?php include 'footer.php'; ?>
