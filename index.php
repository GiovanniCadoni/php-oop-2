<?php
require_once __DIR__ . "/database/db.php";
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="bg-dark text-white pt-2 pb-2 ps-4 mb-4">
        <h1>My Shop</h1>
    </div>
    <div class="container w-100 mx-auto">
        <h3 class="fw-bolder pb-4">Il nostro catalogo:</h3>
        <div class="row row-cols-3">
            <?php foreach ($catalogo as $prodotto) { ?>
                <div class="col mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title fw-bolder fs-2">
                                <?php echo $prodotto->getNome() ?>
                            </h4>
                            <div class="card-text">
                                <?php if (is_a($prodotto, 'Giocattolo')) { ?>
                                    <p class="fs-5 text-success"> Materiale: <?php echo $prodotto->getMateriale() ?> </p>
                                <?php } else if (is_a($prodotto, 'Cibo')) { ?>
                                    <p class="fs-5 text-success"> Al gusto di <?php echo $prodotto->getGusto() ?> </p>
                                <?php } ?>
                                <i class="fs-4 <?php echo $prodotto->getCategoria()->getIcona(); ?> "></i>
                                <span class="fs-4"> <?php echo $prodotto->getCategoria()->getNome(); ?> </span>
                                <p class="text-danger pt-3 fs-3">
                                    <?php echo $prodotto->getPrezzo(); ?> $
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>