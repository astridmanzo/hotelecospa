
<!DOCTYPE html>
<html lang="es">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Hotel Eco Spa Luz y Vida | Chichiriviche, Edo. Falcón. Venezuela</title>
        <meta name="description" content="El Hotel Eco Spa Luz y Vida es un lugar blablabla">
        <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
        <meta name="author" content="www.bluepolygon.com.ve">

        <!-- Favicon
        ================================================== -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">


        <!-- Stylesheet
        ================================================== -->
        <link rel="stylesheet" type="text/css"  href="css/animate.css">
        <link rel="stylesheet" type="text/css"  href="css/salvattore.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" type="text/css"  href="css/global.css">
        <link rel="stylesheet" type="text/css" href="css/responsive.css">
        <link rel="stylesheet" type="text/css" href="css/ihover.css">
        <link rel="stylesheet" type="text/css" href="css/animate.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/gallery.css">


        <!-- Old browser supports
        ================================================== -->
        <script type="text/javascript" src="js/modernizr.custom.js"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>
   

    <?php
        include ("includes/nav-galeria.php");
    ?>


    <?php  
    $directory = "img/galeria/";

    $images = glob("" . $directory . "*.jpg");

    $imgs = '';
    foreach($images as $image){ $imgs[] = "$image"; }

    
 
    ?>

    <?php 
    shuffle($imgs);
    $imgs = array_slice($imgs, 0, 20);
    ?>

    <div id="fh5co-main">

        <div class="container">

            <div class="row">

                <div id="fh5co-board" data-columns>


                <?php foreach ($imgs as $img): ?> 
                    <?php echo "<div class='item'>"; ?>

                        <?php echo "<div class='animate-box'>"; ?>
                        <?php echo "<a href='$img' class='image-popup fh5co-board-img'/><img src='$img'/></a>
                        </div>
                    </div>"; ?>
                
                <?php endforeach; ?>
                </div>
            </div>
        </div> 
    </div>           
    
    
    <?php
        include ("includes/footer.php");
    ?>

    

   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/SmoothScroll.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/salvattore.min.js"></script>
     <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
    <script src="js/gallery.js"></script>

    </body>
    
</html>

