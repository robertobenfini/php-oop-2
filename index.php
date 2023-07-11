<?php

    require_once __DIR__."/Models/Products.php";
    require_once __DIR__."/Models/Foods.php";
    require_once __DIR__."/Models/Accessories.php";
    require_once __DIR__."/Models/Games.php";
    require_once __DIR__."/database/db.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- link bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- link fontawesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-4">
                    <h1>BoolShop</h1>
                </div>
                <?php foreach($products as $product) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                        <div class="card p-3">
                                <img src="<?php echo $product->image ?>" alt="img">
                                <div><?php echo $product->name ?></div>
                                <div><?php echo $product->type ?></div>
                                <div><?php echo $product->price ?></div>
                                <?php if(property_exists($product, 'weight')) { ?>
                                    <div><?php echo $product->weight ?></div>
                                <?php } ?>
                                <?php if(property_exists($product, 'ingredients')) { ?>
                                    <div><?php echo $product->ingredients ?></div>
                                <?php } ?>
                                <?php if(property_exists($product, 'materials')) { ?>
                                    <div><?php echo $product->materials ?></div>
                                <?php } ?>
                                <?php if(property_exists($product, 'characteristics')) { ?>
                                    <div><?php echo $product->characteristics ?></div>
                                <?php } ?>
                                <?php if(property_exists($product, 'size')) { ?>
                                    <div><?php echo $product->size ?></div>
                                <?php } ?>
                            </div>
                        </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>