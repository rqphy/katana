<?php 
 $dbh = new PDO('mysql:dbname=katana;host=127.0.0.1', 'root', '');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Katana - Home</title>
    <link rel="stylesheet" href="../scss/styles.scss" />
    <link rel="stylesheet" href="../css/styles.css" />
  </head>


  <?php 
  session_start();
    
      if(isset($_SESSION['email'])) {
     
 ?>
  <body class="homeBody">

  <?php 
   $query = $dbh->prepare('SELECT picture FROM member WHERE email=:email');
  //  $query->bindValue(":email", $_SESSION['email']);
   $query->execute(array(
     "email"=>$_SESSION['email'],
   ));
   $data = $query->fetch();
  $picture= $data['picture'];
?>

 
    <nav class="header">
      <div class="header__elements">
        <ul class="header__element">
          <li class="element__logo">katana</li>
        </ul>
        <ul class="header__element">
          <li> <a href="home.php" class="active">HOME</a></li>
          <li> <a href="anims.php">ANIMES</a></li>
          <li> <a href="movies.php">ANIMATED FILM</a></li>
          <li> <a href="#">FAVORITES</a></li>
        </ul>
        <ul class="header__element">
          <li><img class="header__search"src="../assets/search.svg" alt="IconSearch" /></li>
          <li> <a href="user.php"><img class="profil" src='../assets/uploads/<?= $picture ?>' ></a></li>
        </ul>
      </div>
    </nav>
    <section class="heroMobile">
      <h1 class="heroMobile__title">Katana</h1>
      <svg
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24"
        width="24"
        height="24"
        class="heroMobile__search"
      >
        <path fill="none" d="M0 0h24v24H0z" />
        <path
          d="M18.031 16.617l4.283 4.282-1.415 1.415-4.282-4.283A8.96 8.96 0 0 1 11 20c-4.968 0-9-4.032-9-9s4.032-9 9-9 9 4.032 9 9a8.96 8.96 0 0 1-1.969 5.617zm-2.006-.742A6.977 6.977 0 0 0 18 11c0-3.868-3.133-7-7-7-3.868 0-7 3.132-7 7 0 3.867 3.132 7 7 7a6.977 6.977 0 0 0 4.875-1.975l.15-.15z"
          fill="rgba(246,246,246,1)"
        />
      </svg>
      <div class="heroMobile__container">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          width="24"
          height="24"
          class="heroMobile__icon"
        >
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 22l-9.192-9.192c-2.18-2.568-2.066-6.42.353-8.84A6.5 6.5 0 0 1 12 3.64a6.5 6.5 0 0 1 9.179 9.154L12 22zm7.662-10.509a4.5 4.5 0 0 0-6.355-6.337L12 6.282l-1.307-1.128a4.5 4.5 0 0 0-6.355 6.337l.114.132L12 19.172l7.548-7.549.114-.132z"
            fill="rgba(246,246,246,1)"
          />
        </svg>
        <a href="player.html"><div class="heroMobile__playbutton"></div></a>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          width="24"
          height="24"
          class="heroMobile__icon"
        >
          <path fill="none" d="M0 0h24v24H0z" />
          <path
            d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zM11 7h2v2h-2V7zm0 4h2v6h-2v-6z"
            fill="rgba(246,246,246,1)"
          />
        </svg>
      </div>
    </section>
    <section class="heroMedium">
      <article class="heroMedium__container">
      <a href="player.html"><div class="heroMedium__playbutton"></div></a>
        <img src="../assets/herogif.gif" class="heroMedium__video">
      </article>
      <article class="heroMedium__content">
        <h3 class="heroMedium__type">Anime - Fantasy</h3>
        <h2 class="heroMedium__title">BLACK ROCK SHOOTER</h2>
        <div class="heroMedium__infos">
          <p class="heroMedium__number">Episodes : 8</p>
          <p class="heroMedium__favourite">Already in my favourites</p>
        </div>
        <p class="heroMedium__description">
          While each piece of media takes place in its own universe, they each
          focus around Black Rock Shooter, a mysterious black haired girl who
          possesses a burning blue eye.
        </p>
      </article>
      <div class="heroMedium__caroussel">
        <div class="heroMedium__arrow heroMedium__arrow--left"><</div>
        <div class="heroMedium__carousselElements">
          <article class="heroMedium__episodes">
            <div class="heroMedium__episode">
              <h3 class="heroMedium__info">E 01</h3>
              <img class="heroMedium__image" src="../assets/cover/brs_01.png" alt="" class="heroMedium__image">

            </div>
            <div class="heroMedium__episode">
              <h3 class="heroMedium__info">E 02</h3>
              <img src="../assets/cover/brs_02.png" alt="" class="heroMedium__image">

            </div>
            <div class="heroMedium__episode">
              <h3 class="heroMedium__info">E 03</h3>
              <img src="../assets/cover/brs_03.png" alt="" class="heroMedium__image">

            </div>
            <div class="heroMedium__episode">
              <h3 class="heroMedium__info">E 04</h3>
              <img src="../assets/cover/brs_04.png" alt="" class="heroMedium__image">

            </div>
            <div class="heroMedium__episode">
              <h3 class="heroMedium__info">E 05</h3>
              <img src="../assets/cover/brs_05.png" alt="" class="heroMedium__image">

            </div>
            <div class="heroMedium__episode">
              <h3 class="heroMedium__info">E 06</h3>
              <img src="../assets/cover/brs_01.png" alt="" class="heroMedium__image">

            </div>
          </article>
        </div>
        <div class="heroMedium__arrow heroMedium__arrow--right">></div>
      </div>
    </section>
    <nav class="headerMobile">
      <ul class="headerMobile__elements">
        <li class="headerMobile__element">
          <img src="../assets/home-run.svg" alt="HomeSvgIcon" />
          <a class="active" href="home.php">Home</a>
        </li>
        <li class="headerMobile__element">
          <img src="../assets/book.svg" alt="HomeSvgIcon" />
          <a href="anims.php">Anime</a>
        </li>
        <li class="headerMobile__element">
          <img src="../assets/heart.svg" alt="HomeSvgIcon" />
          <a href="#">Favorite</a>
        </li>
        <li class="headerMobile__element">
          <img src="../assets/user.svg" alt="HomeSvgIcon" />
          <a href="user.php">Account</a>
        </li>
      </ul>
    </nav>

    <section class="videosContainer videosContainer--history">
      <h1 class="videosContainer__title">MY HISTORY</h1>
      <div class="videosContainer__arrow videosContainer__arrow--left"><</div>
      <div class="videosContainer__elements">
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <img src="../assets/svg/heart_outline.svg" alt="heartOutline" />

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03E25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/erased.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <img src="../assets/svg/heart_outline.svg" alt="heartOutline" />

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Erased</p>
              <p class="videosContainer__season">S03E25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/wakfu.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <img src="../assets/svg/heart_outline.svg" alt="heartOutline" />

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Wakfu</p>
              <p class="videosContainer__season">S12E08</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/91days.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">91Days</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/acr.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Assassination Class..</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/ahurinosoma.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Ahuri no soma</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/baki.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Baki</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
      </div>
      <div class="videosContainer__arrow videosContainer__arrow--right">></div>
    </section>

    <section class="videosContainer">
      <h1 class="videosContainer__title">TOP ANIME</h1>
      <div class="videosContainer__elements">
        <div class="videosContainer__element">
          <img
            src="../assets/cover/jojo.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Jojo's</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/fairytail.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Fairy Tail</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/onepiece.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">One Piece</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/naruto.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Naruto</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/deathnote.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Death Note</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="videosContainer">
      <h1 class="videosContainer__title">AJOUTS RECENTS</h1>
      <div class="videosContainer__elements">
        <div class="videosContainer__element">
          <img
            src="../assets/cover/aceofdiamond.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Ace of diamond</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/bakumatsu.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Bakumatsu</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/blackcover.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Black Cover</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/codegeass.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Code geass</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/drstone.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Dr Stone</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/gambling.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Gambling scho..</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/parasyte.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Parasyte</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/psychopass.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Psychopass</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="videosContainer">
      <h1 class="videosContainer__title">TOP ANIME</h1>
      <div class="videosContainer__elements">
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/hxh.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Hunter x Hunt..</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/sao.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Sword art o..</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/yourlieinapril.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Your lie in ap..</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/yurionice.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Yuri on ice</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
        <div class="videosContainer__element">
          <img
            src="../assets/cover/foodwars.png"
            alt=""
            class="videosContainer__cover"
          />
          <div class="videosContainer__description">
            <svg
              width="23"
              height="21"
              viewBox="0 0 23 21"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              class="videosContainer__fav"
            >
              <path
                d="M16.5448 1.00002H16.5425C15.7156 0.998072 14.8998 1.18477 14.1591 1.54497L13.7218 0.645662L14.1591 1.54497C13.4184 1.90515 12.7733 2.42878 12.2733 3.07405L11.4828 4.09428L10.6923 3.07402C10.1923 2.42863 9.54706 1.90493 8.80624 1.54475C8.06538 1.18455 7.24952 0.997924 6.42248 1.00002L6.41995 1.00002C3.43533 1.00002 1.0116 3.40498 1.00006 6.33759L16.5448 1.00002ZM16.5448 1.00002C19.5304 1.00002 21.9543 3.40508 21.9662 6.33759C21.978 9.70909 20.3594 11.6808 18.8887 13.4512L18.8878 13.4523L18.5707 13.8351L18.5681 13.8381C17.7745 14.804 16.0685 16.2298 14.4498 17.4841C13.1003 18.5298 11.8857 19.4003 11.4833 19.6861C11.0808 19.4003 9.86621 18.5298 8.51671 17.4841C6.89803 16.2298 5.19201 14.804 4.39837 13.8381L4.39838 13.8381L4.39555 13.8347L4.07815 13.4519L4.07748 13.4511C2.60665 11.6809 0.988314 9.70925 1.00006 6.33794L16.5448 1.00002ZM19.3408 14.473L19.6579 14.0902L19.3408 14.473Z"
                stroke="#F6F6F6"
                stroke-width="2"
              />
            </svg>

            <div class="videosContainer__infos">
              <p class="videosContainer__name">Food Wars</p>
              <p class="videosContainer__season">S03EP25</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script type="text/javascript" src="../js/caroussel.js"></script>
 <?php
      } 
      else {
        header('Location: /index.html');
      }
 
 ?>
  
    
  </body>
</html>
