<?php include_once './src/run.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <title>Fatima Morning Dashboard</title>            
    </head>

    <body>
        <div class="container py-4">
            <header class="pb-3 mb-4 border-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-brightness-alt-high-fill" viewBox="0 0 16 16">
                    <path d="M8 3a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 3zm8 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zm-13.5.5a.5.5 0 0 0 0-1h-2a.5.5 0 0 0 0 1h2zm11.157-6.157a.5.5 0 0 1 0 .707l-1.414 1.414a.5.5 0 1 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm-9.9 2.121a.5.5 0 0 0 .707-.707L3.05 5.343a.5.5 0 1 0-.707.707l1.414 1.414zM8 7a4 4 0 0 0-4 4 .5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5 4 4 0 0 0-4-4z"/>
                </svg>
                <span class="fs-4 ps-1">Bienvenido a mi página,</span>
                <span class="fs-4 ps-1">hoy es: <b> <p id="tiempo"> aqui se supone q va..</p></b></span>
                
                
                
                    <!-- Container element -->
            </header>
                
            <div class="row">
                
                <?php
                    if ($nasa_type == "video") { ?>
                     
                        <div class="video">
                            <iframe class="responsive-iframe" src="<?php echo $nasa; ?>"></iframe>
                        </div>    
                        <style>
                            .video {
                                position: relative;
                                overflow: hidden;
                                width: 100%;
                                padding-top: 56.25%; /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
                                }

                                /* Then style the iframe to fit in the container div with full height and width */
                                .responsive-iframe {
                                position: absolute;
                                top: 0;
                                left: 0;
                                bottom: 0;
                                right: 0;
                                width: 100%;
                                height: 100%;
                                }
                        </style>
                <?php } else { ?>
                    
                        <div class="parallax"></div>  
                        <style>
                        .parallax {
                            /* The image used */
                            background-image: url(<?php echo $nasa ?>);
                            
                            /* Set a specific height */
                            min-height: 500px;

                            /* Create the parallax scrolling effect */
                            background-attachment: fixed;
                            background-position: center;
                            background-repeat: no-repeat;
                            background-size: cover;
                        }
                    </style>                 
                 <?php } ?>

                            <figure class="figure">
                                <figcaption class="figure-caption"> <?php echo $titulonasa ?> </figcaption>
                            </figure>  <p> <?php echo $explicacionfoto?> </p>
                 </div>
         
               
            <div class="row">
                <div class="col-sm-12 col-lg-3">
                        <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                        <span class="fs-4 ps-1">El día está</span>
                        <br/>
                        <img src="<?php echo $dibujito ?>" alt="icono" />
                        <p ><?php echo $descripcion ." ". $ngrados ?> grados</p>  
                    
                </div>

                <?php if ( sesale()) { ?>
                <div class="col-sm-12 col-lg-6">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#6f42c1"/><text x="50%" y="50%" fill="#6f42c1" dy=".3em">32x32</text></svg>
                    <span class="fs-4 ps-1">Despierta al cari que nos vamos a dar un paseo</span>
                </div>
                <div class="col-sm-12 col-lg-3">
                    <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                    <span class="fs-4 ps-1">  <?= $ropaDelDia ?></span>
                    
                </div>
                <?php } else { ?>
                <div class="col-sm-12 col-lg-6">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#e83e8c"/><text x="50%" y="50%" fill="#e83e8c" dy=".3em">32x32</text></svg>
                    <span class="fs-4 ps-1">Está lloviendo, quizás en un rato se pueda salir a dar un paseo</span>
                </div>
                <?php } ?>
            </div>
        
            <footer class="pt-3 mt-4 text-muted border-top" >&copy; By Fatima

            </footer>
        </div>             
        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        -->      
     <script src="main.js" type="text/javascript" ></script>
    </body>
</html>