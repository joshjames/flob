<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grid Gallery</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css" />
        <link rel="stylesheet" href="grid-gallery.css">
    </head>
    <body>
        <section class="gallery-block grid-gallery">
            <div class="container">
                <div class="heading">
                    <h2>Grid Gallery</h2>
                </div>
                <div class="row">

                <?php 
                    for ($x = 1; $x <= 10; $x++) 
                    {
                    echo "The number is: $x <br>";
                    ?>    

                    <div class="col-md-6 col-lg-4 item">
                    <a class="lightbox" href="/covers/image<? echo $x ?>.jpg">
                        <img class="img-fluid image scale-on-hover" src="../img/image1.jpg">
                    </a>
                    </div>

                    <?php


                    } 
                ?>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
        <script>
            baguetteBox.run('.grid-gallery', { animation: 'slideIn'});
        </script>
    </body>
</html>