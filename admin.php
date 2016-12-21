<?php session_start(); if($_SESSION['login']==false || $_SESSION['type']!='admin') header("location:userlogin.php");?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editable Table</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.js"></script>

    <link rel="stylesheet" href="temp/css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="temp/css/style-guide.css"> <!-- Resource style -->
    <link href="css/googleapis.css" rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background: white">
<header>
    <div class="cd-logo" onclick="history.go(-1)"><img src="img/logo.png" alt="Logo"></div>

    <nav>
        <ul class="cd-main-nav">
            <li><a  class="selected"> Admin </a></li>
            <li><a  id="list1" class="user selected ">Liste utilisateurs</a></li>
            <li><a id="list2" class="spec " >Liste spécialitées </a>  </li>
            <li><a id="list3" class="serv ">Liste services</a></li>

            <script>

            </script>

        </ul> <!-- cd-main-nav -->
    </nav>


    <a href="#0" class="cd-nav-trigger">Menu<span></span></a>
</header>
<div class="modal fade in" id="add_dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
    <div class="modal-dialog">
        <form class="form-signin " id="add">
            <h2 class="form-signin-heading">Ajouter</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Nom d'utilisateur" id="name" name="name" autofocus="">
                <input type="text" class="form-control" placeholder="Email" name="email" autofocus="">
                <input type="password" class="form-control" placeholder="Mot de pass" name="password" autofocus="">
                <input type="text" class="form-control" id="year" placeholder="Année" name="year" autofocus="">
                <div class="radios">
                    <label class="label_radio col-lg-6 col-sm-4" for="radio-01">
                        <input id="radio-01" value="etudiant" type="radio" name="type" checked=""> Etudiant
                    </label>
                    <label class="label_radio col-lg-6 col-sm-4" for="radio-02">
                        <input id="radio-02" value="enseignant" name="type" type="radio"> Enseignant
                    </label>
                    <label class="label_radio col-lg-12 col-sm-4" for="radio-03">
                        <input id="radio-03" value="administration" name="type" type="radio"> Administration
                    </label>
                </div>
                <button data-dismiss="modal" id="annuler" class="btn btn-danger " type="button">Annuler</button>
                <button class="btn btn-danger" type="submit">Confirmer</button>
            </div>
        </form>
    </div>
</div>
<div class="modal fade in" id="add_spec_dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
    <div class="modal-dialog">
        <form class="form-signin" id="add_spec">
            <h2 class="form-signin-heading">Ajouter</h2>
            <div class="login-wrap">
                <input type="text" class="form-control"  placeholder="Spécialité" id="name" name="spec" autofocus="">
                <input type="text" class="form-control"  placeholder="nbGroupes" name="groupes" >
                <button data-dismiss="modal" id="cancel_spec" class="btn btn-danger " type="button">Annuler</button>
                <button class="btn btn-danger" type="submit">Confirmer</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade in" id="add_module_dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
    <div class="modal-dialog">
        <form class="form-signin" id="add_module">
            <h2 class="form-signin-heading">Ajouter</h2>
            <div class="login-wrap">
                <input type="text" class="form-control"  placeholder="module" id="module" name="module" autofocus="">
                <button data-dismiss="modal" id="cancel_module" class="btn btn-danger " type="button">Annuler</button>
                <button class="btn btn-danger" type="submit">Confirmer</button>
            </div>
        </form>
    </div>
</div>
<div class="modal fade in" id="add_service_dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
    <div class="modal-dialog">
        <form class="form-signin" id="add_service">
            <h2 class="form-signin-heading">Ajouter</h2>
            <div class="login-wrap">
                <input type="text" class="form-control"  placeholder="service" id="service" name="service" autofocus="">
                <button data-dismiss="modal" class="btn btn-danger" id="cancel_service" type="button">Annuler</button>
                <button class="btn btn-danger" type="submit">Confirmer</button>
            </div>
        </form>
    </div>
