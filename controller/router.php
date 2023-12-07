<?php 
 
function route_request($address){
 
    if ($address === "/index"){
        require_once './index.php'; 
    }
    elseif($address === "/inscription"){
        require_once './view/inscription.php';
        require_once 'CustomerInscriptionController.php';
        $customer=new customerInscriptionController();
        $customer->setCustomer();
    }
    elseif($address === "/produit"){
        require_once './view/product.php';
    }
    elseif($address === "/home"){
        require_once './view/home.php';
    }
    elseif($address === "/connexion"){
        require_once './view/Connexion.php';
        require_once 'CustomerConnexionController.php';
        $customer=new customerConnexionController();
        $customer->getCustomerConnexion();
    }
    elseif ($address === '/exit') {
        $_SESSION=array();
        echo "<meta http-equiv='refresh' content='0;url=home'>";
    }
    else{
        require_once './view/404.php';
    }    
};