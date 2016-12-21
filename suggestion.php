<?php

try{

    $bdd = new PDO('mysql:host=localhost;dbname=database', 'root', '');

    $keyword = '%' . $_POST['keyword'] . '%';
    $genre = $_POST['type'];
    $sql = 'SELECT question,id_q FROM questions WHERE type = (:genre) and question LIKE (:keyword) and original = (:y) LIMIT 0, 10';
    $query = $bdd->prepare($sql);
    $query->execute(array('keyword' => $keyword,'genre' => $genre,'y' => 'y'));

    while($q = $query->fetch())
    {
        $id_q = $q['id_q'];
        $remplacer = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $q['question']);
        echo "<option id='$id_q'>" . utf8_encode($remplacer) . "</option>";
    }


}catch(Exception $e){
    Die('Erreur : ' . $e->getMessage());
}
