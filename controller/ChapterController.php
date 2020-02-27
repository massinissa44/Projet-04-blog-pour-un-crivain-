<?php
//On doit faire du rendering pour afficher nos view en récupérant l'URL
// les expressions régulières pour filtrer l'url et dire
// si URL == HOME => { inclure la page layout.php } // /4 views
// si non affiche Error.html


// récupération de données via le model
require __DIR__.'/../models/Chapters.php';

class ChapterController
{

    public static function UpdateChapter ($bdd)
    {
            $id = $_POST["id"];
            $title = $_POST["title"];
            $description = $_POST["description"];
            $content = $_POST["content"];
            $Chapter = new Chapters($bdd);
            $Chapter->updateChapter($id, $title, $description, $content);

    }

    public static function CreateChapter ($bdd)
    {
        $title = $_POST["title"];
        $description = $_POST["description"];
        $content = $_POST["content"];

        $chapters = new Chapters($bdd);
        $chapters->createChapter($title, $description, $content);

    }

    public static function ReadChapter ($bdd)
    {
        $chapters = new Chapters($bdd);
        return $chapters->listChapters();
    }

    public static function DeletChapter($bdd, $id)
    {
        $chapters = new Chapters($bdd);
        $chapters->deleteChapter($id);
    }
}






