
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Katana - Signup</title>
    <!-- <link rel="stylesheet" href="../scss/styles.scss" /> -->
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body class="container">

  <?php
  session_start();
   $dsn = 'mysql:dbname=katana;host=127.0.0.1';
    $user = 'root';
    $password = '';
    
    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connexion échouée : ' . $e->getMessage();
      }


        $error = FALSE;
        $signupOK = FALSE;

        if(isset($_POST["submit"])){
        if($_POST['email'] == NULL OR $_POST['password'] == NULL OR $_POST['confirmpassword'] == NULL OR $_POST['password'] != $_POST['confirmpassword'] ){
            $error = TRUE;
            if ($_POST['email'] == NULL AND $error) {
              $error = false;
              printf('Please complete your Email');
            }
            if ( $_POST['password'] == NULL AND $error) {
              $error = false;
              printf('Please complete your Password');
            }
            if ($_POST['confirmpassword'] == NULL AND $error) {
              $error = false;
              printf('Please confirm your Password');
            }
            if ($_POST['password'] != $_POST['confirmpassword'] AND $error) {
              $error = false;
              printf('Passwords are different');
            }
          }              
         else {
          $statement = 'INSERT INTO `member` (`email`, `pass`) VALUES(:email, :pwd)';
          $query = $dbh->prepare($statement);
   
          $query->BindValue(':email', $_POST['email']);
          $query->BindValue(':pwd', md5($_POST['password']));
   
          $query->execute();

          $signupOK = TRUE;
          $error_message = 'C BOOON CHAKAL';
   
        }
      }

        if($signupOK == TRUE) {
          header('Location: ../pages/login.php');
        }
   
     
    ?>
 
 


    <form name="signup" method="post" action="signup.php" class="login">
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
      <div class="login__input">
        <label for="mail" class="login__label">Confirm password</label>
        <input
         name="confirmpassword"
          type="password"
          class="login__enter"
          placeholder="*************"
          min="3"
          max="30"
        />
      </div>
      <input name="submit" type="submit" class="login__button" value="Sign up"></input>
      <a href="../pages/login.php" class="login__register">I already have my account</a>
  </form>
    <footer class="footer">ENG</footer>


    
  </body>
</html>
