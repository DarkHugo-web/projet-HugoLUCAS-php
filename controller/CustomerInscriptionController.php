<?php require_once './model/CustomerModel.php';

class customerInscriptionController{
    private $model;

    public function __construct() {
        $this->model = new customer;
    }
    public function getInscriptionForm() {
        require_once './view/inscription.php';
    }
    public function setCustomer(){
        if(isset($_POST['nom'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            echo "<meta http-equiv='refresh' content='0';url='login'>"
        }
    
    if($this->model->setCustomer($nom,$prenom,$tel,$email,$mdp))
    {
    } else {
        $this->getInscriptionForm();
    }

    }
}

