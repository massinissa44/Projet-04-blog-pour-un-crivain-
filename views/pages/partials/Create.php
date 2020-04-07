<script>
    tinymce.init({
    selector: '#mytextarea'
    });
</script>
<?php
    /*$isUniqueNumber = ChapterController::IsUniqueNumber(45);*/
    
    /*var_dump($isUniqueNumber);
    die();
    if (in_array(array('1'), $isUniqueNumber)) {
        echo "'ph' a été trouvé\n";
    }
    else {
        echo "walou"; 
    }*/
    $isUniqueNumber = ChapterController::IsUniqueNumber($bdd);
    
    

    $a = array(array('p'), array('p'), 'o');
    
    if (in_array(array('7'), $isUniqueNumber)) {
    echo "'ph' a été trouvé\n";
    }

    
?>

<div class="jumbotron">
    <h2 class="display-3"><strong>Formulaire de création</strong></h2>
    <div class="lead">
        <form method="POST" action="" class="creat_chapter">

            <div class="form-group">
                <label>Nom du chapitre</label>
                <input  type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
            <?php /*if($_POST['chapter_number'] == $isUniqueNumber)*/{
                
            } ?>
                <label for="exampleInputEmail1">Numéro du chapitre</label>
                <input type="number" name="chapter_number" class="form-control" id="exampleInputEmail1">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleTextarea">Contenu</label>
                <textarea id="mytextarea" type="textarea" name="content" class="form-control" rows="8"></textarea>
            </div>

            <button type="submit" class="btn btn-primary"> Créer un nouveau chapitre </button>
        </form> </br>
    </div>
</div>
