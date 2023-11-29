<?php 
 
function route_request($address){
 
    if ($address === "/index"){
        require_once './index.php';
        /*var_dump($address);
        echo "Index page loaded!";*/
    }
    else{
        require_once './view/404.php';
        //echo "404 page loaded!";
    }    
}