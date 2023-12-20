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
                $_SESSION['email'] = $customer['email'];
                $_SESSION['tel'] = $customer['tel'];
                echo "<meta http-equiv='refresh' content='0;url=home'>";
            } else {
                echo 'invalid password';
                $this->getConnexionForm();
                return;
            }
        }
        $this->getConnexionForm();
        }
}