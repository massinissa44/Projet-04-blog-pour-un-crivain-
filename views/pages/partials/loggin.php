<?php 
  $result = ChapterController::Loggin($_POST['username'], $_POST['password']);
  
  /*/$dataOneUser = ChapterController::ReadOneLogin($bdd);/*/

  if ( (isset($_POST['username']) && !empty($_POST["username"])) && (isset($_POST['username']) && !empty($_POST["username"])) ){

    header("Location: Location:index.php?p=home#ancre2");   
}      
?>

<div class="wrapper fadeInDown" id="ancre4">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="http://danielzawadzki.com/codepen/01/icon.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="" method="POST">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="Username">
      <input type="text" id="password" class="fadeIn third" name="password" placeholder="Password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>