</div>


<div class="modal fade in" id="edit_dialog" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display: none;">
    <div class="container">
        <form class="form-signin " id="modifier">
            <h2 class="form-signin-heading">Modifier</h2>
            <div class="login-wrap">
                <input type="text" class="form-control" placeholder="Nom d'utilisateur" id="name" name="name" autofocus="">
                <input type="text" class="form-control" placeholder="Email" name="email" autofocus="">
                <input type="password" class="form-control" placeholder="Mot de pass" name="password" autofocus="">
                <input type="text" class="form-control" id="year" placeholder="Année" name="year" autofocus="">
                <div class="radios">
                    <label class="label_radio col-lg-6 col-sm-4" for="radio-01">
                        <input id="radio-01" value="etudiant" type="radio" name="type" checked=""> Etudiant
                    </label>
                    <label class="label_radio col-lg-6 col-sm-4" for="radio-02">
                        <input id="radio-02" value="enseignant" name="type" type="radio"> Enseignant
                    </label>
                    <label class="label_radio col-lg-12 col-sm-4" for="radio-03">
                        <input id="radio-03" value="administration" name="type" type="radio"> Administration
                    </label>
                </div>
                <button data-dismiss="modal" id="cancel" class="btn btn-danger " type="button">Annuler</button>
                <button class="btn btn-danger" type="submit">Confirmer</button>
            </div>
        </form>
    </div>
</div>

<div class="modal fade in" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" id="exit" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Dialog de confirmation</h4>
            </div>
            <div class="modal-body">
                voulez-vous supprimer cet utilisateur !?
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" id="annuler" class="btn btn-default" type="button">Annuler</button>
                <button class="btn btn-warning" id="ok" type="button"> Ok</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade in" id="delete_spec_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close_confirm" id="exit" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Dialog de confirmation</h4>
            </div>
            <div class="modal-body">
                voulez-vous supprimer cette spécialité !?
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" id="annuler" class="btn btn-default close_confirm" type="button">Annuler</button>
                <button class="btn btn-warning" id="delete_spec" type="button"> Ok</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade in" id="delete_module_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close_confirm" id="exit" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Dialog de confirmation</h4>
            </div>
            <div class="modal-body">
                voulez-vous supprimer ce Module !?
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" id="annuler" class="btn btn-default close_confirm" type="button">Annuler</button>
                <button class="btn btn-warning" id="delete_module" type="button"> Ok</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade in" id="delete_service_confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" style="display:none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close_confirm" id="exit" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Dialog de confirmation</h4>
            </div>
            <div class="modal-body">
                voulez-vous supprimer ce Service !?
            </div>
            <div class="modal-footer">
                <button data-dismiss="modal" id="annuler" class="btn btn-default close_confirm" type="button">Annuler</button>
                <button class="btn btn-warning" id="delete_service" type="button"> Ok</button>
            </div>
        </div>
    </div>
</div>


<div id="users" class="col-lg-7 ">
        <div class="clearfix"style="margin-top: 40px;">
            <div class="btn-group">
                <button id="new" class="btn green">
                    Ajouter <i class=admin"icon-plus"></i>
                </button>
            </div>
        </div>
        <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">
                    <div class="dataTables_filter " id="editable-sample_filter" style="float: left;">
                        <label>Recherche: <input type="text" placeholder="Nom d'utlisateur, email, année, type" id="search_name" aria-controls="editable-sample" class="form-control medium">
                        </label>
                    </div>
            <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
                <thead>
                <tr role="row">
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 100px;">Id</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 100px;">Nom d'utilisateur</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 100px;" >Mot de pass</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 50px;">Email</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 30px;">Année</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 30px;">Type</th>
                    <th  role="columnheader" rowspan="1" colspan="1" style="width: 20px;">Supprimer</th>
                    <th  role="columnheader" rowspan="1" colspan="1" style="width: 100px;">Modifier</th>
                </tr>
                </thead>

                <tbody role="alert" id="search" aria-live="polite" aria-relevant="all">

               </tbody>
            </table>

        <div id="rep"></div>
        </div>
