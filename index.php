<?php 
require_once __DIR__ .'/models/Giochi.php';
require_once __DIR__ .'/models/Cibo.php';
require_once __DIR__ .'/models/Cucce.php';
require_once __DIR__ .'/models/categoria.php';
require_once __DIR__ .'/models/prodotti.php';

//variabili categoria
$cat_category = new Category('Gatti', 'icona gatto');
$dog_category = new Category('Cani', 'icona cane');

$palla_per_cani = new Toys('Palla', '5', $dog_category);
// var_dump($dog_ball);
$list_product[] = $palla_per_cani; 

$cibo_per_gatti = new Toys('Tonno in scatola', '12', $cat_category);
$list_product[] = $cibo_per_gatti; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOSTRAP -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Pet Shop</title>
</head>
<body>
    <main>
        <div class="container py-4">
            <div class="row">
                <?php foreach($list_product as $product): ?>
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product -> getName() ?></h5>
                                <p class="card-text"><?php echo $product -> getDescription() ?></p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Categoria: <?php echo $product -> getCategory() ->  getNameCategory();?></li>
                                <li class="list-group-item"><?php echo $product -> getAvailability() ?></li>
                            </ul>
                            <div class="card-body">
                                <div class="card-text"><?php echo $product -> getPrice() ?> &euro;</div>
                            </div>  
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
</body>
</html>