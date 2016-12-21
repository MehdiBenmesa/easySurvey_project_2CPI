<?php
require 'Service.php';
$service = new Service();
$service->setId($_POST['id_service']);
$service->delService();
echo 'true';