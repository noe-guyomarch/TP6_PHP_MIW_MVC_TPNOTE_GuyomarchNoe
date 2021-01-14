<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <button class="btn-success"><a href="<?php echo WEB_ROOT ?>categorie/detail?id=<?php echo $_GET['id'] ?>" style="color: white;">Retour</a></button>
    <p><?php echo WEB_ROOT ?>produit/ajouterModifier?id=<?php echo $_GET['id'] ?></p>
    
    <div style="margin: 20px 0px;">
        <form action="<?php echo WEB_ROOT ?>produit/ajouterModifier?id=<?php echo $_GET['id'] ?>&idProduit=<?php if (isset($_GET['idProduit'])){echo $_GET['idProduit'];}?>" method="POST">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="<?php if (isset($produit->name)){echo $produit->name;}?>">
            <br>
            
            <label for="description">Description</label><br>
            <textarea rows="8" cols="80" id="description" name="description"><?php if (isset($produit->description)){echo $produit->description;}?></textarea>
            <br>
            <br>
            <label for="price">Prix</label><br>
            <input type="text" id="price" name="price" value="<?php if (isset($produit->price)) {echo $produit->price;} ?>">
            <br>

            <input class="btn-success" type="submit" value="Modifier">
        </form>
    </div>


</body>

</html>