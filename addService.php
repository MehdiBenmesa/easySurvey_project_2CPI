<?php
require 'Service.php';
$service = new Service();
$service->setService($_POST['service']);
$service->addService();
echo 'true';