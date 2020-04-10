<?php
class Auth {
    //public static $bddtmp = $bdd;
    
    private $username = 'admin';
    private $password = 'forteroche2020';
    private $logged = false;

    public function __construct() {
      if (!empty($_SESSION['logged'])) {
        $this->logged = (bool) $_SESSION['logged'];
      }
      
    }

    public function loggin($username,$password) {
      // execute la requete sql
      $result = [];
      if($username === $this->username && $password === $this->password) {
        $this->logged = true;
        $_SESSION['logged'] = true;
        $result['error'] = false;
        $result['message'] = 'vous etes bien connecté';
      }
      else{
        $result['error'] = true;
        $result['message'] = 'identifiant ou mot de passe incorrect';
      }
      
      return $result;
    }

    public function isLogedIn() {
      return $this->logged;
    }
}
//interagir avec les donnees

