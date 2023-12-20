<?php require_once 'main.php';?>
<?php require_once 'header.php';?>
<?php require_once './controller/productController.php';?>
<style>
        
        
        #product {
            
            width: 300px;
            margin: 20px;
            padding: 15px;
            border: px solid #ddd;
            text-align: center;
        }

        #product img {
            max-width: 50%;
            height: auto;
        }   

        #container1 {
        width: 105%;
        padding: 20px;
        display: flex;
        flex-direction: row;
        justify-content: center;
        }

        body {
            background-color:black;
        }
</style>
<body>
<?php foreach ($products as $produits) { ?>    
        <div id="container1" class="row border border-color-white">
            <div id="product" class="col-lg-4">
                <img src=<?= $produits['image'] ?>>
                <h2 class="text-white"><?= $produits['nom'] ?></h2>
                <p class="text-white"><?= $produits['courteDescription'] ?></p>
                <p class="text-white"><?= $produits['prix'] ?>€</p>    
                <a href="/404"><button id="Commandez" type="button" class="btn btn-warning">Commandez</button></a>   
            </div> 
        </div></br>
<?php } ?>            
</body>
