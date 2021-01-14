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
        <h1 style="margin: 20px 5px;">Détail du groupe</h1>

        <h2 style="margin: 10px 5px;">Membres du groupe</h2>

        <!-- members -->
        <table class="table">
            <thead>
                <tr>
                    <th>A CHANGER</th> 
                    <th>A CHANGER</th> 
                    <th>A CHANGER</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                //boucle pour afficher la liste
                /** @var MemberModel[] $members */
                foreach ($members as $member) {
                ?>
                    <tr>
                        <td><?php echo $member->name ?></td>
                        <td><?php echo $member->position ?></td>
                        <td><a href="<?php echo WEB_ROOT ?>member/supprimer?id=<?php echo $_GET['id'] ?>&idMember=<?php echo $member->id ?>">Supprimer</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>

        <div v-for="(member, index) in members" style="margin: 20px 0px;">
            <form action="<?php echo WEB_ROOT ?>member/ajouter?id=<?php echo ($_GET['id']) ?>" method="POST">
                <input type="text" id="name"        name="name"     >

                <input type="text" id="position"    name="position" >

                <input class="btn-success" type="submit" value="Ajouter">
            </form>
        </div>



        <h2 style="margin: 10px 5px; margin-top: 50px;">Concert prévus</h2>
        <!-- tour -->
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
                //boucle pour afficher la liste
                /** @var MemberModel[] $members */
                foreach ($tours as $tour) {
                ?>
                    <tr>
                        <td><?php echo $tour->date ?></td>
                        <td><?php echo $tour->place ?></td>
                        <td><?php echo $tour->price ?> €</td>
                        <td><a href="<?php echo WEB_ROOT ?>tour/supprimer?id=<?php echo $_GET['id'] ?>&idTour=<?php echo $tour->id ?>">Supprimer</a></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div v-for="(concert, index) in concerts" style="margin: 20px 0px;">
            <form action="<?php echo WEB_ROOT ?>tour/ajouter?id=<?php echo ($_GET['id']) ?>" method="POST">
                <input type="date" id="date" name="date"    >

                <input type="text" id="place" name="place"  >

                <input type="number" id="price" name="price">

                <input class="btn-success" type="submit" value="Ajouter">
            </form>
        </div>
    </div>

</body>

</html>