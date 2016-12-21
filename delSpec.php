<?php

    require 'Spec.php';
    $spec = new Spec();
    $spec->setIdSpec($_POST['id_spec']);
    $spec->delSpec();
    echo 'true';