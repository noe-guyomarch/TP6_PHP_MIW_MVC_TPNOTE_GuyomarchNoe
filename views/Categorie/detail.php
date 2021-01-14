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
        <button class="btn-success"><a href="<?php echo WEB_ROOT ?>" style="color: white;">Retour</a></button>

        <h2 style="margin: 10px 5px;">Détail Categorie : <?php echo $categorie->name ?></h2>

        <!-- detail categorie -->
        <h5>Description</h5>
        <p> <?php echo $categorie->description ?></p>
        <br>
        <!-- produit -->
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th> 
                    <th>Prix</th> 
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                //boucle pour afficher la liste
                foreach ($produits as $produit) {
                ?>
                    <tr>
                        <td>
                            <a href="<?php echo WEB_ROOT ?>produit/detail?id=<?php echo $_GET['id'] ?>&idProduit=<?php echo $produit->id ?>">
                            <?php echo $produit->name ?>
                        </a>
                        </td>
                        <td><?php echo ($produit->price/100) . ' €' ?></td>
                        <td>
                            <a href="<?php echo WEB_ROOT ?>produit/ajouterModifier?id=<?php echo $_GET['id'] ?>&idProduit=<?php echo $produit->id ?>">modifier</a>
                            |
                            <a href="<?php echo WEB_ROOT ?>produit/supprimer?id=<?php echo $_GET['id'] ?>&idProduit=<?php echo $produit->id ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <br>
        <button class="btn-success"><a href="<?php echo WEB_ROOT ?>produit/ajouterModifier?id=<?php echo $_GET['id'] ?>" style="color: white;">ajouter un produit</a></button>

</body>

</html>