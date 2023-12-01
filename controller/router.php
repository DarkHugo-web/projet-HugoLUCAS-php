<?php 
 
function route_request($address){
 
    if ($address === "/index"){
        require_once './index.php'; 
    }
    elseif($address === "/inscription"){
        require_once './view/inscription.php';
    }
    elseif($address === "/produit"){
        require_once './view/product.php';
    }
    else{
        require_once './404.php';
    }    
};