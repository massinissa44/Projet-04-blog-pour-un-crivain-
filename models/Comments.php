<?php
class Comments {
    //public static $bddtmp = $bdd;
    public $bdd;
    public $id;
    public $title_comment;
    public $content_comment;
    public $createdDate;
    public $id_chapter;
    
    public function __construct($bdd) {
        $this->bdd = $bdd;
    }
   
    public function listComments() {
        // execute la requete sql
        $query = "SELECT * FROM comments";
        $reponse =  $this->bdd->query($query);
        $listComments = $reponse->fetchAll();
       return $listComments;
    }

    public function createComment($title_comment, $content_comment, $id_chapter) {
        // execute requete
        $requete = $this->bdd->prepare('INSERT INTO comments (title_comment, content_comment, id_chapter) VALUES(?, ?, ?)');
        $requete->execute(array($title_comment, $content_comment, $id_chapter));
    }

    public function deleteComment($id) {
        $query = "DELETE FROM comments WHERE id=". $id;
        $this->bdd->exec($query);
    }
}

