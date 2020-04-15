<?php 
ob_start();

// le controlleur frontal

require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../controller/InitController.php';

if(isset($_GET['action']) && !empty($_GET['action'])){
  require_once __DIR__ . '/../controller/'.$_GET['action'].'.php';
}
else{
  include_once __DIR__.'/../views/layout.php';
}

include_once __DIR__ . '/../controller/EndController.php';
ob_end_flush();