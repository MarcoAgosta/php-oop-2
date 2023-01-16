<?php
require_once "./classes/Product.php";

$primoProdotto= new Product("Cani", 10, "Cesar al pollo", 3.5, "Cibo", "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1662823176/products/pim/3065890114128_CesarSel_dell'ortoPolloVerdurer_8366_IT/cesar-cibo-umido-per-cani-con-pollo-e-verdure-selezioni-dell-orto");
$secondoProdotto= new Product("Gatti", 4, "Bedsure cuccia", 20, "Cuccia", "https://m.media-amazon.com/images/I/81dIZOQXLqL._AC_SY355_.jpg");
?>




<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=ù, initial-scale=1.0">
    <title>Animal Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src=<?php echo $primoProdotto->getImmagine() ?> class="card-img-top p-3" alt="...">
                    <div class="card-body" style="background-color: darkgray">
                        <h5 class="card-title"><?php echo $primoProdotto->getNome() ?></h5>
                        <div class="icone">
                           <?php echo $primoProdotto->getIcon();  
                           echo $primoProdotto->getIconTipo()?>
                        </div>
                        <p class="card-text">Prezzo: <?php echo $primoProdotto->getPrezzo() ?>$</p>
                        <a href="#" class="btn btn-primary">Compra</a>         
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src=<?php echo $secondoProdotto->getImmagine() ?> class="card-img-top p-3" alt="...">
                    <div class="card-body" style="background-color: darkgray">
                        <h5 class="card-title"><?php echo $secondoProdotto->getNome() ?></h5>
                        <div class="icone">
                           <?php echo $secondoProdotto->getIcon();  
                           echo $secondoProdotto->getIconTipo()?>
                        </div>
                        <p class="card-text">Prezzo: <?php echo $secondoProdotto->getPrezzo() ?>$</p>
                        <a href="#" class="btn btn-primary">Compra</a>         
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>