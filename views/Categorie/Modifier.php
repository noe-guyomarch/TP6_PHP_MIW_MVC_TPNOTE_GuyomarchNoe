<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<button class="btn-success"><a href="<?php echo WEB_ROOT ?>" style="color: white;">Retour</a></button>
    <h3>modifier la categorie : <?php echo $categorie->name ?></h3>
    <div style="margin: 20px 0px;">
        <form action="<?php echo WEB_ROOT ?>categorie/modifier?id=<?php echo $categorie->id ?>" method="POST">
            <label for="name">Nom</label>
            <input type="text" id="name" name="name" value="<?php echo $categorie->name ?>">
            <br>
            <br>
            <br>
            <label for="description">Description</label><br>
            <textarea rows="6" cols="65" id="description" name="description"><?php echo $categorie->description ?></textarea>
            <br>
            <input class="btn-success" type="submit" value="Modifier">
        </form>
    </div>

</body>

</html>