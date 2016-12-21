<?php session_start(); if($_SESSION['type'] != 'etudiant' && $_SESSION['type'] !='admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu_etu</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/googleapis.css" rel='stylesheet' type='text/css'>
    <link href="css/newStyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="temp/css/style-guide.css"> <!-- Resource style -->
      <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body style="overflow: auto;">

<header>
    <div class="cd-logo" onclick="history.go(-1)"><img src="img/logo.png" alt="Logo"></div>

    <nav>
        <ul class="cd-main-nav">
            <li><a href="#branding"class="selected">Mr <?php echo $_SESSION['name'];?></a></li>

        </ul> <!-- cd-main-nav -->
    </nav>


    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>

<!--menu lateral Gauche
debut-->


<!--main content start-->

    <section class="wrapper" style="background: #F8F8F8 ">
        <!-- page start-->
        <div class="row">

            <section class="profile-info col-lg-9" style="min-height: 700px">

                <section class="col-lg-5" id="Survey_done" style="background:#999594;opacity:0.8 ">
                    <h2 style="border-bottom:2px inset;color: white">Sondages en cours</h2>


                </section>
                <div class="col-lg-1 mid"></div>
                <section class="col-lg-5" id="Survey_undone" style="background:#CFD0D2;opacity:0.8 ">
                   <h2 style="border-bottom:2px inset;">Sondages Terminés</h2>



                </section>

            </section>
            <aside class="profile-nav col-lg-3" >
                <section class="panel">
                    <div class="user-heading round" style="background:#5F8EE4">
                        <a href="#">
                            <img src="img/profile-avatar.jpg" alt="">
                        </a>
                        <h1>Mr <?php echo $_SESSION['name'];?></h1>
                        <p><?php echo $_SESSION['email'];?></p>
                    </div>

                    <ul class="nav nav-pills nav-stacked">
                        <li class="active"><a href="InfoProfile.php"> <i class="icon-user"></i> Profile</a></li>
                        <li><a href="logout.php"><i class="icon-key"></i> déconexion</a></li>
                    </ul>

                </section>
            </aside>

        <!-- page end-->
<div class="row" id="surveyTemplate" style="display: none;">
    <div class="alert alert-success alert-block fade in" style="margin: 10px;">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
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
        <button class="alert-warning"><a>Ignorer</a></button>
    </div>
</div>
<div class="row" id="nonSurveyTemplate" style="display: none;">
    <div class="alert alert-success alert-block fade in" style="margin: 10px;">
        <button data-dismiss="alert" class="close close-sm" type="button">
            <i class="icon-remove"></i>
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
    </div>
</div>

</body>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>

<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->

<script src="js/count.js"></script>



<script>
    $(document).ready(function(){
            d = 0;
            e = 0;
            s = 0;
            m = 0;
            n = 0;
            var clone;
        $.post('getSurveysData.php',function(data){
            data = JSON.parse(data);
           for(var i = 0; i < data.length; i++) {
               switch (data[i]['state']) {
                   case 'participate':
                       clone = $('#nonSurveyTemplate').clone();
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
                       $('#Survey_undone').append(clone);
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
                       $('#Survey_done').append(clone);
                   break;

               }
           }
        });
        $(document).on('click','#participe',function(){
            location.assign('surveyParticipation.php?id='+$(this).parent().parent().attr('id'));
        });
    });


</script>
<style>
    .profile-nav{

        position: fixed;
        top: 40px;
        right: 0;
        bottom: 0px;
        background: beige;

    }
.mid{
    border-right:1px solid #3b9cbe;
    border-left: 1px solid  #3b9cbe;
    min-height: 400px;

}
    #Survey_done{
        box-shadow: #245269 10px inset;
    }
</style>
<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</html>