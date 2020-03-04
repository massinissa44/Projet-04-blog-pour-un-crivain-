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
        $query = "SELECT * FROM chapters" ;
        $reponse =  $this->bdd->query($query);
        $listChapters = $reponse->fetchAll();
       return $listChapters;
    }

    public function isUniqueNumber($chapter_number) {
        $query = 'SELECT * FROM chapters WHERE chapter_number = '.$chapter_number;
        $reponse =  $this->bdd->query($query); 
        $datas = $reponse->fetchAll();
        return $datas;
    }

    public function findOneChapter($id) {   
        $query = 'SELECT * FROM chapters WHERE id = '.$id;     
        $reponse =  $this->bdd->query($query); 
        $datas = $reponse->fetchAll();
        return $datas;
    }

    //déja utilisé
    public function createChapter($title, $chapter_number, $description, $content) {
        // execute requete
        $requete = $this->bdd->prepare('INSERT INTO chapters (title, chapter_number, content, description) VALUES(?, ?, ?, ?)');
        $requete->execute(array($title, $chapter_number, $content, $description));
    }

    public function updateChapter($id, $title, $chapter_number, $description, $content) {
        $sql = "UPDATE chapters SET `title`='$title',
            chapter_number = '$chapter_number',
            description = '$description',
            content = '$content'
            WHERE id='$id'";

        $Chapter = $this->bdd->prepare($sql);
        $Chapter->execute();
        return true;
        //if($Chapter->rowCount()) nous permet s'il ya eu une insertion dans notre base de données
    }

    public function deleteChapter($id) {
        $query = "DELETE FROM chapters WHERE id=". $id;
        $this->bdd->exec($query);
    }

    public function listChapterComments() {
        // vérifier si l'id existe
        // execute la requete sql qui liste les commentaires liés à $this->id
        "SELECT * FROM comments WHERE id_chapter = $this->id";
    }
}

