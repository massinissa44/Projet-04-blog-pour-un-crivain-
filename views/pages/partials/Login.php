<?php 
  if ((isset($_POST['username']) && !empty($_POST["username"])) && (isset($_POST['password']) && !empty($_POST["password"])) ){
    $result = ChapterController::Loggin($_POST["username"], $_POST["password"]);
    if(!$result['error']){
      header("Location:Index.php?p=home#ancre2"); 
      exit;
    } 
    elseif($result && $result['error']){ ?>
      <div class="alert alert-danger" role="alert">    
        <p><?=$result['message'];?></p>   
      </div>   
  <?php }}?> 
  <div class="wrapper fadeInDown" id="ancre4">
    <div id="formContent">
      <!-- Login Form -->
      <form action="" method="POST" style='margin-top: 40px'> 
        <input type="text" id="login" class="fadeIn second inpt" name="username" placeholder="Username">
        <input type="password" id="password" class="fadeIn second inpt" name="password" placeholder="Password">
        <input type="submit" class="fadeIn fourth">
      </form>
    </div>
  </div>