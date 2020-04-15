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
        <?php 
        include 'CommentView.php'
        ?>    
<script src="assets/index.js"></script>   

