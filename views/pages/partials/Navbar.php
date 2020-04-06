<?php
    $isLogedIn = ChapterController::IsLoggedIn();
    $resultOut = ChapterController::IsLoggedOut();
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php?p=home">Blog Jean Forteroche</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://localhost/massinissa_project/web/index.php?p=home#ancre1">Books</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Reported Coms</a>
            </li>
            <li class="nav-item">
                <?php if(!$isLogedIn){?>      
                    <a class="nav-link" href="index.php?p=loggin#ancre4">Login</a>
                <?php
                    }   
                 else{?>
                    <a class="nav-link" href="index.php?p=loggout#ancre4">LogOut</a>
                <?php
                }?>    
            </li>
        </ul>
    </div>
    
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>