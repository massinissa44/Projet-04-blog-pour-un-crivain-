<?php 
ob_start();

// le controlleur frontal

require_once __DIR__ . '/../config/db.php';

require_once __DIR__ . '../controller/initcontroller.php';

include_once __DIR__.'/../views/layout.php';

require_once __DIR__ . '../controller/endcontroller.php';

ob_end_flush();