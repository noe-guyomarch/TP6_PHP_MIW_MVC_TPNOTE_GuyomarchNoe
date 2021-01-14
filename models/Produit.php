<?php

class ProduitModel extends Model
{
    public $id;
    public $id_category;
    public $name;
    public $description;
    public $price;


    //CRUD
    //Create
    //Read
    //Update
    //Delete   


    /**
     * renvoi les donné pour l'id du groupe
     * @param $id
     */
    public static function find($id)
    {
        $req = Model::getBdd()->prepare('SELECT * FROM product WHERE id=:id');
        $req->bindValue('id', $id);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, self::class);
        return $req->fetch();
    }

    public static function findProductOfCategory($id_category)
    {
        $req = Model::getBdd()->prepare('SELECT * FROM product WHERE id_category=:id_category order by name asc');
        $req->bindValue('id_category', $id_category);
        $req->execute();
        $req->setFetchMode(PDO::FETCH_CLASS, self::class);
        return $req->fetchAll();
    }

    /**
     * Crée ou met à jour le don selon qu'il existe ou non dans la base de données.
     * @return bool
     */
    public function save()
    {
        if (null === $this->id) {
            return $this->create();
        } else {
            return $this->update();
        }
    }

    /**
     * Crée le don dans la base de données.
     * @return bool
     */
    public function create()
    {
        $req = $this->bdd->prepare('INSERT INTO product (id, id_category, name, description, price) 
            VALUE (:id, :id_category, :name, :description, :price)');
        $req->bindValue('id', $this->id);
        $req->bindValue('id_category', $this->id_category);
        $req->bindValue('name', $this->name);
        $req->bindValue('description', $this->description);
        $req->bindValue('price', $this->price);

        $req->execute();
        $this->id = $this->bdd->lastInsertId();
    }

    /**
     * Met à jour les informations du don dans la base de données.
     * @return bool
     */
    public function update()
    {       
        $req = $this->bdd->prepare('UPDATE product SET 
            id_category=:id_category, name=:name, description=:description, price=:price WHERE id=:id');
        $req->bindValue('id_category', $this->id_category);
        $req->bindValue('name', $this->name);
        $req->bindValue('description', $this->description);
        $req->bindValue('price', $this->price);
        $req->bindValue('id', $this->id);

        $req->execute();
    }

    public static function delete($id)
    {       
        $req = Model::getBdd()->prepare('DELETE FROM product WHERE id=:id');
        $req->bindValue('id', $id);

        return  $req->execute();
    }
}