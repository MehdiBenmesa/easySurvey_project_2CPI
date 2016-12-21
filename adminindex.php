<?php session_start(); if($_SESSION['type'] != 'enseignant' && $_SESSION['type'] != 'administration' && $_SESSION['type'] != 'admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="temp/css/style-guide.css"> <!-- Resource style -->
    <link href="css/googleapis.css" rel='stylesheet' type='text/css'>


</head>

<body style="background: white">
<header>
    <div class="cd-logo"><a><img src="img/logo.png" alt="Logo"></a></div>
    <nav>
        <ul class="cd-main-nav">
            <li><a href="#branding"class="selected">Adm </a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#branding"></a></li>
            <li><a href="#S"class="selected">Participation aux Sondages </a></li>
            <script>

            </script>

        </ul> <!-- cd-main-nav -->
    </nav>


    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>

<!--menu lateral Gauche
debut-->
<div class="container-fluid">
    <div class="row">

        <aside class="col-lg-2 col-sm-2 col-md-2 " >

            <div id="cn" class="component">
                <!-- Start Nav Structure -->
                <button class="cn-button" id="cn-button" >Menu</button>
                <div class="cn-wrapper" id="cn-wrapper">
                    <ul>
                        <li class="x" style="display: none"><a href="#" ><span></span></a></li>
                        <li id="nv_sondage" class="z" style="display: none;"> <a href="sondageInfo.php"><span>Cree nouveau</span></a></li>
                        <li class="z" style="display: none;"><a href="#"><span>Utiliser un model</span></a></li>
                        <li class="x"><a href="#" id="new_Survey"><span>Nouveau sondage</span></a></li>
                        <li class="x"><a href="MesSurveys.php"><span>Mes sondages</span></a></li>
                        <li class="x"><a href="admin.php"><span>Admin</span></a></li>
                    </ul>
                </div>
                <!-- End of Nav Structure -->
            </div>
        </aside>
        <section class="col-lg-2 col-sm-2 col-md-2">

        </section>
        <section id="milieu_profil_ens" class="col-lg-5 col-sm-5 col-md-5" ></section>
        <section id="profile_ens" class="profile-nav alt green-border col-lg-3 col-sm-3 col-md-3">
            <section class="panel">
                <div class="user-heading alt green-bg" style=" background: rgba(112, 135, 163, 1);">
                    <a href="#">
                        <img alt="" src="img/profile-avatar.jpg">
                    </a>
                    <h1>Admin</h1>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="InfoProfile.php"> <i class="icon-bell-alt"></i> Profile </a></li>
                    <li><a href="logout.php"><i class="icon-key"></i> déconexion</a></li>
                </ul>

            </section>

        </section>


    </div>



</div>

</body>

<style>
    header {
        position: relative;

    }
    #profile_ens{
        padding-top: 100px;
    }

    .container-fluid{
        background: white;

    }
    }
    .panel{

    }

    #milieu_profil_ens{
        background: #F8F8EA;
        margin-top: 0px;
    }

    .profile-nav{

        position: fixed;
        top: 0px;
        right: 0;
        bottom: 0px;
        background: beige;
        margin: 0px;

    }
    .green-bg {
        background: rgba(112, 135, 163, 1);
        min-height: 250px;
    }
</style>
<!-- js placed at the end of the document so the pages load faster -->

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/respond.min.js" ></script>


<!--common script for all pages-->

<!--script for this page-->
<script src="js/count.js"></script>



<script src="Menu/js/polyfills.js"></script>
<script src="Menu/js/demo2.js"></script>
<!-- For the demo ad only -->
<link rel="stylesheet" type="text/css" href="Menu/css/normalize.css" />
<link rel="stylesheet" type="text/css" href="Menu/css/demo.css" />
<link rel="stylesheet" type="text/css" href="Menu/css/component2.css" />
<script src="Menu/js/modernizr-2.6.2.min.js"></script>
<script>
    $(document).ready(function(){
        $("#new_Survey").click(function(){
            $("#cn").animate({
                left: '250px'
            });
            $(".x").css('display','none');
            $(".z").css({
                display : "block"
            });
            $("#cn-button").click(function(){
                $("#cn").animate({
                    left: '0px',
                    opacity: '1'
                });
                $(".z").css({
                    display : "none"
                });
                $(".x").css('display','block');

            });
        });

    });
</script>
</html>