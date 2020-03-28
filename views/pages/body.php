<body>
    <div class="card bg-dark text-white">
        <img class="card-img background_picture"  src="../home.jpg" alt="image de fond">
        <div class="card-img-overlay">
            <h1 class="card-title">Bienvenue sur le blog de Jean Forteroche</h1>
            <p class="card-text">Vous pourrez consulter ses derniers romans chapitre par chapitre mais aussi échanger ou juste laisser un message via les commentaires.</p>
        </div>
    </div>
    <div class="container">
        <div class="content">
            <h2 id="ancre1">Le dernier roman :</h2>
            <div class="row">
                <div class="col-sm-3">
                    <img src="../card.jpg" class="img-thumbnail" alt="">
                </div>
                <div class="col-sm-9">
                    <h2 class="title">Billet simple pour l'Alaska</h2>
                    <p class="info"><em>Roman</em> | <em><i class="far fa-clock"></i> 07 février 2020</em></p>
                    <div class="item"><p>Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Aliquam eget purus vitae nisl dignissim eleifend. Vestibulum porttitor nulla pharetra
                        nisi venenatis, non tempus leo condimentum. Cras sit amet neque tincidunt, mollis ante eget,
                        porta odio. Aenean pharetra justo suscipit nisl semper vehicula. Aliquam euismod orci non
                        dolor hendrerit, sed tincidunt mi tincidunt. Aliquam vulputate suscipit purus vitae
                        pulvinar. Phasellus et nibh eu risus porttitor sodales. Integer accumsan ornare hendrerit.
                        Maecenas sed sagittis ex. Maecenas maximus auctor massa, quis dignissim metus faucibus non.
                        Suspendisse at dignissim turpis. Sed sed viverra metus, eu efficitur felis. Quisque id
                        libero sed mi maximus pretium eu nec urna. Mauris in velit ac ex pharetra sagittis luctus ac
                        elit.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <?php 
        if (!isset($_GET["p"]) || empty($_GET["p"])) {
            header('Location:index.php?p=home');
            exit;
        }
        
        if($_GET["p"] ==="home") {
                include 'partials/chaptersView.php';
            ?>
            <a href="index.php?p=create#ancre1" class="btn btn-outline-secondary btn-md">
                <span class="glyphicon glyphicon-edit"></span>Ajouter un nouveau chapitre</a>
            <?php 
        }

        if($_GET["p"] === "login") {
            include 'partials/login.php';
            ?>
            <style>
                .content {
                    display: none;
                }
            </style>
            <?php
        }
        elseif ($_GET["p"] === "create") {
            include 'partials/Create.php';
            if(isset($_POST["title"]) && !empty($_POST["title"])){
                $Chapter = ChapterController::CreateChapter($bdd);
                header('Location:index.php?p=home#ancre2');
            }
        }
        
        elseif ($_GET["p"] ==="delet" && isset($_GET['id'])){   
           // include 'partials/delet.php';
            ChapterController::DeletChapter($bdd,$_GET['id']);
            header('Location:index.php?p=home#ancre2');
        }

        elseif ($_GET["p"] ==="delet-comment" && isset($_GET['id'])){   
            // include 'partials/delet.php';
            ChapterController::DeletComment($bdd,$_GET['id']);
            header("Location: {$_SERVER['HTTP_REFERER']}");
        }
        
        elseif (isset($_GET['id']) && $_GET['p'] ==="update"){
            include 'partials/Update.php';

            if(isset($_POST["title"]) && !empty($_POST["title"])){
            ChapterController::UpdateChapter($bdd);
            header("Location: {$_SERVER['HTTP_REFERER']}");
            }
            
            elseif (isset($_POST['content_comment']) && !empty($_POST["content_comment"])) {
                ChapterController::CreateComment($bdd);
                header("Location: {$_SERVER['HTTP_REFERER']}");
            }    
        }                         
        ?>
    </div>                  
</body>
