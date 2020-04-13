<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Katana - Login</title>
    <link rel="stylesheet" href="../scss/styles.scss" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body class="container">

<?php 
session_start();
 $dbh = new PDO('mysql:dbname=katana;host=127.0.0.1', 'root', '');


    
  $query = $dbh->prepare($result);

  $query->execute();


if(isset($_POST['signin'])) {
  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  $pass2 = $_POST['password'];


  $emailfind = false;
  $passfind = false;
  while($data = $query->fetch ()) {
    if ($email == $data['email']) {
      $emailfind = true;
      if ($pass == $data['pass']) {
        $passfind = true;
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['pass'] = md5($pass2);

        header('Location: ../pages/home.php');
      }
    }
  }if (!$emailfind) {
    printf("Invalid email");
  }
  if (!$passfind) {
    printf("Invalid password");
  }
}



?>

    <form method="POST" action="login.php" class="login">
      <div class="login__logo">katana</div>
      <div class="login__input">
        <label for="mail" class="login__label">Email</label>
        <input
        name="email"
          type="email"
          class="login__enter"
          placeholder="akabanekarma@gmail.com"
          min="3"
          max="30"
        />
      </div>
      <div class="login__input">
        <label for="mail" class="login__label">Password</label>
        <input
        name="password"
          type="password"
          class="login__enter"
          placeholder="*************"
          min="3"
          max="30"
        />
      </div>
      <input type="submit" name="signin" value="Sign in" class="login__button"></input>
      <a href="../pages/signup.php" class="login__register"
        >Create an account</a
      >
</form>
    <footer class="footer">ENG</footer>
  </body>
</html>
