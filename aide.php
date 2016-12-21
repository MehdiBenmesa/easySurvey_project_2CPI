<?php session_start(); if($_SESSION['type'] != 'enseignant' && $_SESSION['type'] != 'administration' && $_SESSION['type'] != 'admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Aide - Creation d'un nouveau sondage</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">

    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="temp/css/style-guide.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<header>
    <div class="cd-logo"><a href="" onclick="window.history.go(-1);"><img src="img/logo.png" alt="Logo"></a></div>

    <nav>
        <ul class="cd-main-nav">
            <li><a href="#branding"class="selected">Ens <?php echo $_SESSION['name'];?></a></li>

        </ul> <!-- cd-main-nav -->
    </nav>


    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>
<div class="container-fluid">
    <div class="row">


        <section class="col-lg-8 col-sm-8 col-md-8" style="background:  rgba(245, 245, 220, 0.2)">
            <section id="main-content" style="margin-left: 0px;">
                <section class="wrapper site-min-height" style="margin-top: 0px;">

                    <!-- page start-->
                    <div id="tt">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <br /><br /><br />
                            <h1>Création des sondages</h1>
                            <h2>pour créer un nouveau sondage procédez comme suits:</h2>
                            <ol>
                                <li>
                                    <p>dans la page d'accueil, cliquez sur la button "MENU"</p>
                                    <img src="img/Aide/Captur1.PNG" alt="Capture1" title="Création des sondages" class="im"/>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Choisissez l'option "Nouveau sondage"</p>
                                    <img src="img/Aide/Captur3.PNG" alt="Capture2" title="Creer un nouveau sondage" class="im"/>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Dans le nouveau menu, choisissez l'option "Creer Nouveau"</p>
                                    <img src="img/Aide/Capture4.PNG" alt="Capture2" title="Nouveau sondage" class="im"/>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Tapez le nom du sondage dans la case "Nom du sondage" et le module dans la case "Module concerners"
                                        et choisissez une date de fin du sondage et appuyez sur "Next"</p>
                                    <img src="img/Aide/Capture3.PNG" alt="Capture3" title="remplir des informations du sondage" class="im" />
                                    <br /><br />
                                </li>
                                <li>
                                    <p>tapez une description du sondage et dans le menu liste choisissez les perssones concernées par
                                        ce sondage et appuyez sur "Finish"</p>
                                    <img src="img/Aide/Capture4.PNG" alt="Capture4" title="remplir des informations du sondage" class="im"/>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Choisissez le type des questions a mettre dans le sondage et faire un glaissement (drag & drop)
                                        dans le cadre a droite</p>
                                    <img src="img/Aide/Capture5.PNG" alt="Capture5" title="choisir type de question" class="im"/>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Apres choisir le type du question, remplir les champs et cliquez sur "Valider"</p>
                                    <img src="img/Aide/Capture6.PNG" alt="Capture6" title="Nouvelle question" class="im"/>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Vous pouvez aussi choisir les questios de la banque de questions.</p>
                                    <img src="img/Aide/Captures.png" alt="Capture6" title="Nouvelle question" class="im"/>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Vous pouvez toujours ajouter une nouvelle question par un simple glaissement ou supprimer
                                        une question en appuyant sur "Annuler"</p>
                                    <br /><br />
                                </li>
                                <li>
                                    <p>Lorsque vous terminez la création des sondages cliquez sur "Terminer" pour l'enregistrer</p>
                                    <br /><br />
                                </li>

                            </ol>
                        </div>
                    </div>
                    <!-- page end-->

                </section>
            </section>
        </section>
        <section class="col-lg-1 col-sm-1 col-md-1" ></section>

        <section id="profile_ens" class="profile-nav alt green-border col-lg-3 col-sm-3 col-md-3">
            <section class="panel">
                <div class="user-heading alt green-bg" style="background: rgba(95, 142, 228, 1)">
                    <a href="#">
                        <img alt="" src="img/profile-avatar.jpg">
                    </a>
                    <h1>Mr <?php echo $_SESSION['name'];?></h1>
                    <p><?php echo $_SESSION['email'];?></p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="InfoProfile.php"> <i class="icon-calendar"></i> Profile </a></li>
                </ul>

            </section>

        </section>



    </div>



</div>



</body>

<style>
    #profile_ens{

        background: beige   ;
        min-height: 700px;
        height: 100%;
        margin: 0px;
    }
    .panel{
        margin-top: 100px;
    }
    #milieu_profil_ens{
        background: #A0C7B1;
        min-height: 700px;
    }
    .site-min-height{
        min-height: 700px;
    }
    #sondageForm{
        position: relative;
        top: 60px;
        border: solid 1px #808080;
    }
    .profile-nav{

        position: fixed;
        top: 40px;
        right: 0;
        bottom: 0px;
        background: beige;

    }
    .green-bg {
        background: rgba(112, 135, 163, 1);
        min-height: 250px;
    }

    #tt{
        text-align: center;
    }
    #tt ol li p, #tt h1, #tt h2 {
        text-align: left;
    }
</style>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>

<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>
<script src="js/jquery.stepy.js"></script>


<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>



<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</html>