<?php
// a changer : 
// nom de la class
// méthodes correspondants aux action de l objet



class CategorieController extends Controller
{
    public function liste()
    {
        //récupère des données en base
        $listeDesCategories = CategorieModel::getAll();

        //passer mes données à ma vue
        $this->set(['categories' =>$listeDesCategories]);

        //afficher ma vue
        $this->render('liste');
    }


    public function detail()
    {
        // verifier si isset getid     
        if (isset($_GET['id']) && $_GET['id'] != null){
            //récupère des données en base
            $categorie = CategorieModel::find($_GET['id']);
            if ($categorie){
                $produits = ProduitModel::findProductOfCategory($_GET['id']);



                //passer mes données à ma vue
                $this->set(['categorie' =>$categorie]);
                $this->set(['produits' =>$produits]);


                //afficher ma vue
                $this->render('detail');
            }else{
                echo '404 - id doesnt existe in database';
            }
        }else{
            echo '404 - id missing';
        }     
    }

    public function modifier()
    {
        // verifier si le formulaire est envoyé
        if (isset($_POST['name']) && isset($_POST['description'])) {
            $_POST['id'] = $_GET['id'];
            //envoi des données en base
            $categorie = new CategorieModel($_POST);

            $categorie->save();

            //redirection
            header('Location:' . WEB_ROOT);

        }else{
            if (isset($_GET['id']) && $_GET['id'] != null){
                //récupère des données en base
                $categorie = CategorieModel::find($_GET['id']);
                if ($categorie){
                     //passer mes données à ma vue
                    $this->set(['categorie' =>$categorie]);

                    //afficher ma vue
                    $this->render('modifier');

                }else{
                    echo '404 - id doesnt existe in database';
                }
            }else{
                echo '404 - id missing';
            }
        }
    }
}