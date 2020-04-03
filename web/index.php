<?php 
ob_start();

// le controlleur frontal

require_once __DIR__ . '/../config/db.php';

include_once __DIR__.'/../views/layout.php';
require_once __DIR__ . '../controller/InitController.php';
require_once __DIR__ . '../controller/EndController.php';

ob_end_flush();