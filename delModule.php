<?php
 require 'Module.php';
 $module = new Module();
 $module->setId($_POST['id_module']);
 $module->delModule();
  echo 'true';