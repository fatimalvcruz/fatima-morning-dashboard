<?php include_once './src/run.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="css/style.css" rel="stylesheet" />
        <title>Fatima Morning Dashboard</title>            
    </head>

    <body>
        <div class="container py-4">
        <figure class="text-center">
            <header class="pb-3 mb-4 border-bottom">
                <img src="./resources/icon-sun.svg" width="26" height="26" />
                <span class="fs-4 ps-1">Bienvenido a mi página</span>       
                <span class="fs-4 ps-1">hoy es: <b> <p id="tiempo"></p></b></span>
                <button  id="botonFrase"  type="button" class="btn btn-outline-dark">cambiar frase</button>
                <blockquote class="blockquote">
                    <p class="display-5 fst-italic" id="frasedia" class="estilo_frase"></p>
                </blockquote>
                <figcaption class="blockquote-footer">
                <cite title="Source Title" id="autor"> </cite>
                </figcaption>
                
        </figure>         
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="defineParallax" checked />
                    <label class="form-check-label" for="defineParallax">Parallax</label>
                </div>
                <!-- Container element -->
            </header>
                
            <div class="row">
            <?php if ($nasa_type == "video") { ?>
                <div class="video">
                    <iframe class="responsive-iframe" src="<?= $nasa; ?>"></iframe>
                </div>    
            <?php } else { ?>
                <div class="on" id="move">
                    <div class="parallax" style="background-image: url(<?= $nasa ?>);"></div>
                    <img src="<?= $nasa ?>" class="img-fluid fija" />
                </div>
            <?php } ?>
                <figure class="figure">
                    <figcaption class="figure-caption"> <?= $titulonasa ?> </figcaption>
                </figure>
                <p><?= $explicacionfoto ?></p>
            </div>

            <div class="row">
                <div class="col-sm-12 col-lg-3">
                    <img src="./resources/pixel-pink.svg" width="32" height="32" />
                    <span class="fs-4 ps-1 mb-2">El día está</span>
                    <img src="<?= $dibujito ?>" alt="icono" />
                    <p><?= $descripcion ?> <?= $ngrados ?> grados</p>
                </div>

                <?php if ( sesale()) { ?>

                <div class="col-sm-12 col-lg-6">
                    <img src="./resources/pixel-purple.svg" width="32" height="32" />
                    <span class="fs-4 ps-1">Despierta al cari que nos vamos a dar un paseo</span>
                </div>

                <div class="col-sm-12 col-lg-3">
                    <img src="./resources/pixel-pink.svg" width="32" height="32" />
                    <span class="fs-4 ps-1">  <?= $ropaDelDia ?></span>
                </div>

                <?php } else { ?>

                <div class="col-sm-12 col-lg-6">
                    <img src="./resources/pixel-pink.svg" width="32" height="32" />
                    <span class="fs-4 ps-1">Está lloviendo, quizás en un rato se pueda salir a dar un paseo</span>
                </div>

                <?php } ?>
                
            </div>
        
            <footer class="pt-3 mt-4 text-muted border-top" >&copy; By Fatima</footer>

        </div>             
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->      
        <script src="js/main.js?v=1" type="text/javascript" ></script>
    </body>
</html>