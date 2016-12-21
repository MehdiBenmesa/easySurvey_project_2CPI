<?php session_start(); if($_SESSION['type'] != 'enseignant' && $_SESSION['type'] != 'administration' && $_SESSION['type'] != 'admin' || $_SESSION['login'] != true) header("location:userlogin.php");?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Modéles</title>

        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <!-- Custom styles for this template -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/style-responsive.css" rel="stylesheet" />
        <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="temp/css/style-guide.css"> <!-- Resource style -->
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]-->
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>

    </head>
    <body>
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
                <li><a href="#S"class="selected">Mes modéles</a></li>
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
            <section class="col-lg-9 container-fluid"  id="grid" style="width:82%;">
                <div class="row col-lg-4" id="modalInfo" style="display: none;" >
                    <div class="alert alert-success alert-block fade in" style="margin: 10px;">
                        <button data-dismiss="alert" class="close close-sm" type="button">
                            <i class="icon-remove"></i>
                        </button>
                        <h4 class="red" style="border-bottom: thin">Sondage</h4>
                        <section class="panel">
                            <div class="panel-heading tab-bg-dark-navy-blue" style="">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a data-toggle="tab" id='n' href="#Date">Nom</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" id='m' href="#module">Module</a>
                                    </li>
                                    <li class="">
                                        <a data-toggle="tab" id="d" href="#des">Description</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="panel-body">
                                <div class="tab-content">
                                    <div id="name" class="tab-pane active">
                                        Fin : 15 August
                                    </div>
                                    <div id="module" class="tab-pane ">
                                        Fin : 15 August
                                    </div>
                                    <div id="description" class="tab-pane">
                                        Description
                                    </div>
                                </div>
                            </div>
                        </section>
                        <button class="alert-info" id="see"><a>Voir le Formulaire</a></button>
                    </div>
                </div>
                <div id="showSurvey" style="display: none">

                    <!--<iframe src="showSurvey.php?id=84" width="100%" height="800px"></iframe> -->
                    <button class="btn-primary btn-success btn-send btn" id="use">Utiliser</button>
                    <button class="btn-danger btn" id="back">Annuler</button>

                </div>
            </section>
            <section id="profile_ens" class="profile-nav alt green-border col-lg-3 col-sm-3 col-md-3" >
                <section class="panel" style=>
                    <div class="user-heading alt green-bg" style=" background: rgba(112, 135, 163, 1);">
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

    <div class="form-horizontal question"  id="templateF" style="display: none;">
        <div class="form-control">
            <p id="question"> </p>
        </div>
        <br>
        <div class="form-group" >

            <label class="col-sm-2 col-lg-2 control-label" >reponse:</label>
            <div class="col-sm-10 col-lg-10">
                <textarea id="focusedInput" type="text" class="form-control"  value="Click to focus" ></textarea>
            </div>
        </div>
        <br>
    </div>

    <div class="form-horizontal question" id="templateL"style = "display: none" >
        <div class="form-control">
            <p id="question"> </p>
        </div>
        <div class="form-control">
            <label class="label_radio" for="radio-01">
                <input  name="sample-radio" id="radio-01" value="1" type="radio" checked="">
            </label>
        </div>
        <div class="form-control">
            <label class="label_radio" for="radio-02">
                <input  name="sample-radio" id="radio-02" value="1" type="radio">
            </label>
        </div>
        <div class="form-control">
            <label class="label_radio" for="radio-01">
                <input  name="sample-radio" id="radio-01" value="1" type="radio" checked="">
            </label>
        </div>
        <div class="form-control">
            <label class="label_radio" for="radio-01">
                <input  name="sample-radio" id="radio-01" value="1" type="radio" checked="">
            </label>
        </div>
        <div class="form-control">
            <label class="label_radio" for="radio-01">
                <input  name="sample-radio" id="radio-01" value="1" type="radio" checked="">
            </label>
        </div>
        <br>
    </div>

    <div class="form-horizontal question"  id="templateD"   style = "display: none" >
        <div class="form-control">
            <p id="question"> </p>
        </div>
        <div class="form-control">
            <label class="label_radio" for="radio-01">
                <input   id="radio-01" name ='dich' value="1" type="radio" checked>
            </label>
        </div>
        <div class="form-control">
            <label class="label_radio" for="radio-02">
                <input   id="radio-02" name ='dich' value="1" type="radio">
            </label>
        </div>
        <br>
    </div>



    <div class="form-horizontal question"  id="templateS" style="display: none;">
        <div class="form-control">
            <p id="question" > </p>
        </div>

        <div class="form-control" id="before">
            <div>
                <input id="other" name ='other' type="radio" value="" checked>Autre :<input id="other_value" type="text"  >
            </div>
        </div>
        <br>
    </div>


    <div class="form-horizontal question"  id="templateM" style="display: none;">
        <div class="form-control">
            <p id="question" > </p>
        </div>


        <div class="form-control" id="before">
            <div>
                <input id="other" name ='other' type="checkbox" value="" checked>Autre :<input id="other_value" type="text"  >
            </div>
        </div>

        <br>
    </div>


    <div class='form-control' id="radio" style="display: none;">
        <label class='label_radio' for='radio-02'>
            <input  value='1' type='radio' >
        </label>
    </div>

    <div class='form-control' id="checkBox" style="display: none;">
        <label class='label_check' for='check'>
            <input id='check' value='1' type='checkbox'>
        </label>
    </div>
    </body>

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
    <style>
        #profile_ens{


            min-height: 700px;
        }
        #milieu_profil_ens{
            min-height: 700px;
        }
        #nv_sondage{

        }
    </style>

    <script>
        $(document).ready(function(){
            n = 1;
            m = 1;
            d = 1;
            nbDich = 1;
            nbSimple = 1;
            nbMultiple = 1;
            nbLevel = 1;
           $.post('getModals.php',function(data){
                data = JSON.parse(data);
                var survey;
                var modal;
                for(var i = 0; i < data.length ; i++){
                    modal = $('#modalInfo').clone();
                    modal.attr('id',data[i]['id_s']);
                    modal.css('display','block');
                    modal.find('#n').attr('href','#name'+n);
                    modal.find('#m').attr('href','#module'+m);
                    modal.find('#d').attr('href','#description'+d);
                    modal.find('#name').html(data[i]['name']).attr('id','name'+n);
                    n++;
                    modal.find('#module').html(data[i]['module']).attr('id','module'+m);
                    m++;
                    modal.find('#description').html(data[i]['description']).attr('id','description'+d);
                    d++;
                    $('#grid').append(modal);
                }
           });
            $(document).on('click','#see', function () {
                var id = $(this).parent().parent().attr('id');

           /*     var clone = $('#showSurvey').clone();

                clone.find('iframe').attr('src','showSurvey.php?id='+id);

                clone.attr('id',id);
                clone.css('display','block');
                $('#grid').html(clone);*/
                $.post('getSurveyParticipate.php',{id : id},function(data){
                    var clone = $('#showSurvey').clone();
                    clone.attr('id',id);
                    clone.css('display','block');
                    $('#grid').html(clone);
                    data = JSON.parse(data);//alert(data.length);
                    for(var i = 0 ; i < data.length ;i++){
                        switch (data[i][2]){
                            case 'dich':
                                var dich = $('#templateD').clone();
                                dich.attr('id', data[i][0]);
                                dich.attr('type',data[i][2]);
                                dich.css('display', 'block');
                                dich.find('p').html(data[i][1]);
                                var j = 0;
                                dich.find('input').each(function () {
                                    $(this).after(data[i][3][j][1]);
                                    $(this).attr('value',data[i][3][j][0]);
                                    $(this).attr('name','dich'+nbDich);
                                    j++;
                                });
                                nbDich++;
                                $('#'+id).find('#use').before(dich);
                                break;

                            case 'simple':
                                var simple = $('#templateS').clone();
                                simple.attr('id',data[i][0]);
                                simple.attr('type',data[i][2]);
                                simple.css('display','block');
                                simple.find('p').html(data[i][1]);
                                for(var j = 0; j < data[i][3].length; j++){
                                    var radio = $('#radio').clone();
                                    radio.attr('id','');
                                    radio.css('display','block');
                                    radio.find('input').after(data[i][3][j][1]);
                                    radio.find('input').attr('value',data[i][3][j][0]);
                                    radio.find('input').attr('name','simple'+nbSimple);
                                    simple.find('#before').before(radio);
                                }
                                simple.find('#other').attr('name','simple'+nbSimple);
                                nbSimple++;
                                $('#'+id).find('#use').before(simple);
                                break;

                            case 'multiple':
                                var multiple = $('#templateM').clone();
                                multiple.attr('id',data[i][0]);
                                multiple.attr('type',data[i][2]);
                                multiple.css('display','block');
                                multiple.find('p').html(data[i][1]);
                                for(var j = 0; j < data[i][3].length; j++){
                                    var check = $('#checkBox').clone();
                                    check.attr('id','');
                                    check.css('display','block');
                                    check.find('input').after(data[i][3][j][1]);
                                    check.find('input').attr('value',data[i][3][j][0]);
                                    check.find('input').attr('name','multiple'+nbMultiple+'[]');
                                    multiple.find('#before').before(check);
                                }
                                multiple.find('#other').attr('name','multiple'+nbMultiple+'[]');
                                nbMultiple++;
                                $('#'+id).find('#use').before(multiple);
                                break;

                            case 'level':
                                var level = $('#templateL').clone();
                                level.attr('id',data[i][0]);
                                level.attr('type',data[i][2]);
                                level.css('display','block');
                                level.find('p').html(data[i][1]);
                                var j = 0;
                                level.find('input').each(function(){
                                    $(this).after(data[i][3][j][1]);
                                    $(this).attr('value',data[i][3][j][0]);
                                    $(this).attr('name','level'+nbLevel);
                                    j++;
                                });
                                nbLevel++;
                                $('#'+id).find('#use').before(level);
                                break;
                            case 'free':
                                var free = $('#templateF').clone();
                                free.attr('id',data[i][0]);
                                free.attr('type',data[i][2]);
                                free.css('display','block');
                                free.find('p').html(data[i][1]);
                                $('#'+id).find('#use').before(free);
                                break;
                        }
                    }
                });
            });

            $(document).on('click','#back', function () {
               location.reload();
            });
            $(document).on('click','#use', function () {
                var idModal = $(this).parent().attr('id');
                var id = location.search.substring(4,location.search.length);
                $.post('configModal.php', { id : id,idModal :idModal }, function (data) {
                    if(data === 'true') location.replace('surveyCreator.php?id='+id);
                });
            });

        });
    </script>
<style>
    .question{
        padding: 20px;
        margin: 10px;
        border: groove #000000 1px;
        border-radius:6px ;
    }
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
</html>
