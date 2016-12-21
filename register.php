<?php
require_once "User.php";
 try {
     $name = $_POST['name'];
     $password  = $_POST['password'];
     $email = $_POST['email'];
     $type = $_POST['type'];
     $repassword = $_POST['repassword'];
     $year = ($type=='etudiant')?$_POST['year']:0;
     if($name && $password && $email && $type && $repassword) {

         if($type == 'etudiant') {
             if ($password == $repassword) {
                 if(preg_match("/@esi.dz/",$email)) {
                     $user = new User();
                     $user->registre($name, $password, $email, $type, $year);
                 }else{
                     echo "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'>
                        <i class='icon-remove'></i>
                        </button>
                        <strong>Erreur</strong>Email incorrect</div>
                        <script>
                        $(document).ready(function(){
                            $('#mail').css('background-color','#FF6B67');

                        });
                        </script>";
                 }
             } else {

                 echo "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'>
                        <i class='icon-remove'></i>
                        </button>
                        <strong>Erreur</strong> La reintroduction de votre mot de passe est fausse.</div>
                        <script>
                        $(document).ready(function(){
                            $('#pass').css('background-color','#FF6B67');

                        });
                        </script>";
             }
         }else{
                 if ($password == $repassword) {
                     if ($password == $repassword) {
                         $year = 0;
                         $user = new User();
                         $user->registre($name, $password, $email, $type, $year);
                     }else{
                         echo "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'>
                        <i class='icon-remove'></i>
                        </button>
                        <strong>Erreur</strong>Email incorrect</div>
                        <script>
                        $(document).ready(function(){
                            $('#mail').css('background-color','#FF6B67');

                        });
                        </script>";
                     }
                 } else {

                     echo "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'>
                            <i class='icon-remove'></i>
                            </button>
                            <strong>Erreur</strong> La reintroduction de votre mot de passe est fausse.</div>
                            <script>
                            $(document).ready(function(){
                                $('#pass').css('background-color','#FF6B67');

                            });
                            </script>";

             }
         }

     }else{

         echo "<div class='alert alert-block alert-danger fade in'><button data-dismiss='alert' class='close close-sm' type='button'>
                    <i class='icon-remove'></i>
                    </button>
                    <strong>Erreur</strong> remplir les champs vides.</div>";

     }
 }catch (Exception $e){
     $e->getMessage();
 }