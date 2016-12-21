<?php session_start(); if( $_SESSION['login'] != true) header("location:userlogin.php");?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>

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
            <li><a href="#S"class="selected">Changer le mot de passe</a></li>
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
        <section class="col-lg-9" style="top: 60px" id="grid">
            <div class="col-lg-1"" >
                <section class="panel" >
                    <div class="container">
                        <form class="form-signin " id="modifier">
                            <h2 class="form-signin-heading">Nouveau Mot de passe</h2>
                            <div class="login-wrap">
                                <input type="password" class="form-control" placeholder="mot de passe"  name="pass" autofocus="">
                                <input type="password" class="form-control" placeholder="retaper le mot de passe name="repass" autofocus="">
                                <button class="btn btn-danger" type="submit">Confirmer</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </section>
        <section id="profile_ens"  class="profile-nav alt green-border col-lg-3 col-sm-3 col-md-3" >
            <section class="panel" style="margin-top: 100px" >
                <div class="user-heading alt green-bg" style="background:  rgba(112, 135, 163, 1)">
                    <a href="#">
                        <img alt="" src="img/profile-avatar.jpg">
                    </a>
                    <h1>Mr <?php echo $_SESSION['name'];?></h1>
                    <p><?php echo $_SESSION['email'];?></p>
                </div>

                <ul class="nav nav-pills nav-stacked">
                    <li><a href="InfoProfile.php"> <i class="icon-calendar"></i> Profile </a></li>
                    <li><a href="logout.php"><i class="icon-key"></i> Déconnexion </a></li>
                </ul>
            </section>
        </section>


    </div>



</div>

</body>

<!-- js placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    $('#modifier').submit(function () {
        var pass = $(this).find("input[name=pass]").val();
        var repass = $(this).find("input[name=repass]").val();
        if(pass != repass) {
            alert("Les deux mot de pass ne sont pas les memes");
        }else{
            $.post('editPass.php',{pass:pass}, function (data) {
                if(  'true' == data) {
                    alert("votre mot de pass a été changer");
                    location.reload();
                }
            });
        }
        return false;

    });
</script>

<script src="js/jquery.customSelect.min.js" ></script>
<script src="js/respond.min.js" ></script>

<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="js/common-scripts.js"></script>

<!--script for this page-->

<script src="js/count.js"></script>
<style>
    .form-signin{
        margin:0px;
        margin-left: 300px;
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
    .login-wrap{
        background: beige;


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

