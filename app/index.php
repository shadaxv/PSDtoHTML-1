<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <title>Rekrutacyjne - Aleksander Niedźwiedź</title>
  <meta name="description" content="Zadanie rekrutacyjne Chop-Chop - zakodowanie prostej strony">
  <meta name="author" content="Aleksander Niedźwiedź">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--build:css css/styles.min.css-->
  <link rel="stylesheet" href="css/fontello.css">
  <link rel="stylesheet" href="css/styles.css">
  <!--endbuild-->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

</head>

<body>

  <?php
    if(isset($_GET['zmienTekst']) && !empty($_GET['zmienTekst'])){
      $tekst = $_GET['zmienTekst'];
    } elseif(isset($_GET['zmienTekst']) && empty($_GET['zmienTekst'])) {
      $tekst = "Zmieniony napis.";
    }
  ?>

  <header>
    <nav>
      <ul class="nav">
        <li class="nav__item--selected">
          <a href="#">Home</a>
        </li>
        <li class="nav__item">
          <a href="#">Products</a>
        </li>
        <li class="nav__item--logo">
          <a href="#" style="height: 0px; width: 0px;">
            <img src="images/logo.png" alt="Logo">
          </a>
        </li>
        <li class="nav__item">
          <a href="#">About us</a>
        </li>
        <li class="nav__item">
          <a href="#">Contact</a>
        </li>
        <li class="responsive-button">
          <a>&#9776;</a>
        </li>
      </ul>
    </nav>

    <h1 class="page-header" <?php if(isset($_GET['zmienKolor'])){ echo 'style="color: #ee8a55"';}?> ><?php if(isset($tekst)) { echo $tekst; } else { echo "This is just a sample page"; }?></h1>

    <div style="padding: 1px;"><button class="btn">push the button</button></div>
  </header>

  <section class="articles-section">
    <article class="article">
      <h3 class="article__header">A heading title</h3>
      <figure class="article__figure">
        <img class="figure__image" src="images/article-image.png" alt="">
        <figcaption class="figure__caption">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
        </figcaption>
      </figure>
      <p class="article__content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis
        quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
      </p>
      <a class="article__extend" id="readMore1">— read more</a>
      <div class="fixer"></div>
    </article>
    <article class="article">
      <h3 class="article__header">A much longer heading title</h3>
      <figure class="article__figure">
        <img class="figure__image" src="images/article-image.png" alt="">
        <figcaption class="figure__caption">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
        </figcaption>
      </figure>
      <p class="article__content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget.
      </p>
      <a class="article__extend" id="readMore2">— read more</a>
      <div class="fixer"></div>
    </article>
    <article class="article">
      <h3 class="article__header">A heading title</h3>
      <figure class="article__figure">
        <img class="figure__image" src="images/article-image.png" alt="">
        <figcaption class="figure__caption">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec quis felis fermentum, dictum odio ut.
        </figcaption>
      </figure>
      <p class="article__content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce eget ex nulla. Integer ullamcorper nibh lorem, ut porttitor mi sagittis eget. Aenean malesuada mattis justo, sed efficitur nisl fringilla eget. Integer a mi quis lectus vulputate tempus quis
        quis dui. Mauris suscipit euismod urna, eget feugiat tellus imperdiet vitae. Vestibulum.
      </p>
      <a class="article__extend" id="readMore3">— read more</a>
      <div class="fixer"></div>
    </article>
  </section>

  <section class="contact">
    <h2 class="contact__header">Contact us</h2>
    <form class="contact__form" id="form" action="post.php" method="post">
      <div class="form-fixer">
        <input class="form__input" placeholder="name" type="text" name="name">
        <input class="form__input" placeholder="e-mail" type="email" name="e-mail">
        <input class="form__input" placeholder="phone" type="tel" name="phone">
        <textarea class="form__input--big" placeholder="your message" name="message"></textarea>
      </div>
      <button class="form__button" type="submit">send message</button>
    </form>
  </section>

  <button class="back-button">back to top</button>

  <footer class="footer">
    <div class="footer-fixer">
      <nav>
        <ul class="footer__nav">
          <li class="footer__item">
            <a href="#">— home</a>
          </li>
          <li class="footer__item">
            <a href="#">— products</a>
          </li>
          <li class="footer__item">
            <a href="#">— about us</a>
          </li>
          <li class="footer__item">
            <a href="#">— contact</a>
          </li>
        </ul>
      </nav>

      <div class="social__buttons">
        <a href="http://twitter.com" target="_blank"><span class="icon-twitter-circled" aria-hidden="true"></span></a>
        <a href="http://facebook.com" target="_blank"><span class="icon-facebook-circled" aria-hidden="true"></span></a>
      </div>

      <small class="copyright">
          Copyright &copy; 2010 Sample & Pack, Inc.
    </small>
    </div>
  </footer>

  <!--build:js js/main.min.js -->
  <script src="scripts/scripts.js">
  </script>
  <!-- endbuild -->

</body>

</html>
