<?php
class Auth {
    //public static $bddtmp = $bdd;
    public $bdd;
    
    private $username = 'admin';
    private $password = 'forteroche2020';
    private $logged;

    public function __construct($bdd) {
      $this->bdd = $bdd;
      $this->logged = $_SESSION['logged']|| false;
    }

    public function loggin($username,$password) {
      // execute la requete sql
      $result = [];
      if($username === $this->username && $password === $this->password) {
        $this->logged = true;
        $_SESSION['logged'] = true;
        $result['error'] = false;
      }
      else{
        $result['error'] = true;
        $result['message'] = 'lidentifiant ou le mot de passe est incorrecte';
      }
      return $result;
    }

    public function isLoggedIn() {
      return $this->logged;
    }
}
//interagir avec les donnees

