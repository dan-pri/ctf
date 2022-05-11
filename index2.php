<!DOCTYPE html>
<html lang="DE">
  <head>
    <meta charset="UTF-8">
    <title>Admin Center</title>
  </head>
  <body>

  <h1><a href="index.php">Admin Center Login</a></h1>
  <form action="index.php" method="get">
    <label for="iud">Username</label>
    <input type="text" name="username" id="iud">

    <label for="pw">Password</label>
    <input type="password" name="password" id="pw">
    <input type="submit" value="Login">
  </form>
<?
if(isset($_GET['username']) && isset($_GET['password'])){

  if(($_GET['username'] == "admin") && ($_GET['password'] == "H5o_ctF!ftw")){
    echo("Welcome!");
  }
}
?>

</body>
</html>
