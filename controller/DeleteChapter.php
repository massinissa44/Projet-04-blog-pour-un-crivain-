<?php
  include '../models/Chapters.php';

  $comment = new Chapters($bdd);
  $t= $comment->deleteChapter($_POST['id']);
  header("Location: {$_SERVER['HTTP_REFERER']}");