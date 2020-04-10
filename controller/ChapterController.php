
<?php
//On doit faire du rendering pour afficher nos view en récupérant l'URL
// les expressions régulières pour filtrer l'url et dire
// si URL == HOME => { inclure la page layout.php } // /4 views
// si non affiche Error.html
// récupération de données via le model
require __DIR__.'/../models/Chapters.php';
require __DIR__.'/../models/Comments.php';

class ChapterController
{
    /* --Create-- */
    public static function CreateChapter ($bdd)
    {
        $chapter_number = $_POST["chapter_number"];
           
        if(ChapterController::IsUniqueNumber($_POST["chapter_number"])) {
            $title = $_POST["title"];
            $description = $_POST["description"];
            $content = $_POST["content"]; 

            $chapters = new Chapters($bdd);
            $chapters->createChapter($title, $chapter_number, $description, $content);
            return true;
        }
        else{
            return false;
        }  
    }

    public static function CreateComment($bdd)
    {
        $title_comment = $_POST["title_comment"];
        $content_comment = $_POST["content_comment"];
        $id_chapter = $_POST["id_chapter"];    

        $comments = new Comments($bdd);
        $comments->createComment($title_comment, $content_comment, $id_chapter);
    }

    /* --Reed-- */
    public static function ReadOneChapter($bdd, $id){    
        $chapters = new Chapters($bdd);
        return $chapters->findOneChapter($id);
    }

    public static function ReadChapter($bdd)
    {
        $chapters = new Chapters($bdd);
        return $chapters->listChapters();
    }

    public static function RedChapterComments($bdd, $id)
    {
        $chapters = new Chapters($bdd);
        return $chapters->listeChapterComments($id);
    }

    public static function ReadComment($bdd)
    {
        $comments = new Comments($bdd);
        return $comments->listComments();
    }

    public static function ReadChpaterComment($bdd)
    {
        $chaptercomments = new Chapters($bdd);
        return $chaptercomments->listChapterComments();
    }

    public static function Loggin($username,$password)
    {    
        global $Auth; 
        return $Auth->loggin($username,$password);
    }

    public static function IsLogedIn()
    {
        global $Auth; 
        return $Auth->isLogedIn();
    }

    /* --Update-- */
    public static function UpdateChapter ($bdd)
    {
        $chapter_number = $_POST["chapter_number"];
        if(ChapterController::IsUniqueNumber($_POST["chapter_number"])) {
            $id = $_POST["id"];
            $title = $_POST["title"];         
            $description = $_POST["description"];
            $content = $_POST["content"];

            $Chapter = new Chapters($bdd);
            $Chapter->updateChapter($id, $title, $chapter_number, $description, $content);
            return true;
        }
        else{
            return false;
        }    
    }

    /* --Delete-- */
    public static function DeletChapter($bdd, $id)
    {
        $chapters = new Chapters($bdd);
        $chapters->deleteChapter($id);
    }

    public static function DeletComment($bdd, $id)
    {
        $comments = new Comments($bdd);
        $comments->deleteComment($id);
    }

    public static function IsUniqueNumber($number)
    {
        return Chapters::isUniqueNumber($number);
    }

}






