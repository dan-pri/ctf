<html lang="DE">
  <head>
    <meta charset="UTF-8">
    <title>Admin Center</title>
  </head>
  <body>

  <h1><a href="index.php">Admin Center - Login</a></h1>
  <form action="index.php" method="post">
    <label for="iud">Username</label>
    <input type="text" name="username" id="iud">

    <label for="pw">Password</label>
    <input type="password" name="password" id="pw">
    <input type="submit" value="Login">
  </form>
<?
if(isset($_POST['username']) && isset($_POST['password'])){

  if(($_POST['username'] === "admin") && ($_POST['password'] === "H5o_ctF!ftw")){
      echo("Welcome !<br><br>");
      echo("flag_5ecc8fd983a0ffa361dc1a55aab5120bc4449fd5_");
  }
  else{
    echo("Username or Passwort incorrect");
  }
}
?>

</body>
</html>
