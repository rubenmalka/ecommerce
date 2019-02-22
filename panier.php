<?php $titre='Panier';
include 'header.php'; ?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Let's Shop</h1>
        <h1 class="jumbotron-heading">Panier</h1>
     </div>
</section>

<div class="container mb-4">
  <div class="row">
    <div class="col-12">
      <div class="table-responsive">
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"> </th>
        <th scope="col">PRODUIT</th>
        <th scope="col" class="text-right">PRIX</th>
        <th> </th>
      </tr>
    </thead>
  <tbody>
      <tr>
        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
        <td>Product Name </td>
        <td class="text-right">€</td>
        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
      </tr>
      <tr>
        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
        <td>Product Name Toto</td>
        <td class="text-right">33,90 €</td>
        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
        </td>
        </tr>
        <tr>
        <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
        <td>Product Name Titi</td>
        <td class="text-right">€</td>
        <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Total</strong></td>
        <td><strong>€</strong></td>
        </tr>
            </tbody>
            </table>
      </div>
    </div>
  <div class="col mb-2">
    <div class="row">
      <div class="col-sm-12  col-md-6">
          <button class="btn btn-block btn-dark">Continue Shopping</button>
      </div>
        <div class="col-sm-12 col-md-6 text-right">
          <button class="btn btn-lg btn-block btn-dark text-uppercase">PAIEMENT</button>
        </div>
    </div>
  </div>
</div>
</div>


<?php include 'footer.php'; ?>
