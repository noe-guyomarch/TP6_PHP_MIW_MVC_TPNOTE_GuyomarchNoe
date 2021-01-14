<?php
// a changer : 
// nom de la class
// méthodes correspondants aux action de l objet



class ProduitController extends Controller
{

    public function detail()
    {
        // verifier si isset getid     
        if (isset($_GET['idProduit'])){

            //récupère des données en base
            $produit = ProduitModel::find($_GET['idProduit']);



            //passer mes données à ma vue
            $this->set(['produit' =>$produit]);

            //afficher ma vue
            $this->render('detail');
        }else{
            echo '404 - id missing';
        }
    }

    public function ajouterModifier()
    {
        if (isset($_GET['id']) && $_GET['id'] != null){

            // verifier si le formulaire est envoyé
            if (isset($_POST['name']) && isset($_POST['description'])  && isset($_POST['price'])) {
                $_POST['id_category'] = $_GET['id'];
                
                if (isset( $_GET['idProduit']) && $_GET['idProduit'] != null){
                    $_POST['id'] = $_GET['idProduit'];
                }
                $_POST['price'] = $_POST['price']*100;
                //envoi des données en base
                $produit = new ProduitModel($_POST);
                
                $produit->save();
                
                //redirection
                header('Location:' . WEB_ROOT . 'categorie/detail?id=' . $_GET['id']);
            }
            if (!isset($_GET['idProduit']) || $_GET['idProduit'] == null){
                // nouveau produit
                echo ('test');
                $this->render('ajouter-modifier');
            }else{
                //récupère des données en base
                $produit = ProduitModel::find($_GET['idProduit']);
                if ($produit){
                    //passer mes données à ma vue
                    $this->set(['produit' =>$produit]);

                    //afficher ma vue
                    $this->render('ajouter-modifier');

                }else{
                    echo '404 - id doesnt existe in database';
                }
            }
        }else{
            echo '404 - id missing';
        }
    }

    public function supprimer()
    {
        // verifier si id du membre est là 
        if (isset($_GET['idProduit'])){

            //
            $isDelete = ProduitModel::delete($_GET['idProduit']);

            if ($isDelete) {
                header('Location:' . WEB_ROOT . 'categorie/detail?id=' .$_GET['id'] );
            }else{
                echo '405 - erreur requette SQL';
            }
        }else{
            echo '404 - id missing';
        }
    }
}