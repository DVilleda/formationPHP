<!DOCTYPE html>
<html>

<head>
    <title>Laravel Tutorial</title>
</head>

<body>
    <h1>Bienvenue</h1>
    <p>Voici mes produits</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Code</th>
      <th scope="col">Nom</th>
      <th scope="col">Description</th>
      <th scope="col">MSRP</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($products as $produit):?>
    <tr>
      <th scope="row"><?= $produit->productCode ?></th>
      <td><?= $produit->productName?></td>
      <td><?= $produit->productDescription?></td>
      <td><?=$produit->MSRP?></td>
    </tr>
    <?php endforeach?>
  </tbody>
</table>
</body>

</html>