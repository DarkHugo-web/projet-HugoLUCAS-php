<?php require_once 'pdoConnect.php';

class ProductModel {
    private $bdd;

    public function __construct(){
        $this->bdd = myBDD::connexion();
    }
    public function getProduct(){
        return $this->bdd->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
    }
}