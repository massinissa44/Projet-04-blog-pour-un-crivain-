<?php
  include '../models/Comments.php';

  $comment = new Comments($bdd);
  $t= $comment->createComment($_POST["title_comment"], $_POST["content_comment"], $_POST["id_chapter"]);
  header("Location: {$_SERVER['HTTP_REFERER']}");