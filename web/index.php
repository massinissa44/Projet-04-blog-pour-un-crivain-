<?php 
ob_start();

// le controlleur frontal

require_once __DIR__ . '/../config/db.php';


include_once __DIR__.'/../views/layout.php';

ob_end_flush();


/*
ob_start();
if($p=== 'Home') {
    require '../views/pages/Home.php';
}elseif ($p === 'Chapter') {
    require '../views/pages/Chapter.php';
}
$content = ob_get_clean();

*/