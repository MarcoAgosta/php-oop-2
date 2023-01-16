<?php
require_once "./classes/Product.php";

$primoProdotto= new Product("Cani", 10, "Cesar al pollo", 3.5, "Cibo", "https://media.dm-static.com/images/f_auto,q_auto,c_fit,h_1200,w_1200/v1662823176/products/pim/3065890114128_CesarSel_dell'ortoPolloVerdurer_8366_IT/cesar-cibo-umido-per-cani-con-pollo-e-verdure-selezioni-dell-orto");
$secondoProdotto= new Product("Gatti", 4, "Bedsure cuccia", 20, "Cuccia", "https://m.media-amazon.com/images/I/81dIZOQXLqL._AC_SY355_.jpg");
$terzoProdotto= new Product("Cani", 7, "Bite Toys", 5, "Gioco", "https://www.epocaitalpigeon.com/8982/bite-toys-gioco-osso-colorato-gomma-dura-per-cane-15-cm.jpg");
$quartoProdotto= new Product("Gatti", 12, "Sheba al vitello", 3, "Cibo", "https://cdn.shopify.com/s/files/1/0288/2152/0466/products/cibo-umido-gatto-sheba-selezione-in-salsa-85-gr-vitello-tacchino.jpg?v=1634725379");
$quintoProdotto= new Product("Cani", 3, "Cuccia in legno", 40, "Cuccia", "https://www.perilcane.it/4291-large_default/cuccia-chalet-doppia-da-esterno-in-legno-per-2-cani-taglia-media.jpg");
$sestoProdotto= new Product("Gatti", 5, "Palestrina per gatti", 17.80, "Cuccia", "https://www.ulissequalityshop.com/wp-content/uploads/2017/04/camon-palestrina-gatti-gioco-appeso.jpg")
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
        <div class="text-center pb-4">
            <h1>Articoli per Animali Domestici</h1>
        </div>

        <div class="row g-4 mb-3">
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

            <div class="col-4">
                <div class="card">
                    <img src=<?php echo $terzoProdotto->getImmagine() ?> class="card-img-top p-3" alt="...">
                    <div class="card-body" style="background-color: darkgray">
                        <h5 class="card-title"><?php echo $terzoProdotto->getNome() ?></h5>
                        <div class="icone">
                           <?php echo $terzoProdotto->getIcon();  
                           echo $terzoProdotto->getIconTipo()?>
                        </div>
                        <p class="card-text">Prezzo: <?php echo $terzoProdotto->getPrezzo() ?>$</p>
                        <a href="#" class="btn btn-primary">Compra</a>         
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src=<?php echo $quartoProdotto->getImmagine() ?> class="card-img-top p-3" alt="...">
                    <div class="card-body" style="background-color: darkgray">
                        <h5 class="card-title"><?php echo $quartoProdotto->getNome() ?></h5>
                        <div class="icone">
                           <?php echo $quartoProdotto->getIcon();  
                           echo $quartoProdotto->getIconTipo()?>
                        </div>
                        <p class="card-text">Prezzo: <?php echo $quartoProdotto->getPrezzo() ?>$</p>
                        <a href="#" class="btn btn-primary">Compra</a>         
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src=<?php echo $quintoProdotto->getImmagine() ?> class="card-img-top p-3" alt="...">
                    <div class="card-body" style="background-color: darkgray">
                        <h5 class="card-title"><?php echo $quintoProdotto->getNome() ?></h5>
                        <div class="icone">
                           <?php echo $quintoProdotto->getIcon();  
                           echo $quintoProdotto->getIconTipo()?>
                        </div>
                        <p class="card-text">Prezzo: <?php echo $quintoProdotto->getPrezzo() ?>$</p>
                        <a href="#" class="btn btn-primary">Compra</a>         
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <img src=<?php echo $sestoProdotto->getImmagine() ?> class="card-img-top p-3" alt="...">
                    <div class="card-body" style="background-color: darkgray">
                        <h5 class="card-title"><?php echo $sestoProdotto->getNome() ?></h5>
                        <div class="icone">
                           <?php echo $sestoProdotto->getIcon();  
                           echo $sestoProdotto->getIconTipo()?>
                        </div>
                        <p class="card-text">Prezzo: <?php echo $sestoProdotto->getPrezzo() ?>$</p>
                        <a href="#" class="btn btn-primary">Compra</a>         
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>