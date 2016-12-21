<?php session_start(); if($_SESSION['type'] != 'enseignant' && $_SESSION['type'] != 'administration' && $_SESSION['type'] != 'admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Information sur le Sondage</title>
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
    <div class="cd-logo" onclick="history.go(-1)"><img src="img/logo.png" alt="Logo"></div>

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
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <section class="panel" style="padding: 10px">
                                <div class="panel-heading">
                                    Information sur le sondage
                                </div
                                <div class="panel-body">
                                    <div class="stepy-tab">
                                        <ul id="default-titles" class="stepy-titles clearfix">
                                            <li id="default-title-0" class="current-step">
                                                <div>Etape 1</div>
                                            </li>
                                            <li id="default-title-1" class="">
                                                <div>Etape 2</div>
                                            </li>
                                        </ul>
                                    </div>
                                    <form class="form-horizontal" id="default">
                                        <fieldset title="Step1" class="step" id="default-step-0">
                                            <legend> </legend>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label" >Nom du sondage</label>
                                                <div class="col-lg-10">
                                                    <input type="text" class="form-control" name="nomSondage" >
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Module concerners</label>
                                                <select id="module" name="option">

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class=" col-md-3  ">Date de fin</label>
                                                <div class="col-md-4">
                                                    <div data-date="2012-12-21T15:25:00Z" class="input-group date form_datetime-meridian">
                                                        <input type="date" name="fin" class="form-control"  placeholder="dd/mm/aaaa" size="16">
                                                        <div class="input-group-btn">
                                                            <button type="button" class="btn btn-info date-set"><i class="icon-calendar"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">description du sondage</label>
                                                <div class="col-lg-10">
                                                    <textarea class="form-control" name="description" cols="60" rows="5"></textarea>
                                                </div>
                                            </div>


                                        </fieldset>

                                        <fieldset title="Step 2" class="step" id="default-step-1" >
                                            <legend> </legend>


                                            <div class="form-group">
                                                <label class="col-lg-2 control-label">Liste</label>
                                                <div id="list" class="col-lg-10">

                                                </div>
                                            </div>
                                        </fieldset>
                                        <input type="submit" class="finish btn btn-danger" value="Finish"/>
                                    </form>
                                </div>
                            </section>
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
                    <li><a href="logout.php"><i class="icon-key"></i> déconexion</a></li>
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
<script>

    $(document).ready(function() {
        $.post('getAllSpecs.php', function (data) {

            data = JSON.parse(data);
            for(var i = 0 ; i < data.length; i++){

                if(data[i]['groupes'] == null || data[i]['groupes'] == 0){
                    $('#list').append("<input type='checkbox' name = 'list[]' value='"+data[i]['spec']+"'> "+data[i]['spec']+"<br>");
                    $('#list').append("<hr>");
                }else{
                    $('#list').append("<input type ='checkbox' name='specs' value='"+data[i]['spec']+"'>"+data[i]['spec']+"<br>");
                    for(var j = 0; j < data[i]['groupes'];j++ ){
                        $('#list').append("<input type='checkbox' name='list[]' value='"+data[i]['spec']+"G"+(j+1)+"'>"+data[i]['spec']+"G"+(j+1)+"&nbsp;");
                    }
                    $('#list').append("<br><hr>");
                }
            }
            $('#list').append("<input type='checkbox' name='list[]' value='enseignant'>&nbsp;Enseignants<br>");
            $('#list').append("<input type='checkbox' name='list[]' value='administration'>&nbsp;Membres de l'administrations<br>");

        });
        $(document).on('change',"input[name='specs']", function () {
            var val = $(this).attr("value");
            if($(this).is(':checked')){
                $("input[value^="+val+"]").each(function () {
                    $(this).prop("checked",true);
                });
            }else{
                $("input[value^="+val+"]").each(function () {
                    $(this).prop("checked",false);
                });
            }
        });
        $('#default').submit(function(){
            $.post('newSondage.php',$(this).serialize(), function( data, textStatus, jQxhr ){
                if(data !== 'false') {
                    document.location.replace("modeles.php?id="+data);
                }
                return false;

            });
            return false;
        });

    });
    $.post('getAllModals.php',function(data){
        data = JSON.parse(data);
        for(var i = 0 ; i < data.length; i++){
            $('#module').append("<option>"+data[i]['code']+"</option>");
        }
    });
    $(function() {
        $('#default').stepy({
            backLabel: 'Previous',
            block: true,
            nextLabel: 'Next',
            titleClick: true,
            titleTarget: '.stepy-tab'
        });

    });

</script>



<script src="js/jquery-2.1.1.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</html>