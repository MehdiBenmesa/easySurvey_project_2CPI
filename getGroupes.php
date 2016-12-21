<?php
    require 'Spec.php';
    $spec = new Spec();
    $spec->setSpec($_POST['spec']);
    echo $spec->getGroupes();