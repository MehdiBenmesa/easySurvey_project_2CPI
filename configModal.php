<?php
require 'Sondage.php';
$sondage = new Sondage();
$sondage->setId($_POST['id']);
$sondage->configModal($_POST['idModal']);
echo "true";