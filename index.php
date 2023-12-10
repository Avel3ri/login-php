<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <form action="login.php" method="post">
    <h2>Login</h2>
    <?php if (isset($_GET['error'])) { ?>
      <p class="error"><?=$_GET['error']?></p>
    <?php } ?>
    <label>Username:</label>
    <input type="text" name="uname" placeholder="username"><br>

    <label>Password:</label>
    <input type="password" name="upassword" placeholder="password"><br>

    <button type="submit">Login</button>
  </form>  

</body>
</html>