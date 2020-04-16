
<div class="jumbotron card_comment">
<h4 class="display-3 title_comment" id="ancre3">Liste des commentaires</h4>
<?php
foreach ($dataCommentChapters as $datas){
    if($datas['reported_count'] >= 5){
        continue;
    }
?>
    <div class="carde border-light mb-3">
        <div class="card-header">
            <h5><?= htmlspecialchars ($datas['title_comment']);?></h5>
            <p class="text-secondary date"><?= $datas['created_date'];?></p>
        </div>
        <div class="card-body text-secondary">
            <p class="card-text"><?= htmlspecialchars ($datas['content_comment']);?></p>
            <div class="icons"> 
                <?php  if($Auth->isLogedIn()){?>
                    <form method="POST" action="?action=DeletReportedComment" class="form_comnt">
                        <input type="hidden" name="id_comment" value="<?=$datas['id']?>">
                        <button type="submit" class="btn_reported"><i class="far fa-trash-alt" title="Supprimer"></i></button>
                    </form>
                <?php } ?>
                <form method="POST" action="?action=ReportedComment" class="form_comnt">
                    <input type="hidden" name="id_comment" value="<?=$datas['id']?>">
                    <button type="submit" class="btn_reported"><i class="fas fa-flag" title="Signaler"></i></button>
                </form>
            </div>
        </div>
    <?php }
        ?>       
        <button class="btn btn-primary btn_comment">Ajouter un commentaire</button>
    </div>
    <div class="carde border-light mb-3 forms_comment hiden">
        <form method="POST" action="" class="form">
            <div class="form-group">
                <input type="hidden" name="id_chapter" value="<?=$id?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Titre</label>
                <input type="text" name="title_comment" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
                <label for="exampleTextarea">Commentaire</label>
                <textarea  name="content_comment" class="form-control" id="exampleTextarea" rows="8"></textarea>
            </div>
            <button type="submit" #ancre1 class="btn btn-primary">Commenter</button>
        </form>   
    </div>              
</div> 
