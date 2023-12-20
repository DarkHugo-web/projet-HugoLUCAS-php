<?php 

function route_request($addresse){
 
    if ($addresse === "/index"){
        require_once './index.php'; 
    }
    elseif($addresse === "/inscription"){
        require_once './view/inscription.php';
        require_once 'CustomerInscriptionController.php';
        $customer=new customerInscriptionController();
        $customer->setCustomer();
    }
    elseif($addresse === "/produit" ){
        require_once 'productController.php';
        $products = new ProductController;
        $products->getProduct();
        require_once './view/product.php';
    }
    elseif($addresse === "/home"){
        require_once './view/home.php';
    }
    elseif($addresse === "/connexion"){
        require_once './view/Connexion.php';
        require_once 'CustomerConnexionController.php';
        $customer=new customerConnexionController();
        $customer->getCustomerConnexion();
    }
    elseif($addresse === '/suppression'){
            require_once './view/delete.php';
            
    }
    elseif($addresse === '/delete'){
        require_once 'CustomerDeleteController.php';

        $email = isset($_POST['email']) ? $_POST['email'] : null;

        $deleteCustomer = new customerDeleteController();
        $deleteCustomer->deleteCustomer($email);
        $_SESSION=array();
        require_once './view/inscription.php';
    }
    elseif($addresse === '/exit') {
        $_SESSION=array();
        echo "<meta http-equiv='refresh' content='0;url=home'>";
    }
    elseif($addresse === '/profil'){
        require_once './view/profil.php';
    }
    else{
        require_once './404.php';
    }    
};