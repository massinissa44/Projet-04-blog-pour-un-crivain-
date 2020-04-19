
<?php
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

        public static function ReadReportedComments($bdd){
            $comments = new Comments($bdd);
            return $comments->readReportedComments();
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
            $id = $_POST["id"];
            $title = $_POST["title"];         
            $description = $_POST["description"];
            $content = $_POST["content"];

            $chapter = new Chapters($bdd);    
            $data = $chapter->findOneChapter($id);
            
            if($data[0]['chapter_number'] == $chapter_number || ChapterController::IsUniqueNumber($chapter_number)) {
                $chapter->updateChapter($id, $title, $chapter_number, $description, $content);              
                return true;
            }
            
            else{
                return false;
            }  
        }
        /* --Delete-- */
        public static function IsUniqueNumber($number)
        {
            return Chapters::isUniqueNumber($number);
        }
    }