<?php

include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/ProductAnimal.php';

$products = [
    new Product('Collare', '8', 'https://www.delashop.it/wp-content/uploads/2021/05/XSblu-picc.jpg'),
    new ProductAnimal('Lettiera', '18', 'https://www.delashop.it/wp-content/uploads/2021/05/XSblu-picc.jpg', 'cat'),
    new ProductAnimal('Pallina', '1,99', 'https://www.delashop.it/wp-content/uploads/2021/05/XSblu-picc.jpg', 'dog'),
    new ProductAnimal('Crocchette', '8', 'https://www.delashop.it/wp-content/uploads/2021/05/XSblu-picc.jpg', 'dog'),
];