</div>

<div id="spec" class="row" style="top: 100px;display: none">
    <div class="col-lg-5" style="margin-top: 100px">
    <button  class="btn btn-success" id="newSpec">
        Ajouter Specialité <i class=admin"icon-plus"></i>
    </button>
        <div id="editable-sample_wrapper" class="dataTables_wrapper form-inline" role="grid">

            <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
                <thead>
                <tr role="row">
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 50px;">Id</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 100px;">Specialité</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 50px;" >nbGroupes</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 50px;" >supprimer</th>
                </tr>
                </thead>

                <tbody role="alert" id="specs" aria-live="polite" aria-relevant="all">

                </tbody>
            </table>
        </div>
    </div>
        <div class="col-lg-4" style="margin-top: 100px">
            <button id="addModule" class="btn btn-success" >
                Ajouter module <i class=admin"icon-plus"></i>
            </button>
            <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
                <thead>
                <tr role="row">
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 50px;">Id</th>
                    <th  role="columnheader" rowspan="1" colspan="1"  style="width: 100px;">module</th>
                    <th  role="columnheader" rowspan="1" colspan="1" style="width: 100px;">Supprimer</th>


                </tr>
                </thead>

                <tbody role="alert" id="modules" aria-live="polite" aria-relevant="all">

                </tbody>
            </table>
        </div>

    </div>

<div id="serv"class="col-lg-5" style="top: 100px;display: none">
    <button id="addService" class="btn btn-success" >
        Ajouter Service <i class=admin"icon-plus"></i>
    </button>
    <table class="table table-striped table-hover table-bordered dataTable" id="editable-sample" aria-describedby="editable-sample_info">
        <thead>
        <tr role="row">
            <th  role="columnheader" rowspan="1" colspan="1"  style="width: 50px;">Id</th>
            <th  role="columnheader" rowspan="1" colspan="1"  style="width: 100px;">module</th>
            <th  role="columnheader" rowspan="1" colspan="1" style="width: 100px;">Supprimer</th>


        </tr>
        </thead>

        <tbody role="alert" id="services" aria-live="polite" aria-relevant="all">

        </tbody>
    </table>
</div>
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
            <li><a href="student.php"> En tant que étudiant</a></li>
            <li><a href="indexens.php"> En tant que ensignant</a></li>
            <li><a href="indexadm.php"> En tant que membre de l'administration</a></li>

            <li><a href="logout.php"><i class="icon-key"></i> déconexion</a></li>
        </ul>

    </section>

