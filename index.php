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
    <title> PHP OOP2 </title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($products as $product) : ?>
                <div class="col">
                    <div class="card">
                        <img src=<?php echo "'$product->image '" ?> alt="">
                        <div class="card-body">
                            <p>Name <?php echo $product->name ?></p>
                            <p>Prezzo: <?php echo $product->price ?></p>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </div>


</body>

</html>