<?php

    require_once __DIR__."/Models/Products.php";
    require_once __DIR__."/Models/Foods.php";
    require_once __DIR__."/Models/Accessories.php";
    require_once __DIR__."/Models/Games.php";

    $food1 = new Foods('https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg', 'Royal Canin Mini Adult', 'Cane', 'Prezzo: € 43,99', 'Peso netto: 545g', 'Ingredienti: prosciutto, riso');

    $food2 = new Foods('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane', 'Prezzo: € 44,99', 'Peso netto: 600g', 'Ingredienti: manzo, cereali');

    $food3 = new Foods('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto', 'Prezzo: € 34,99', 'Peso netto: 400g', 'Ingredienti: tonno, pollo, prosciutto');

    $food4 = new Foods('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce', 'Prezzo: € 2,95', 'Peso netto: 30g', 'Ingredienti: Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe');

    $accessories1 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello', 'Prezzo: € 184,99', 'Materiale: Legno', 'Dimensioni: M: L 83 x P 67 x H 153 cm');

    $accessories2 = new Accessories('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce', 'Prezzo: € 2,29', 'Materiale: Materiale espanso', 'Dimensioni: ND');

    $games1 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane', 'Prezzo: € 13,49', 'Caratteristiche: Galleggia e rimbalza', 'Dimensioni: 8,5 cm x 10 cm');

    $games2 = new Games('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto', 'Prezzo: € 4,99', 'Caratteristiche: Morbido con codina in corda', 'Dimensioni: 8,5 cm x 10 cm');

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
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">
                        <img src="<?php echo $food1->image?>" alt="img">
                        <div> <?php echo $food1->name?> </div>
                        <div> <i class="fa-solid fa-dog"></i> <?php echo $food1->type?> </div>
                        <div> <?php echo $food1->price?> </div>
                        <div> <?php echo $food1->weight?> </div>
                        <div> <?php echo $food1->ingredients?> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">
                        <img src="<?php echo $food2->image?>" alt="img">
                        <div> <?php echo $food2->name?> </div>
                        <div> <i class="fa-solid fa-dog"></i> <?php echo $food2->type?> </div>
                        <div> <?php echo $food2->price?> </div>
                        <div> <?php echo $food2->weight?> </div>
                        <div> <?php echo $food2->ingredients?> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card">
                        <img src="<?php echo $food3->image?>" alt="img">
                        <div> <?php echo $food3->name?> </div>
                        <div> <i class="fa-solid fa-cat"></i> <?php echo $food3->type?> </div>
                        <div> <?php echo $food3->price?> </div>
                        <div> <?php echo $food3->weight?> </div>
                        <div> <?php echo $food3->ingredients?> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">
                        <img src="<?php echo $food4->image?>" alt="img">
                        <div> <?php echo $food4->name?> </div>
                        <div> <i class="fa-solid fa-fish-fins"></i> <?php echo $food4->type?> </div>
                        <div> <?php echo $food4->price?> </div>
                        <div> <?php echo $food4->weight?> </div>
                        <div> <?php echo $food4->ingredients?> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <div class="card">
                        <img src="<?php echo $accessories1->image?>" alt="img">
                        <div> <?php echo $accessories1->name?> </div>
                        <div> <i class="fa-solid fa-dove"></i> <?php echo $accessories1->type?> </div>
                        <div> <?php echo $accessories1->price?> </div>
                        <div> <?php echo $accessories1->materials?> </div>
                        <div> <?php echo $accessories1->size?> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">
                        <img src="<?php echo $accessories2->image?>" alt="img">
                        <div> <?php echo $accessories2->name?> </div>
                        <div> <i class="fa-solid fa-fish-fins"></i> <?php echo $accessories2->type?> </div>
                        <div> <?php echo $accessories2->price?> </div>
                        <div> <?php echo $accessories2->materials?> </div>
                        <div> <?php echo $accessories2->size?> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card p-3">
                        <img src="<?php echo $games1->image?>" alt="img">
                        <div> <?php echo $games1->name?> </div>
                        <div> <i class="fa-solid fa-dog"></i> <?php echo $games1->type?> </div>
                        <div> <?php echo $games1->price?> </div>
                        <div> <?php echo $games1->characteristics?> </div>
                        <div> <?php echo $games1->size?> </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="card">
                        <img src="<?php echo $games2->image?>" alt="img">
                        <div> <?php echo $games2->name?> </div>
                        <div> <i class="fa-solid fa-cat"></i> <?php echo $games2->type?> </div>
                        <div> <?php echo $games2->price?> </div>
                        <div> <?php echo $games2->characteristics?> </div>
                        <div> <?php echo $games2->size?> </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>