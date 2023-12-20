<?php require_once './model/CustomerModel.php';


class customerDeleteController{
    protected $model;
    
    public function __construct(){
        $this->model = new customer();
    }

    public function getDeleteForm() {
        require_once 'view/delete.php';
    }
    
    public function deleteCustomer($email){
        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $parametres = [
                ':email' => $email
            ];
            $result = $this->model->deleteCustomerByEmail($parametres);

           

            if ($result) {
                    echo "Suppression réussie.";
            } else {
                    echo "Erreur lors de la suppression.";
            }
        }
    }
}


