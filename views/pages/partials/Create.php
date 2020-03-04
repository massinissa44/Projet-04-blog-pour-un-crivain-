
<div class="jumbotron" style="background-color: rgb(72, 72, 72); color: white">
    <h2 class="display-3" style="text-align: center; color: seagreen;"><strong>Formulaire de création</strong></h2>
    <div class="lead">
        <form method="POST" action="" style="width: 60%; margin: auto; margin-top: 50px;">

            <div class="form-group">
                <label>Nom du chapitre</label>
                <input  type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Numéro du chapitre</label>
                <input type="number" name="chapter_number" class="form-control" id="exampleInputEmail1">
            </div>
            
            <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="exampleTextarea">Contenu</label>
                <textarea type="textarea" name="content" class="form-control" rows="8"></textarea>
            </div>

            <button type="submit" class="btn btn-primary"> Créer un nouveau chapitre </button>
        </form> </br>
    </div>
</div>
