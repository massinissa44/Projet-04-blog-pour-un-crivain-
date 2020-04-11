
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
                <?php  if($Auth->isLogedIn()){?>
                <a class="nav-link" href="index.php?p=reported#ancre5">Reported</a>
                <?php
                    }?>
            </li>
            <li class="nav-item active">
                <?php  if(!$Auth->isLogedIn()){?>      
                    <a class="nav-link" href="index.php?p=loggin#ancre4">Login</a>
                <?php
                    }   
                else{?>
                    <a class="nav-link" href="index.php?p=loggout">LogOut</a>
                <?php
                }?>    
            </li>
        </ul>
    </div>
</nav>