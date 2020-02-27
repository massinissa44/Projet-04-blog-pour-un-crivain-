<body>
    <?php
    $ID = $_GET["id"];
    $query = 'SELECT * FROM chapters WHERE id = '.$ID;
    $bdd->query($query); 
    $reponse =  $bdd->query($query);  
    $datas = $reponse->fetchAll();
    foreach ($datas as $data)
        {
        ?>
        <form method="POST" action="" style="width: 60%; margin: auto; margin-top: 50px;">
            <div class="form-group">
                <input value ="<?= $ID;?>" type="hidden" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nom du chapitre</label>
                <input value ="<?= $data['title'];?>" type="text" name="title" class="form-control" id="exampleInputEmail1">
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
</body>
