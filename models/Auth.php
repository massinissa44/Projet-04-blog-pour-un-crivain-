<?php
class Auth {
    //public static $bddtmp = $bdd;
    public $bdd;
    
    private $username = 'admin';
    private $password = 'forteroche2020';
    private $loged ='';/*/($_SESSION['loged'] || false);/*/

    public function __construct($bdd) {
      $this->bdd = $bdd;
    }

    public function login($username,$password) {
      // execute la requete sql
      $result = [];
      if($username = $this->username && $password = $this->password) {
        $this->loged = true;
        $_SESSION['loged'] = true;
        $result['error'] = false;
      }
      else{
        $result['error'] = true;
        $result['message'] = 'lidentifiant ou le mot de passe est incorrecte';
      }
    }

    public function isLogedIn() {
      return($this->loged);
    }
}
//interagir avec les donnees

