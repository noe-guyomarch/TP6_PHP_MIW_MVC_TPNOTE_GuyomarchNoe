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
        <h1 style="margin: 10px 5px;">liste des groupes</h1>

        <h3>ajouter un groupe</h3>
        <div style="margin: 20px 0px;">
            <form action="<?php echo WEB_ROOT ?>groupe/ajouter" method="POST">
                <input type="text"    id="name"           name="name"             >

                <input type="text"    id="country_origin" name="country_origin"   >

                <input type="text"    id="year_creation"  name="year_creation"    >

                <input class="btn-success" type="submit" value="Ajouter">
            </form>
        </div>

        <table class="table">
            <thead>
                <tr>          
                    <th>A CHANGER</th> 
                    <th>A CHANGER</th> 
                    <th>A CHANGER</th> 
                    <th>A CHANGER</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                // //boucle pour afficher la liste
                // /** @var MemberModel[] $members */
                foreach ($groupes as $groupe) {
                ?>
                    <tr>
                        <td><a href="<?php echo WEB_ROOT ?>groupe/detail?id=<?php echo $groupe->id ?>"><?php echo $groupe->name ?></a></td>
                        <td><?php echo $groupe->country_origin ?></td>
                        <td><?php echo $groupe->year_creation ?></td>
                        <td><a href="<?php echo WEB_ROOT ?>groupe/supprimer?id=<?php echo $groupe->id ?>">Supprimer</a></td>
                    </tr>               
                <?php
                }
                ?>
            </tbody>
        </table>

    </div>

</body>
</html>