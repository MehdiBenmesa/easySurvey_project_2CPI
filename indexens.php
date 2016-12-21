<?php session_start(); if($_SESSION['type'] != 'enseignant' && $_SESSION['type'] != 'administration' && $_SESSION['type'] != 'admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>index</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/New%20folder/style.css" rel="stylesheet">
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
    <div class="cd-logo" onclick="history.go(-1)"><img src="img/logo.png" alt="Logo"></div>

    <nav>
        <ul class="cd-main-nav">
            <li><a href="#branding"class="selected">Mr <?php echo $_SESSION['name'];?></a></li>
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
                        <li class="x"><a href="#" style="display: none;"><span></span></a></li>
                        <li id="nv_sondage" class="z" style="display: none;"> <a href="sondageInfo.php"><span>Cree nouveau</span></a></li>
                        <li class="z" style="display: none;"><a href="sondageInfo2.php"><span>Utiliser un model</span></a></li>
                        <li class="x"><a href="#" id="new_Survey"><span>Nouveau sondage</span></a></li>
                        <li class="x"><a href="MesSurveys.php"><span>Mes sondages</span></a></li>
                        <li class="x"><a href="aide.php"><span>Aide</span></a></li>
                    </ul>
                </div>
                <!-- End of Nav Structure -->
            </div>
        </aside>
        <section class="col-lg-2 col-sm-2 col-md-2">

        </section>
        <section id="milieu_profil_ens" class="col-lg-5 col-sm-5 col-md-5" >
            <div class="row" id="surveyTemplate" style="display: none;">
                <div class="alert alert-success alert-block fade in" style="margin: 10px;">
                    <button data-dismiss="alert" class="close close-sm" type="button">
                        <i class="icon-cross"></i>
                    </button>
                    <h4 class="red" style="border-bottom: thin">Sondage</h4>
                    <section class="panel">
                        <div class="panel-heading tab-bg-dark-navy-blue" style="">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a data-toggle="tab" id='d' href="#Date">Date</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" id='m' href="#module">Module</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" id='n' href="#nom">Nom de Sondage</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" id="e" href="#ens">ens</a>
                                </li>
                                <li class="">
                                    <a data-toggle="tab" id="s" href="#des">Description</a>
                                </li>
                            </ul>
                        </div>
                        <div class="panel-body">
                            <div class="tab-content">
                                <div id="Date" class="tab-pane active">
                                    Fin : 15 August
                                </div>
                                <div id="module" class="tab-pane ">
                                    Fin : 15 August
                                </div>
                                <div id="nom" class="tab-pane ">
                                    Fin : 15 August
                                </div>
                                <div id="ens" class="tab-pane">
                                    ens
                                </div>
                                <div id="des" class="tab-pane">
                                    Description
                                </div>
                            </div>
                        </div>
                    </section>
                    <button class="alert-info" id="participe"><a>Participer</a></button>
                </div>
            </div>
        </section>
        <section id="profile_ens" class="profile-nav alt pen-border col-lg-3 col-sm-3 col-md-3">
            <section class="panel">
                <div class="user-heading alt green-bg" style="background: rgba(112, 135, 163, 1)">
                    <a href="#">
                        <img alt="" src="img/profile-avatar.jpg">
                    </a>
                    <h1>Mr <?php echo $_SESSION['name'];?></h1>
                    <p><?php echo $_SESSION['email'];?></p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="InfoProfile.php"> <i class="icon-calendar"></i> Profile </a></li>
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
    $(document).ready(function() {
        $("#new_Survey").click(function () {
            $("#cn").animate({
                left: '250px'
            });
            $(".x").css('display', 'none');
            $(".z").css({
                display: "block"
            });
            $("#cn-button").click(function () {
                $("#cn").animate({
                    left: '0px',
                    opacity: '1'
                });
                $(".z").css({
                    display: "none"
                });
                $(".x").css('display', 'block');
            });
        });

        d = 0;
        e = 0;
        s = 0;
        m = 0;
        n = 0;
        var clone;
        $.post('getSurveysData.php', function (data) {
            data = JSON.parse(data);
            for (var i = 0; i < data.length; i++) {
                switch (data[i]['state']) {
                    case "participate":
                        break;

                    default :
                        clone = $('#surveyTemplate').clone();
                        clone.attr('id', data[i]['id_s']);
                        clone.css('display', 'block');
                        clone.find('#d').attr('href', '#date' + d);
                        clone.find('#e').attr('href', '#ens' + e);
                        clone.find('#s').attr('href', '#des' + s);
                        clone.find('#m').attr('href', '#module' + m);
                        clone.find('#n').attr('href', '#nom' + n);
                        clone.find('#Date').html("Debut: " + data[i]['debut'].substring(0, 10) + "<br>" + " Fin: " + data[i]['fin'].substring(0, 10)).attr('id', 'date' + d);
                        d++;
                        clone.find('#ens').html(data[i]['name']).attr('id', 'ens' + e);
                        e++;
                        clone.find('#des').html(data[i]['description']).attr('id', 'des' + s);
                        s++;
                        clone.find('#module').html(data[i]['module']).attr('id', 'module' + m);
                        m++;
                        clone.find('#nom').html(data[i]['nom_sondage']).attr('id', 'nom' + n);
                        n++;
                        $('#milieu_profil_ens').append(clone);
                        break;

                }
            }
        });
        $(document).on('click', '#participe', function () {
            location.assign('surveyParticipation.php?id=' + $(this).parent().parent().attr('id'));
        });
    });
</script>
</html>