<?php

    require 'Spec.php';
    $spec = new Spec();
    $spec->setSpec($_POST['spec']);
    $spec->setGroupes($_POST['groupes']);
    $spec->addSpec();
    echo 'true';