<?php
$titre = "Collection hommes";
include "header.php"
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

<!-- <div class="col-md-12 mt-3">
  <div class="image">
    <div class="text">
    <a href="tshirt.php">T-Shirt</a> <br><br>
    <a href="sweat.php">Sweat</a> <br><br>
    <a href="jean.php">Jeans</a> <br><br>
    <a href="veste.php">Vestes</a> <br><br>
    <a href="chemise.php">Chemises</a> <br><br>
    </div>
  </div>

</div> -->

<!--
<div class="container-custom">
  <div class="row">
    <div class="col-md-12 mt-3 cat-fav">
      <img class="card-img" src="img/homme.jpg" alt="homme">
      <div class="text">
      <a href="tshirt.php">T-Shirt</a> <br><br>
      <a href="sweat.php">Sweat</a> <br><br>
      <a href="jean.php">Jeans</a> <br><br>
      <a href="veste.php">Vestes</a> <br><br>
      <a href="chemise.php">Chemises</a> <br><br>
      </div>
    </div>
  </div>
</div> -->

<div class="container">
    <div class="row">
        <div class="col-md-12 mt-3 cat-fav">
            <div class="card">
                <img class="card-img" src="img/homme.jpg" alt="Card image">
                <div class="card-img-overlay">
                  <a href="tshirts_hommes.php" class="card-title centered">T-Shirt</a> <br>

                <a href="sweats_hommes.php"  class="card-title centered2">Sweats</a> <br>

                <a href="jeans_hommes.php"  class="card-title centered3">Jeans</a> <br>

                <a href="vestes_hommes.php"  class="card-title centered4">Vestes</a> <br>

                <a href="#"  class="card-title centered5">Chemises</a> <br>
              </div>
              



            </div>
        </div>
   </div>
</div>





<?php
include "footer.php"
 ?>
