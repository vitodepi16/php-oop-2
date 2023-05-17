<?php

include __DIR__ . '/../Models/Product.php';
include __DIR__ . '/../Models/ProductAnimal.php';

$products = [
    new Product('Collare', '8,99', 'https://www.delashop.it/wp-content/uploads/2021/05/XSblu-picc.jpg'),
    new ProductAnimal('Lettiera', '18,00', 'https://m.media-amazon.com/images/I/61WvnveGuEL._AC_SY355_.jpg', 'cat'),
    new ProductAnimal('Pallina', '1,99', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ47LYdfU6uVkHUx7iCFLsSnY7eYq2YsuQ5tA&usqp=CAU', 'dog'),
    new ProductAnimal('Crocchette per cani', '28,00', 'https://www.gardenbedettishop.com/14348-large_default/crocchette-per-cani-prolife-sensitive-grain-free-sensitive-manzo-e-patate-adult-mediumlarge-nutrigenomic-10-kg.jpg', 'dog'),
    new ProductAnimal('Crocchette per gatti', '17,50', 'https://www.ideashoppingcenter.it/files/archivio_Files/Foto/18893_2.JPG', 'cat'),

];
