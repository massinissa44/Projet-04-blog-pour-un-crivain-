<h3>Les chapitres</h3>
<table class="table table-striped table-dark">
    <?php
        $listChapters = ChapterController::ReadChapter($bdd);
        foreach ($listChapters as $listChapter) { ?>
            <tbody>							
                <tr>
                    <td id="ancre2">
                        <a href=index.php?p=update&id=<?=$listChapter['id']?>#ancre1 class="number-chapter">
                            <strong>Chapitre<?=$listChapter ['chapter_number']?>:</strong>
                        </a>
                    </td>
                    <td>
                        <a href=index.php?p=update&id=<?=$listChapter['id']?>#ancre1 class="name-chapter">
                            <strong><?= htmlspecialchars(strtoupper($listChapter['title']))?></strong>
                        </a>
                    </td>
                    <?php
                        if($Auth->isLogedIn()) {?>
                            <td>
                                <form method="POST" action="?action=DeleteChapter">
                                    <input type="hidden" name="id" value="<?=$listChapter['id']?>">
                                    <button type="submit" class="button-dlt"><i class="far fa-trash-alt" title="Supprimer"></i></button>
                                </form>  
                            </td>
                    <?php }
                    ?> 
                </tr>
            </tbody>
        <?php
        }
    ?>
</table>   