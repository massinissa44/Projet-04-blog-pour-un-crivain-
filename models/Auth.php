<?php
class Auth {
    //public static $bddtmp = $bdd;
    
    private $username = 'admin';
    private $password = 'forteroche2020';
    private $logged;

    public function setLogged($logged) {
      $this->logged = $_SESSION['logged'] || false;
    }

    public function getLogged() {
      return $this->logged;
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
        $result['message'] = 'lidentifiant ou le mot de passe est incorrecte';
      }
      
      return $result;
    }

    public function isLoggedIn() {
      return $this->logged;
    }

    public function isLoggedOut() {
      $_SESSION['logged'] = false;
      $this->logged = false;
    }
}
//interagir avec les donnees

