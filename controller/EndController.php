<?php
function __destruct() {
  try {
      $this->$bdd = null; //Closes connection
  } 
  catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
  }
}