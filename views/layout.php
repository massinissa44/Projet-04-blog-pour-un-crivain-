<?php
session_start();
include_once __DIR__ . '/../controller/ChapterController.php';
//récupération de notre header
include 'pages/head.php';

// récupération du body
include 'pages/body.php';

include 'pages/footer.html';

?>