<?php
include '../models/Chapters.php';

$comment = new Chapters($bdd);
$t= $comment->createChapter($_POST["title"], $_POST["chapter_number"], $_POST["content"], $_POST["description"]);
header("Location: {$_SERVER['HTTP_REFERER']}");