<form action="" method = "POST">
  <input type = "text" name = "username">
  <input type = "password" name = "password">
  <input name = "submit" type="submit">

</form>

<?php 

  if(isset($_POST['submit'])){
    echo "<pre>";
    echo "</pre>";
    echo "<h2>The type of the form request is: ".$_SERVER['REQUEST_METHOD'];
    echo "<p>the value of username is: {$_POST['username']} the value of password is: {$_POST['password']} </p>";
  }
?>