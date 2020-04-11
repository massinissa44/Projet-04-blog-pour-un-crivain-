<script>
    tinymce.init({
    selector: '#mytextarea'
    });
</script>
    <?php
        $id = $_GET["id"];
        $dataChapter = ChapterController::ReadOneChapter($bdd, $id);
        $dataComment = ChapterController::ReadComment($bdd);
        $dataCommentChapters = ChapterController::RedChapterComments($bdd, $id);
    
        if(isset($_POST["title"]) && !empty($_POST["title"])){
            if(ChapterController::UpdateChapter($bdd)){
            header("Location: {$_SERVER['HTTP_REFERER']}");
            }
            else {
                ?>
                <div class="alert alert-danger" role="alert">    
                    <p>Numéro de chapitre existe déjà, veuillez entrer un nouveau numéro</p>   
                </div> 
                <?php   
            }     
        } 
    ?>     
    <?php
    foreach ($dataChapter as $data)
        {
        ?>
        <div class="jumbotron">
            <h2 class="display-3"><?= $data['title'];?></h2>
            <p class="lead"><?= $data['content'];?></p>
            <?php if($Auth->isLogedIn()) {?>
                <i class="fas fa-edit fa-2x btn_update" title="Modifier"></i>
            <?php } ?>
            <hr class="my-4">
        </div>
        <div class="jumbotron forms_update hide">
            <form method="POST" action="" class="form">
                <div class="form-group">
                    <input value ="<?= $id;?>" type="hidden" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom du chapitre</label>
                    <input value ="<?= htmlspecialchars ($data['title']);?>" type="text" name="title" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Numéro du chapitre</label>
                    <input value = "<?= $data['chapter_number'];?>" type="number" name="chapter_number" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <input value ="<?= htmlspecialchars ($data['description']);?>" type="text" name="description" class="form-control" id="exampleTextarea">
                </div>
                <div class="form-group">
                    <label for="exampleTextarea">Contenu</label>
                    <textarea id="mytextarea" name="content" class="form-control" id="exampleTextarea" rows="8"><?= htmlspecialchars ($data['content']);?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Mettre a jour</button> 
            </form> </br>
            <?php }
            ?>  
        </div>
    <div class="jumbotron card_comment">
        <h4 class="display-3 title_comment" id="ancre3">Liste des commentaires</h4>
        <?php
        foreach ($dataCommentChapters as $datas)
            {
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
                            <a href=index.php?p=delet-comment&id=<?=$datas['id']?>>
                                <i class="far fa-trash-alt" title="Supprimer"></i>
                            </a>
                        <?php } ?>
                        <a href=>
                            <i class="fas fa-flag" title="Signaler"></i>
                        </a>   
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
<script src="assets/index.js"></script>   

