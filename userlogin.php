<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="js/jquery.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="login-body">

    <div class="container">

      <form class="form-signin col-lg-4" id = "login" >
        <h2 class="form-signin-heading">Connectez-vous</h2>
        <div class="login-wrap">

            <input type="text" class="form-control"  placeholder="Nom d'utilisateur ou Email" name="name_mail" autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password" >
            <button class="btn btn-lg btn-login btn-block" type="submit" value="Login">Connexion</button>

        </div>
          <div id="reponse_log"></div>

      </form>
        <div class="col-lg-4">

        </div>


        <form class="form-signin col-lg-4" id="register" >
            <h2 class="form-signin-heading">Inscrivez-vous</h2>
            <div class="login-wrap">
                <p>Créez votre compte personnel</p>
                <input type="text" class="form-control" placeholder="Nom d'utilisateur" id ="name" name="name" autofocus>
                <input type="text" class="form-control" placeholder="Email" name="email" id ="mail" autofocus>
                <input type="password" class="form-control" placeholder="Password" name="password" autofocus>
                <input type="password" class="form-control" id ="pass" placeholder="Repassword" name="repassword" autofocus>
               <!-- -->
                <div class="modal fade in" id="module" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="false" >
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Dialog de confirmation</h4>
                            </div>
                            <div class="modal-body" id="data_specs">
                                Selectionez votre année d'étude et votre groupe !?<br>
                                <select id="year">

                                </select>
                                <div id="radios">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning" id="ok" type="button"> Ok</button>
                            </div>
                      </div>
                     </div>
                </div>
                <div class="radios">
                    <label class="label_radio col-lg-6 col-sm-4" for="radio-02">
                        <input  id="radio-02" value="enseignant" name="type" type="radio" checked/> Enseignant
                    </label>
                    <label class="label_radio col-lg-6 col-sm-4" for="radio-01">
                        <input  id="radio-01" value="etudiant" type="radio" name="type"/> Etudiant
                    </label>
                    <label class="label_radio col-lg-12 col-sm-4" for="radio-03">
                        <input  id="radio-03" value="administration" name="type" type="radio" /> Administration
                    </label>

                </div>
                <button class="btn btn-lg btn-login btn-block" type="submit">S'inscrire</button>
            </div>

            <div id="reponse_reg" ></div>

        </form>


    </div>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            function processLogin( e ){
                $.ajax({
                    url: 'login.php',
                    dataType: 'text',
                    type: 'post',
                    contentType: 'application/x-www-form-urlencoded',
                    data: $(this).serialize(),
                    success: function( data, textStatus, jQxhr ){
                        if(data === 'admin') window.location.assign("adminindex.php");
                        else if(data === 'etudiant') window.location.assign("student.php");
                        else if(data === 'enseignant') window.location.assign("indexens.php");
                        else if(data === 'administration') window.location.assign("indexadm.php");

                       else $("#reponse_log").html( "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'> <i class='icon-remove'></i> </button> <strong>Erreur</strong> Inscrivez ou retapez votre mot de pass.</div>");
                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        console.log( errorThrown ); }
                });
                e.preventDefault();
            }
            function processRegister( e ){
                $.ajax({
                    url: 'register.php',
                    dataType: 'text',
                    type: 'post',
                    contentType: 'application/x-www-form-urlencoded',
                    data: $(this).serialize(),
                    success: function( data, textStatus, jQxhr ){
                        if(data === 'etudiant') window.location.assign("student.php");
                        else if(data === 'enseignant') window.location.assign("indexens.php");
                        else if(data === 'administrateur') window.location.assign("indexadm.php");
                        else $("#reponse_reg").html( data );

                    },
                    error: function( jqXhr, textStatus, errorThrown ){
                        console.log( errorThrown ); }
                });
                e.preventDefault();
            }

            $('#login').submit(processLogin);
            $('#register').submit(processRegister);

            $("input:radio[name='type']").change(function(){
                if ($(this).is(':checked') && $(this).val() == 'etudiant') {
                    var spec;
                    $.post('getAllSpecs.php',function(data){
                        data = JSON.parse(data);
                        spec = data;
                        $('#year').html('');
                        for(var i = 0 ; i < data.length; i++){
                            $('#year').html();
                            var val = data[i]['spec'];
                            $('#year').append("<option>"+val+"</option>");
                        }
                    });

                    $('#year').change(function(){
                        var val = $(this).val();
                        $.post('getGroupes.php',{spec:val},function(data){
                            $('#radios').html('');
                            if(data) {
                                for (var k = 0; k < data; k++) {
                                    if(k  % 3 == 0) $('#radios').append("<br>");

                                    if(k == 0) $('#radios').append("<input type=radio name='year' value='" + val + "G" + (k + 1) + "'checked>" + val + "G" + (k + 1) + "&nbsp");

                                    else $('#radios').append("<input type=radio name='year' value='" + val + "G" + (k + 1) + "'>" + val + "G" + (k + 1) + "&nbsp");
                                }
                            }else{
                                    $('#radios').html("<input type=hidden name='year' value='"+val+"'>");
                            }

                        });
                    });
                    $('#module').slideDown();
                }
            });

            $('#ok').click(function(){
                $('#module').slideUp();
            });
        });
    </script>

</body>
<style>
    .login-body{
        background-image: url("img/lock-bg.jpg");
    }
</style>
</html>
