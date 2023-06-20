<?php
require_once __DIR__ . '/models/prodotti.php';
require_once __DIR__ . '/models/animals.php';
require_once __DIR__ . '/database/db.php';
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>PET SHOP</title>
</head>
<body>

     <div class="text-center">
          <h1>PET SHOP</h1>
          <p>GIOCHI, CIBO E MOLTO  ALTRO...</p>
     </div>
     <div class="d-flex justify-content-around">

          <?php foreach ($arrayProdotti as $element) {?>
               <div class="card mt-3" style="width: 18rem;">
                    <img src="<?php echo $element->immagine ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title"><?php echo $element->nome ?></h5>
                         <div class="card-text"><?php echo $element->prezzo ?></div>
                         <div><?php echo $element->categoria ?></div>
                         <div class="text-end">
                              <?php 
                              if($element->animali == "cane"){ ?>
                                   <i class="fa-solid fa-dog"></i>
                              <?php }else{ ?>
                                   <i class="fa-solid fa-cat"></i>
                              <?php } ?>
                         </div>
                    </div>
               </div>
          <?php } ?>    

     </div>
</body>
</html>