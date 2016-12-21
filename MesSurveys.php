<?php session_start(); if($_SESSION['type'] != 'enseignant' && $_SESSION['type'] != 'administration' && $_SESSION['type'] != 'admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mes Sondages</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/newStyle.css" rel="stylesheet" />
    <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="temp/css/style-guide.css"> <!-- Resource style -->
    <link href="css/googleapis.css" rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-color:white">

<header>
    <div class="cd-logo" onclick="history.go(-1)"><img src="img/logo.png" alt="Logo"></div>

    <nav>
        <ul class="cd-main-nav">
            <li><a href="#branding"class="selected">Ens <?php echo $_SESSION['name'];?></a></li>
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


<!--main content start-->

<section class="wrapper" >
    <!-- page start-->
    <div class="">

        <section class="profile-info col-lg-9" id="surveysData" style="">



        </section>
        <aside class="profile-nav col-lg-3">
            <section class="panel" >
                <div class="user-heading round" style=" background: rgba(112, 135, 163, 1)"     >
                    <a href="#">
                        <img src="img/profile-avatar.jpg" alt="">
                    </a>
                    <h1><?php echo $_SESSION['name'];?></h1>
                    <p><?php echo $_SESSION['email'];?></p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="InfoProfile.php"> <i class="icon-user"></i> Profile</a></li>
                    <li><a href="logout.php"><i class="icon-key"></i> déconexion</a></li>
                </ul>

            </section>
        </aside>

        <!-- page end-->
        <div class=" col-lg-6" id="surveyTemplate" style="display: none;">
            <div class="alert alert-success alert-block fade in" style="margin: 10px;">
                <button data-dismiss="alert" class="close close-sm" type="button">
                    <i class="icon-remove"></i>
                </button>
                <h4 class="red" style="border-bottom: thin">Sondage</h4>
                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-blue" style="">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" id='n' href="#">Nom de sondage</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" id='m' href="#module">Module</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" id='d' href="#nom">date finale</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" id="de" href="#ens">Description</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" id="s" href="#des">Creation</a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" id="p" href="#nb_p">nombre de participants</a>
                            </li>

                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="name" class="tab-pane active">
                                Fin : 15 August
                            </div>
                            <div id="module" class="tab-pane ">
                                Fin : 15 August
                            </div>
                            <div id="date" class="tab-pane ">
                                Fin : 15 August
                            </div>
                            <div id="description" class="tab-pane">
                                ens
                            </div>
                            <div id="state" class="tab-pane">
                                Description
                            </div>
                            <div id="nb_p" class="tab-pane">
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



<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="js/jquery.sparkline.js" type="text/javascript"></script>
<script src="js/owl.carousel.js" ></script>
<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>
<script src="js/jquery-ui-1.9.2.custom.min.js"></script>

<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->
<script src="js/sparkline-chart.js"></script>
<script src="js/easy-pie-chart.js"></script>
<script src="js/count.js"></script>



<script>
    $(document).ready(function(){
        n = 1;
        m = 1;
        d = 1;
        de = 1;
        s = 1;
        p = 1;
        $.post('getSurveysInfo.php',function(data){
            data = JSON.parse(data);
            for(var i = 0 ; i < data.length ; i++){
                var clone = $('#surveyTemplate').clone();
                clone.attr('id',data[i][0]);
                clone.css('display','block');

                clone.find('#n').attr('href','#name'+n);
                clone.find('#name').html(data[i][1]).attr('id','name'+n);
                n++;

                clone.find('#m').attr('href','#module'+m);
                clone.find('#module').html(data[i][2]).attr('id','module'+m);
                m++;

                clone.find('#de').attr('href','#description'+de);
                clone.find('#description').html(data[i][3]).attr('id','description'+de);
                de++;

                clone.find('#d').attr('href','#date'+d);
                clone.find('#date').html(data[i][4]).attr('id','date'+d);
                d++;
                clone.find('#p').attr('href','#nb_p'+p);
                clone.find('#nb_p').html(data[i][6]).attr('id','nb_p'+p);
                p++;



                if(data[i][5] =='n'){
                    clone.find('#s').attr('href','#state'+s);
                    clone.find('#state').html('Pas encore Terminé').attr('id','state'+s);
                    s++;
                    clone.find('section').after("<button id='continue' class='alert-info'>Terminer la creation</button>");
                }else{
                    clone.find('#s').attr('href','#state'+s);
                    clone.find('#state').html('Terminé').attr('id','state'+s);
                    s++;
                    clone.find('section').after("<button id='Results' class='alert-info'>Consulter</button><button id='showSurvey' class='alert-info'>Voir le Formulaire</button>");

                }
                $('#surveysData').append(clone);
            }
        });

        $(document).on('click','#Results',function(){
                location.assign('surveyResults.php?id='+$(this).parent().parent().attr('id'));
        });
        $(document).on('click','#continue',function(){
                 location.assign('surveyCreator.php?id='+$(this).parent().parent().attr('id'));
        });
        $(document).on('click','#showSurvey',function(){
                location.assign('showSurvey.php?id='+$(this).parent().parent().attr('id'));
        });

    });

</script>
<style>
.wrapper{

    padding: 0px;
    margin: 0px;
}
header {
    position: relative;

}
#profile_ens{

}

.container-fluid{
    background: white;

}
}
.profile-info{
    margin: 0px;

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
.user-heading {
    background: rgba(112, 135, 163, 1)
}
    .panel{
        margin-top: 100px;
    }
</style>
</html>