
        <h3>Les chapitres</h3>
        <table class="table table-striped">
<?php
$listChapters = ChapterController::ReadChapter($bdd);

foreach ($listChapters as $listChapter)
{
?>     
    <tbody>							
        <tr>
            <td id="ancre2">Chapitre :</td>
           <td>
               <a href=index.php?p=update&id=<?=$listChapter['id']?>#ancre1>
                   <?=$listChapter['title']?>
               </a>
           </td>
           <td>
               <a href=index.php?p=delet&id=<?=$listChapter['id']?> class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-edit"></span>Supprimer</a>
            </td>
        </tr>
    </tbody>
            
<?php
}
?>
</table>

    

