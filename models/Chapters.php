<?php
class Chapters {
    //public static $bddtmp = $bdd;
    public $bdd;
    public $id;
    public $chapter_number;
    public $content;
    public $title;
    public $createdDate;
    public $description;

    public function __construct($bdd) {
        $this->bdd = $bdd;
    }
    //deja utilisé
    public function listChapters() {
        // execute la requete sql
        $query = "SELECT * FROM chapters ORDER BY chapter_number ASC" ;
        $response =  $this->bdd->query($query);
        $listChapters = $response->fetchAll();
        return $listChapters;
    }

    public function listeChapterComments($id) {
        $query = "SELECT * FROM  comments WHERE id_chapter = $id ";      
        $response =  $this->bdd->query($query);   
        $listeChapterComments = $response->fetchAll();
        return $listeChapterComments;       
    }

    public static function isUniqueNumber($number) {
        $query = "SELECT chapter_number FROM chapters WHERE chapter_number = $number";
        global $bdd;
        $response =  $bdd->query($query); 
        $data = $response->fetchAll();
        return !$data; // return boolean
    }

    public function findOneChapter($id) {   
        $query = 'SELECT * FROM chapters WHERE id = '.$id;     
        $response =  $this->bdd->query($query); 
        $datas = $response->fetchAll();
        return $datas;
    }
    
    //déja utilisé
    public function createChapter($title, $chapter_number, $description, $content) {
        // execute requete
        $query = $this->bdd->prepare('INSERT INTO chapters (title, chapter_number, content, description) VALUES(?, ?, ?, ?)');
        $query->execute(array($title, $chapter_number, $content, $description));
    }


    public function updateChapter($id, $title, $chapter_number, $description, $content) {
        $query = "UPDATE chapters SET title = $title,
            chapter_number = $chapter_number,
            description = $description,
            content = $content
            WHERE id = $id";
        $chapter = $this->bdd->prepare($query);
        $chapter->execute();
        return true;
    }

    public function deleteChapter($id) {
        $query = "DELETE FROM chapters WHERE id=". $id;
        $this->bdd->exec($query);
    }
}