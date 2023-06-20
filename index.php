<?php 

    include_once __DIR__ . '/Models/accessori.php';
    include_once __DIR__ . '/Models/prodotto.php';
    include_once __DIR__ . '/Models/category.php';
    include_once __DIR__ . '/Models/cibo.php';
    include_once __DIR__ . '/Models/giocattoli.php';

    $category = [
        'cane' => new Categorie('cane', 'fa-solid fa-dog'),
        'uccello' => new Categorie('uccello', 'fa-solid fa-dove'),
        'gatto' => new Categorie('gatto', 'fa-solid fa-cat')
    ];

    //var_dump( $category );

    $prodotti = [
        new Cibo('https://m.media-amazon.com/images/I/31UXdyP8ShL._AC_.jpg', 'Royal Canin', 43.99, $category['cane'], 545, 'prosciutto, riso'),

        new Cibo('https://m.media-amazon.com/images/I/71w18XqZnFL._AC_SL1500_.jpg', 'Almo Nature', 44.99, $category['cane'], 600, 'manzo, cereali'),

        new Accessori('https://m.media-amazon.com/images/I/81bBo1NBBfL._AC_SL1500_.jpg', 'Yaheetech Gabbia Voliera per Pappagalli Uccelli Grandi', 184.99, $category['uccello'], 'legno', 'M: L83 x P67 x H153 cm '),

        new Giocattoli('https://m.media-amazon.com/images/I/81opVo0H6UL.__AC_SX300_SY300_QL70_ML2_.jpg', 'Giocattolo a Forma di Elefante in Peluche per Gatti', 4.99, $category['gatto'], 'Morbido e salutare', '8.5 cm x 10 cm')
    ];

    // var_dump( $prodotti );

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Boolshop</title>
    <!-- BOOSTRAP CSS LINK-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- FONTAWESOME LINK-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- CSS LINK-->
    <link rel="stylesheet" href="/style.css" />
  </head>

  <body>

    <div class="container">
        <h1>Boolshop</h1>
        <h2>I nostri prodotti</h2>
        <div class="row">
            <?php
            // Ciclo per scorrere l'array dei prodotti
            foreach ($prodotti as $element) {
                // Prodotto che appartiene alla categoria 'cane'
                if ($element->category->nome == 'cane') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img  style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?>
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            peso netto:
                            <?php echo $element->pesonetto ?> g
                        </p>
                        <p class="card-text opacity-75">
                            ingredienti:
                            <?php echo $element->ingredienti ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php

            foreach ($prodotti as $element) {
                // Prodotto che appartiene alla categoria 'uccello'
                if ($element->category->nome == 'uccello') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img class="progress" style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?>
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            Materiale:
                            <?php echo $element->materiale ?>
                        </p>
                        <p class="card-text opacity-75">
                            Dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>

            <?php

            foreach ($prodotti as $element) {
                // Prodotto che appartiene alla categoria 'gatto'
                if ($element->category->nome == 'gatto') {
            ?>
            <div class="col-3 mt-3">
                <div class="card">
                    <img class="progress" style="height: 304px;" src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-title text-uppercase">
                            <?php echo $element->nome ?>
                        </h4>
                        <h6 class="card-title ">
                            <?php echo $element->category->nome ?> 
                            <i class="<?php echo $element->category->icona ?>"></i>
                        </h6>
                        <h5 class="card-title opacity-75">
                            <?php echo $element->prezzo ?> €
                        </h5>
                        <p class="card-text opacity-75">
                            caratteristiche:
                            <?php echo $element->caratteristiche ?>
                        </p>
                        <p class="card-text opacity-75">
                            Dimensioni:
                            <?php echo $element->dimensioni ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php
                }
            }
            ?>
        </div>
    </div>

    <!-- BOOTSTRAP JAVASCRIPT LINK-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
  

  </body>
</html>