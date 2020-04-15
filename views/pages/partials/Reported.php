<?php
$reportedComments = ChapterController::ReadReportedComments($bdd);

?>
<div class="container" id="ancre5">
  <div class="row col-md-10 col-md-offset-1 custyle">
    <table class="table table-striped custab">
      <thead>
        <tr>
          <th>Titre</th>
          <th>Commentaire</th>
          <th class="text-center">Action</th>
        </tr>
      </thead>
<?php
foreach($reportedComments as $reported)
{?>
  <tr>
    <td><?=$reported["title_comment"]?></td>
    <td><?=$reported["content_comment"]?></td>
    <td class="text-center">
      <form method="POST" action="?action=DeletReported" class="form_comnt">
          <input type="hidden" name="id_comment" value="<?=$reported['id']?>">
        <button type="submit" class="btn_reported"><i class="fas fa-times-circle fa-2x" title="Supprimer"></i></button>
      </form>
      <form method="POST" action="?action=IgnoreComment" class="form_comnt">
          <input type="hidden" name="id_comment" value="<?=$reported['id']?>">
        <button type="submit" class="btn_reported"><i class="fas fa-check-circle fa-2x" title="Ignorer"></i></button>
      </form>
    </td>
  </tr>
<?php
}
?>
    </table>
  </div>
</div>  