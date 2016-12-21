<?php
include "User.php";
if($_SESSION['type']=='admin'&&$_SESSION['login']==true) {
    $name = ($_POST['name'])?$_POST['name']:null;
    $user = new User();
    if($name==null)$stm = $user->pdo->query("select id,name,password,email,type,year from users");
    else $stm = $user->pdo->query("select id,name,password,email,type,year from users where name like'%$name%' or email like '%$name%'or type like '%$name%' or year='$name'");
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    while ($tmp = $stm->fetch()) {
        $id = $tmp['id'];
        echo "<tr>
                                    <td >" . $tmp['id'] . "</td>
                                    <td >" . $tmp['name'] . "</td>
                                    <td >" . $tmp['password'] . "</td>
                                    <td class='center'>" . $tmp['email'] . "</td>
                                    <td class='centre'>" . $tmp['year'] . "</td>
                                    <td >" . $tmp['type'] . "</td>
                                    <td ><a href='#' class='delete' id=" . $tmp['id'] . "> Supprimer</a></td>
                                    <td ><a href='#' class='edit'  id=" . $tmp['id'] . "> Modifier</a></td>
                </tr>
                        <script>
                                $('.delete').click(function(){
                                    var id = this.id;
                                    $('#delete_confirm').slideDown();
                                    $('#exit,#annuler').click(function(){
                                        $('#delete_confirm').slideUp();
                                    });
                                    $('#ok').click(function(){
                                        $.post('delete.php','id='+id,function(data){
                                            if(data == 'true') location.reload();
                                        });
                                        $('#delete_confirm').slideUp();
                                    });
                                });
                                $('.edit').click(function(){
                                    var id = this.id;
                                    $('#edit_dialog').slideDown();
                                    $('#cancel').click(function(){
                                        $('#edit_dialog').slideUp();
                                    });
                                    $('#modifier').submit(function(){
                                        $.post('edit.php',$(this).serialize()+'&id='+id,function(data){
                                            $('#edit_dialog').slideUp();
                                            if(data == 'true') location.reload();
                                        });
                                    });
                                });
                        </script>";
    }
}else header("location:userlogin.php");

