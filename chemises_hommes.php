<?php
$titre="Sweats";
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
?>
<div class="titre">
  <h5>Chemises homme</h5>
</div>
<div class="filet2"></div>
<div class="row" style="margin-left:0px; margin-right:0px; justify-content: center;"> <!-- row = ligne-->
  <div class="container mt-80">
              <div class="row mt-40">
        <?php $req = $bdd->query('SELECT * FROM produit WHERE id_genre=1 AND id_ctg=3');?>
              <!-- on demande les articles de la table produits -->
       <?php while($row=$req->fetch()) { ?>  <!-- fetch permet de recuperer une ligne dans ma base de donnée associé de la boucle while -->
         <div class="col-md-3 col-sm-6">
             <div class="box16">
               <a href="produit.php?id=<?php echo $row['id_produit'];?>"><img src="<?php echo $row['photo_pdt']; ?>" alt=""></a>

                 <div class="box-content">
                   <span class="post"><?php echo $row['titre_pdt']; ?></span>

                   <ul class="social">
                       <li><a href="produit.php?id=<?php echo $row['id_produit'];?>"><i class="fa fa-shopping-bag"></i></a></li>
                   </ul>
                 </div>
             </div>
             <span class="post"><?php echo $row['prix_pdt']; ?>€</span>
         </div>
        <?php }?>
      </div>
    </div>
</div>
<?php include 'footer.php'; ?>
