<?php
require_once './model/CustomerModel.php';

class customerConnexionController{
    protected $model;

    public function __construct() {
        $this->model = new customer();
    }

    public function getConnexionForm() {
        require_once 'view/Connexion.php';
    }
   
 public function getCustomerConnexion() {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
        $customer = $this->model->getCustomerbyEmail($email);
        if ($customer && password_verify($_POST['mdp'], $customer['mdp'])) {
            $_SESSION['nom'] = $customer['nom'];
            $_SESSION['prenom'] = $customer['prenom'];
            echo "<meta http-equiv='refresh' content='0;url=home'>";
        } else {
            $this->getConnexionForm();
            return;
        }
    }
    $this->getConnexionForm();
    }
}