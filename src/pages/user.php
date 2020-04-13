<?php 
session_start();
$dbh = new PDO('mysql:dbname=katana;host=127.0.0.1', 'root', '');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="stylesheet" href="../scss/styles.scss" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>
  <body class="container">
  <?php 


      if(isset($_SESSION['email'])) {

       
     
 ?>

 <?php 

 if(isset($_POST['submit'])) {

    
    $request = $dbh->prepare('UPDATE member SET pass = ?  WHERE email = ?');
    $request2 = $dbh->prepare('UPDATE member SET email = ? WHERE email = ?');


    $request->execute([
      md5($_POST['password']),
      $_SESSION['email']
    ]); 
    printf('cool');
  

   
    $request2->execute([
      $_POST['email'],
      $_SESSION['email']
    ]);

    header('Location: ../pages/logout.php');


 }

 

 if(!empty($_FILES['uploaded_file']))
 {
   $path = "../assets/uploads/";
   $path = $path . basename( $_FILES['uploaded_file']['name']);

   if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $path)) {
    echo "The file ".  basename( $_FILES['uploaded_file']['name']). 
     " has been uploaded";

     $request3 = $dbh->prepare('UPDATE member SET picture = ? WHERE email = ?');
     $request3->execute([
      basename( $_FILES['uploaded_file']['name']),
      $_SESSION['email']
    ]); 
   } else{
       echo "There was an error uploading the file, please try again!";
   }
   $picture = $_FILES['uploaded_file'];
   echo  $picture;
 }
 ?>
 
 <img src="../assets/uploads/<?php $picture?>">
    <section class="user">
      <nav class="user__nav">
        <ul class="user__categories">
          <li id="account" class="active">Account setting</li>
          <li id="sub">My Subscription</li>
        </ul>
      </nav>
      <section class="user__settings">
        <article class="user__setting">
          <div class="user__account">
            <form class="user__form" method="POST" enctype="multipart/form-data" action="user.php">
              <!-- <div class="user__input">
                <label class="user__label" for="username">Username</label>
                <input name="username" class="user__enter" value="username" type="text" readonly />
                <img src="../assets/svg/pencil.png" alt="modif" class="user__modif" />
              </div> -->
              <div class="user__files">
                <input class="user__file" type="file" name="uploaded_file" id="fileToUpload"> 
                <input type="submit" name="submit2">
              </div>
              <div class="user__input">
                <label class="user__label" for="email">Email</label>
                <input
                  name="email"
                  id="email"
                  class="user__enter"
                  value="<?php echo $_SESSION['email']?>"
                  type="email"
                  readonly="readonly"
                />
                <img src="../assets/svg/pencil.png" alt="modif" class="user__modif" />
              </div>
              <div class="user__input">
                <label class="user__label" for="password">Password</label>
                <input
                  name="password"
                  class="user__enter"
                  value="********"
                  type="password"
                  readonly="readonly"
                />
                <img src="../assets/svg/pencil.png" alt="modif" class="user__modif" />
              </div>
              <input type="submit" name="submit">
            </form>
          </div>
        </article>
        <article class="user__setting">
          <div class="user__sub">
            <form method="POST" action="user.php">
              <div class="user__input">
                <label class="user__label" for="username">Username</label>
                <input name="username" class="user__enter" value="test" type="text" readonly />
                <img src="../assets/svg/pencil.png" alt="modif" class="user__modif" />
              </div>
              <div class="user__input">
                <label class="user__label" for="email">Email</label>
                <input name="email" class="user__enter" value="test" type="email" readonly />
                <img src="../assets/svg/pencil.png" alt="modif" class="user__modif" />
              </div>
              <div class="user__input">
                <label class="user__label" for="password">Password</label>
                <input name="password" class="user__enter" value="test" type="password" readonly />
                <img src="../assets/svg/pencil.png" alt="modif" class="user__modif" />
              </div>
            </form>
          </div>
        </article>
      </section>
      <a href="#" class="user__delete">Delete account</a>
      <div class="user__logout">
        <a href="logout.php">log out</a>
        <img src="../assets/svg/logout.svg" alt="logout" />
      </div>
    </section>
    <script type="text/javascript" src="../js/userSettings.js"></script>

    <?php
      } 
      else {
       // header('Location: /index.html')
       printf('dhsksh');
      }
 
 ?>
 
  </body>
</html>
