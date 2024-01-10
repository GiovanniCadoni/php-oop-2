<?php
require_once __DIR__ . "/../Models/Categoria.php";
require_once __DIR__ . "/../Models/Prodotto.php";
require_once __DIR__ . "/../Models/Cibo.php";
require_once __DIR__ . "/../Models/Giocattolo.php";

$catalogo = [
    new Giocattolo('Osso', 9.99, 30, $cani, 'gomma'),
    new Giocattolo('Pallina', 14.99, 15, $gatti, 'tessuto'),
    new Giocattolo('Topolino', 9.99, 10, $gatti, 'gomma'),
    new Cibo('Crocchette', 4.99, 30, $gatti, 'pesce'),
    new Cibo('Crocchette', 4.99, 30, $cani, 'carne'),
    new Giocattolo('Cuccia', 49.99, 10, $cani, 'tessuto'),
];
?>