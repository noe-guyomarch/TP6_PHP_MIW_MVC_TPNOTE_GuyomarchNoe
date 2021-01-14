<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div id="app" style="margin: 10px 5px;">
        <button class="btn-success"><a href="<?php echo WEB_ROOT ?>categorie/detail?id=<?php echo $_GET['id'] ?>" style="color: white;">Retour</a></button>

        <h2 style="margin: 10px 5px;">Détail Produit : <?php echo $produit->name ?></h2>

        <!-- produit description -->
        <h5>Description :</h5>
        <p> <?php echo $produit->description ?></p>
        <br>
        <!-- produit -->
        <h5>Prix :</h5>
        <p> <?php echo ($produit->price/100) ?> €</p>
        <br>
        <!-- produit -->
        
</body>

</html>