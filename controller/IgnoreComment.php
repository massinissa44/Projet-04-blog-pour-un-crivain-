<?php
  include '../models/Comments.php';

  $comment = new Comments($bdd);
  $t= $comment->ignoreComment($_POST['id_comment']);
  header("Location: {$_SERVER['HTTP_REFERER']}");