</section>
</body>
<script>

    $(document).ready(function(){

        $("#list2").click(function(){
            $(this).addClass("selected");
            $("#list1,#list3").removeClass("selected");
        });
        $("#list1").click(function(){
            $(this).addClass("selected");
            $("#list2,#list3").removeClass("selected");
        });
        $("#list3").click(function(){
            $(this).addClass("selected");
            $("#list1,#list2").removeClass("selected");
        });

        $('.user').click(function(){
            $('#users').css("display","block");
            $('#spec').css("display","none");
            $('#serv').css("display","none");




        });
        $('.spec').click(function(){
            $('#users').css("display","none");
            $('#spec').css("display","block");
            $('#serv').css("display","none");

        });
        $('.serv').click(function(){
            $('#users').css("display","none");
            $('#spec').css("display","none");
            $('#serv').css("display","block");

        });

        $.post('search.php','name=',function(data){
            $("#search").html(data);
        });

        $('#new').click(function(){
            $('#add_dialog').slideDown();
            $('#annuler').click(function(){
                $('#add_dialog').slideUp();
            });
            $('#add').submit(function(){
                $.post('add.php',$(this).serialize(),function(data){
                    $('#add_dialog').slideUp();
                    $('#rep').html(data);
                    if(data == 'true') location.reload();
                });
            });
        });
        $('#search_name').keyup(function(){
            $.post('search.php','name='+$(this).val(),function(data){
                $("#search").html(data);
            });
        });
        $.post('getAllSpecs.php',function(data){
            data = JSON.parse(data);
            for(var i = 0 ; i < data.length ; i++){
                $('#specs').append("<tr> <td> "+data[i]['id_spec'] +"</td><td>"+data[i]['spec']+"</td><td>"+data[i]['groupes']+"</td><td><a href='#' class='del_spec' id="+data[i]['id_spec']+">X<a></td></tr>");
            }
        });
        $.post('getAllModals.php',function(data){

            data = JSON.parse(data);

            for(var i = 0 ; i < data.length ; i++){
                $('#modules').append("<tr> <td> "+data[i]['id_module'] +"</td><td>"+data[i]['code']+"</td><td><a href='#' class='del_modal' id="+data[i]['id_module']+">X</td></tr>");
            }
        });
        $.post('getAllServices.php',function(data){

            data = JSON.parse(data);

            for(var i = 0 ; i < data.length ; i++){
                $('#services').append("<tr> <td> "+data[i]['id_service'] +"</td><td>"+data[i]['service']+"</td><td><a href='#' class='del_service' id="+data[i]['id_service']+">X</td></tr>");
            }
        });



        $('#newSpec').click(function(){
            $('#add_spec_dialog').slideDown();
            $('#cancel_spec').click(function(){
                $('#add_spec_dialog').slideUp();
            });
            $('#add_spec').submit(function(){
                $.post('newSpec.php',$(this).serialize(),function(data){
                    if(data == 'true')location.reload();
                });
            });
        });

        $('#addService').click(function(){
            $('#add_service_dialog').slideDown();
            $('#cancel_service').click(function(){
                $('#add_service_dialog').slideUp();
            });
            $('#add_service').submit(function(){
                $.post('addService.php',$(this).serialize(),function(data){
                    if(data == 'true')location.reload();
                });
            });
        });

        $('#addModule').click(function(){
            $('#add_module_dialog').slideDown();
            $('#cancel_module').click(function(){
                $('#add_module_dialog').slideUp();
            });
            $('#add_module').submit(function(){
                $.post('addModule.php',$(this).serialize(),function(data){
                    if(data == 'true')location.reload();
                });
            });
        });

        $(document).on('click','.del_spec',function(){
            var id = this.id;
            $('#delete_spec_confirm').slideDown();
            $('.close_confirm').click(function(){
                $('#delete_spec_confirm').slideUp();
            });
            $('#delete_spec').click(function(){
                $.post('delSpec.php',{id_spec : id},function(data){
                    if(data == 'true') location.reload();
                });
            });
        });
     $(document).on('click','.del_service',function(){
            var id = this.id;
            $('#delete_service_confirm').slideDown();
            $('.close_confirm').click(function(){
                $('#delete_service_confirm').slideUp();
            });
            $('#delete_service').click(function(){
                $.post('delService.php',{id_service : id},function(data){
                    if(data == 'true') location.reload();
                });
            });
        });

        $(document).on('click','.del_modal',function(){
            var id = this.id;
            $('#delete_module_confirm').slideDown();
            $('.close_confirm').click(function(){
                $('#delete_module_confirm').slideUp();
            });
            $('#delete_module').click(function(){
                $.post('delModule.php',{id_module : id},function(data){
                    if(data == 'true') location.reload();
                });
            });
        });
    });
    $('#spec').click(function(){
        $('#spec').addClass('selected');
    });
</script>
<style>
    header {
        position: relative;

    }
    #profile_ens {
    }

    .container-fluid{
        background: white;

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
    a,.cd-logo{
        cursor: pointer;
    }


</style>