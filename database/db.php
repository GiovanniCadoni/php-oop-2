<?php
require_once __DIR__ . "/../Models/Categoria.php";
require_once __DIR__ . "/../Models/Prodotto.php";
require_once __DIR__ . "/../Models/Cibo.php";
require_once __DIR__ . "/../Models/Giocattolo.php";

$catalogo = [
    new Giocattolo('Osso', 9.99, 30, $cani, 'gomma',0.25),
    new Giocattolo('Pallina', 14.99, 15, $gatti, 'tessuto', 0.15),
    new Giocattolo('Topolino', 9.99, 10, $gatti, 'gomma', 0.45),
    new Cibo('Crocchette', 4.99, 30, $gatti, 'pesce', 0.30),
    new Cibo('Crocchette', 4.99, 30, $cani, 'carne', 0.30),
    new Giocattolo('Cuccia', 49.99, 10, $cani, 'tessuto', 7.5),
];

/*try {
    $topolino = new Giocattolo('Topolino', 9.99, 10, $gatti, 'gomma', 0.45);
    $acquisto = $topolino->removeQuantita(12);
} catch (Exception $e) {
    echo $e->getMessage();
}*/
?>