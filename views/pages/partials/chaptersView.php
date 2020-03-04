
        <h3>Les chapitres</h3>
        <table class="table table-striped table-dark">
<?php
$listChapters = ChapterController::ReadChapter($bdd);

foreach ($listChapters as $listChapter)
{
?>     
    <tbody>							
        <tr>
            <td id="ancre2">
               <a href=index.php?p=update&id=<?=$listChapter['id']?>#ancre1 style="text-decoration: none; color: rgb(200, 203, 194); font-size: 20px;">
                   <strong>Chapitre<?=$listChapter ['chapter_number'] ?>:</strong>
               </a>
            </td>
            <td>
               <a href=index.php?p=update&id=<?=$listChapter['id']?>#ancre1 style="text-decoration: none; color: rgb(188, 212, 145  ); font-size: 20px;">
                   <strong><?=$listChapter['title']?></strong>
               </a>
            </td>
            <td>
               <a href=index.php?p=delet&id=<?=$listChapter['id']?> class="btn btn-danger btn-md">
                <span class="glyphicon glyphicon-edit"></span>Supprimer</a>
            </td>
        </tr>
    </tbody>
            
<?php
}
?>
</table>

    

