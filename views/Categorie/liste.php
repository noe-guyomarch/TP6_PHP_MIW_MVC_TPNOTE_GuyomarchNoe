<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div id="app">
        <h1 style="margin: 10px 5px;">liste des categories</h1>



        <table class="table">
            <thead>
                <tr>          
                    <th>Nom</th> 
                    <th>Description</th> 
                    <th>Actions</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                // //boucle pour afficher la liste
                // /** @var MemberModel[] $members */
                foreach ($categories as $categorie) {
                ?>
                    <tr>
                        <td><a href="<?php echo WEB_ROOT ?>categorie/detail?id=<?php echo $categorie->id ?>"><?php echo $categorie->name ?></a></td>
                        <td><?php echo $categorie->description ?></td>
                        <td>
                            <a href="<?php echo WEB_ROOT ?>categorie/modifier?id=<?php echo $categorie->id ?>">modifier</a>
                        </td>
                    </tr>               
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>