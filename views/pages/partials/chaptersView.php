
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
                <a href=index.php?p=update&id=<?=$listChapter['id']?>#ancre1 class="number_chapter" style="text-decoration: none; color: rgb(200, 203, 194);">
                    <strong>Chapitre<?=$listChapter ['chapter_number']?>:</strong>
                </a>
            </td>
            <td>
                <a href=index.php?p=update&id=<?=$listChapter['id']?>#ancre1 class="name_chapter" style="text-decoration: none; color: rgb(188, 212, 145);">
                    <strong><?= htmlspecialchars(strtoupper($listChapter['title']))?></strong>
                </a>
            </td>
            <?php if($Auth->isLogedIn()) {?>
            <td>
                <form method="POST" action="?action=DeleteChapter" class="form_comnt">
                    <input type="hidden" name="id" value="<?=$listChapter['id']?>">
                    <button type="submit" class="btn_reported"><i class="far fa-trash-alt" title="Supprimer"></i></button>
                </form>  
            </td>
            <?php
            }?> 
        </tr>
    </tbody>
<?php
}
?>
</table>   

