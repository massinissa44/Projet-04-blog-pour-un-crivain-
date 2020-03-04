
    <?php
        $id = $_GET["id"];
        $dataChapter = ChapterController::ReadOneChapter($bdd, $id);
    ?>
      
    <?php
    foreach ($dataChapter as $data)
        {
        ?>
        <div class="jumbotron" style=" background-color: rgb(72, 72, 72); color: white">
            <h2 class="display-3" style="text-align: center; color: seagreen;"><?= $data['title'];?></h2>
            <p class="lead"><?= $data['content'];?></p>
            <hr class="my-4">
            <div class="lead">
            <button type="submit" class="btn btn-primary btn_update">Modifier</button>
        </div>
        <div class="jumbotron forms_update hide" style= "background-color: rgb(127, 128, 126); ">
                <form method="POST" action="" style="width: 60%; margin: auto; margin-top: 50px;">
                    <div class="form-group">
                        <input value ="<?= $id;?>" type="hidden" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom du chapitre</label>
                        <input value ="<?= $data['title'];?>" type="text" name="title" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Numéro du chapitre</label>
                        <input value = "<?= $data['chapter_number'];?>" type="number" name="chapter_number" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input value ="<?= $data['description'];?>" type="text" name="description" class="form-control" id="exampleTextarea">
                    </div>
                    <div class="form-group">
                        <label for="exampleTextarea">Contenu</label>
                        <textarea  name="content" class="form-control" id="exampleTextarea" rows="8"><?= $data['content'];?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Mettre a jour</button> 
                </form> </br>
            <?php }
            ?>  
            </div>
        </div>
        <script src="assets/index.js"></script>   

