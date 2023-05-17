<?php
include __DIR__ . '/database/database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> PHP OOP2 </title>
</head>

<body>
    <div class="container">
        <div class="row">

            <?php foreach ($products as $product) : ?>
                <div class="col-3 p-2">
                    <div class="card">
                        <img src=<?php echo "'$product->image '" ?> alt="">
                        <div class="card-body">
                            <p>Nome prodotto : <?php echo $product->name ?></p>
                            <p>Prezzo: <?php echo $product->price ?>€</p>
                            <?php if (property_exists($product, 'type')) : ?>
                                <?php if ($product->type == 'cat') : ?>
                                    <p>Adatto per: </p> <i class="fa-solid fa-cat fs-3 p-2 rounded-circle bg-info"></i>
                                <?php elseif ($product->type == 'dog') : ?>
                                    <p>Adatto per: </p> <i class="fa-solid fa-dog fs-3 p-2 rounded-circle bg-success"></i>
                                <?php endif;  ?>
                            <?php endif;  ?>
                        </div>

                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>

</html>