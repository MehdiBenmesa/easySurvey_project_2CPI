<?php
    header('Content-Type: text/xml;charset=utf-8');
    echo(utf8_encode("<?xml version='1.0' encoding='UTF-8' ?><options>"));

    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $bdd = new PDO('mysql:host=localhost;dbname=database', 'root', '');

    $keyword = '%' . $_POST['keyword'] . '%';
    $sql = 'SELECT question FROM questions WHERE question LIKE (:keyword) LIMIT 0, 10';
    $query = $bdd->prepare($sql);
    $query->execute(array('keyword' => $keyword));

    while($q = $query->fetch())
    {
        $remplacer = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $q['question']);
        echo '<li onclick="modifierText(\'' . utf8_encode($q['question']) . '\')">' . utf8_encode($remplacer) . '</li>';
    }


}catch(Exception $e){
    Die('Erreur : ' . $e->getMessage());
}

