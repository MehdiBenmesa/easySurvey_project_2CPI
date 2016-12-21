<?php
require 'Module.php';
$module = new Module();
$module->setCode($_POST['module']);
$module->addModule();
echo 'true';