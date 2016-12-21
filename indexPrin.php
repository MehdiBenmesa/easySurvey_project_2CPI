<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href=''    rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="temp/css/style-guide.css"> <!-- Resource style -->
   <link rel="stylesheet" href="css/css1.css">

    <script src="js/js1.js"></script>
    <script src="js/js2.js"></script>
    <title>Index</title>
</head>
<body>
<header>
    <div class="cd-logo"><img src="img/logo.png" alt="Logo"></div>

    <nav>
        <ul class="cd-main-nav">
            <li><a href="#branding">Acceuil</a></li>
            <li><a href="#colors">Présenation de l`outil</a></li>
            <li><a href="#typography">A propos</a></li>
            <li><a href="#buttons">login</a></li>
        </ul> <!-- cd-main-nav -->
    </nav>


    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>



<section id="branding" class="cd-branding">
    <div class="container-fluid ">
        <br>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="img/back.jpg" alt="Chania" width="460" height="345">

                </div>

                <div class="item">
                    <img src="img/Untitled-3.jpg" alt="Chania" width="460" height="345">

                </div>

                <div class="item">
                    <img src="img/Untitled-1.jpg" alt="Flower" width="460" height="345">

                </div>

                <div class="item">
                    <img src="img/Untitled-2.jpg" alt="Flower" width="460" height="345">

                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



</section>

<main>




    <section id="colors" class="cd-colors">
        <h2>Présentation de l'outils</h2>
    <div class="cd-box">
        <h3>Easy Survey est un outil permettant de réaliser et d’analyser des sondages .il fournir un environnement idéal et facile permettant d'offrir les
           principales fonctionnalités de réalisation, de diffusion et d'analyse avec le moindre efforts et en économisant le temps
       </h3>
    </div>

    </section>

    <section id="typography" class="cd-typography">
        <h2>A propos</h2>

    </section>

    <section id="buttons" class="cd-buttons">
        <h2>Login</h2>
        <button class="btn btn-outline"><a href="userlogin.php">Se connecter</a></button>
        <div class="cd-box">


        </div>

    </section>

    <section id="icons" class="cd-icons">



    </section>


</main>
<style>
    .header{
        z-index: 500;
    }
    .cd-box{
        background:beige;
    }
    #bg{
        width: 200% ;
    }
    #branding{
        width: 100% ;
    }

</style>
<script src="temp/js/jquery-2.1.1.js"></script>
<script src="temp/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>