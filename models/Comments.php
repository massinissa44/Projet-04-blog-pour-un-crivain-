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
        $response =  $this->bdd->query($query);
        $listComments = $response->fetchAll();
        return $listComments;
    }

    public function createComment($title_comment, $content_comment, $id_chapter) {
        $query = $this->bdd->prepare('INSERT INTO comments (title_comment, content_comment, id_chapter) VALUES(?, ?, ?)');
        $query->execute(array($title_comment, $content_comment, $id_chapter));
    }

    public function deleteComment($id) {
        $query = "DELETE FROM comments WHERE id=". $id;
        $this->bdd->exec($query);
    }

    public function reporteComment($id){
        $query = "UPDATE comments SET reported_count = reported_count + 1 WHERE id = $id";   
        $response = $this->bdd->prepare($query);
        $response->execute();
        return true;    
    }

    public function ignoreComment($id){
        $query = "UPDATE comments SET reported_count = 0 WHERE id = $id";   
        $response = $this->bdd->prepare($query);
        $response->execute();
        return true;    
    }


    public function readReportedComments(){
        $query = "SELECT * FROM comments WHERE reported_count > 0 ORDER BY reported_count DESC";
        $response =  $this->bdd->query($query);
        $reportedComments = $response->fetchAll();
        return $reportedComments;
    }
}

