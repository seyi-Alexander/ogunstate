<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ogun State</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="main.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
  </head>
  <body>

    <header class="header">
      <div class="header__inner">
         <!–– <img class="header__logo" src="images/city.png" alt="iconic view of a cityscape">-->
        <h2 class="header__title">
          Association of Nigeria Nurse Educator
        </h2> <h3  class="header__title" align="center" > Ogun State Chapter</h3>
        <a id="menu" class="header__menu">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M2 6h20v3H2zm0 5h20v3H2zm0 5h20v3H2z"/>
          </svg>
        </a>
      </div>
    </header>

    <nav id="drawer" class="nav">
      <ul class="nav__list">
        <li class="nav__item"><a href="#">News</a></li>
        <li class="nav__item"><a href="#">Events</a></li>
        <li class="nav__item"><a href="#">About us</a></li>
        <li class="nav__item"><a href="#">Blog</a></li>
      </ul>
    </nav>

    <main>
      <section class="content">
        <section class="hero">
          <article class="description">
            <h2>Absolutely astonishing breaking news!</h2>
            <p>Organic raw denim Vice keffiyeh lomo Kickstarter art lomo Kickstarter art four loko. Organic raw denim Vice keffiyeh lomo Kickstarter art lomo Kickstarter art four loko.</p>
          </article>
        </section>

        <section class="news top-news">
          <h2 class="news__title">Top news <a href="#" class="news__more">+ more</a></h2>
          <ul>
            <li class="top-news__item">
              <a href="#">Gastropub distillery Marfa farm-to-table, Etsy Truffaut fingerstache.</a>
            </li>
            <li class="top-news__item">
              <a href="#">Squid lomo Kickstarter art lomo Kickstarter art party cronut scenester.</a>
            </li>
            <li class="top-news__item">
              <a href="#">Organic raw denim lomo Kickstarter art Vice keffiyeh four loko.</a>
            </li>
            <li class="top-news__item">
              <a href="#">Organic raw denim Vice keffiyeh lomo Kickstarter art lomo Kickstarter art four loko.</a>
            </li>
          </ul>
        </section>

        <section class="news recent-news">
          <h2 class="news__title">Latest news <a href="#" class="news__more">+ more</a></h2>
          <ul>
            <li class="snippet">
              <img class="snippet__thumbnail" src="images/dog.jpg" alt="picture of a girl with a large, stuffed dog toy">
              <h3 class="snippet__title"><a href="#">Gastropub distillery Marfa farm-to-table</a></h3>
              <p>Gastropub distillery Marfa farm-to-table, Etsy Truffaut fingerstache.
              Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko. Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko.Vice keffiyeh four loko. Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko.Vice keffiyeh four loko. Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko.
              </p>
            </li>
            <li class="snippet">
              <img class="snippet__thumbnail" src="images/dog.jpg" alt="picture of a girl with a large, stuffed dog toy">
              <h3 class="snippet__title"><a href="#">Organic raw keffiyeh four loko.</a></h3>
              <p>Vice keffiyeh four loko. Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko.Vice keffiyeh four loko. Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice loko.
              </p>
            </li>
            <li class="snippet">
              <img class="snippet__thumbnail" src="images/dog.jpg" alt="picture of a girl with a large, stuffed dog toy">
              <h3 class="snippet__title"><a href="#">Kickstarter art party cronut scenester.</a></h3>
              <p>Gastropub distillery Marfa farm-to-table, Etsy Truffaut fingerstache.
              Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko. Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko.Vice keffiyeh four loko.
              </p>
            </li>
            <li class="snippet">
              <img class="snippet__thumbnail" src="images/dog.jpg" alt="picture of a girl with a large, stuffed dog toy">
              <h3 class="snippet__title"><a href="#">Squid lomo Kickstarter art party cronut </a></h3>
              <p>Gastropub distillery Marfa farm-to-table, Etsy Truffaut fingerstache.
              Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko. Squid lomo Kickstarter art party cronut scenester. Organic raw denim Vice keffiyeh four loko.Vice keffiyeh four loko.
              </p>
            </li>
          </ul>
        </section>
      </section>
      <footer>
        <ul class="nav__list">
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About Us</a></li>
        </ul>
      </footer>
    </main>
    <script>
      /*
       * Open the drawer when the menu ison is clicked.
       */
      var menu = document.querySelector('#menu');
      var main = document.querySelector('main');
      var drawer = document.querySelector('.nav');

      menu.addEventListener('click', function(e) {
        drawer.classList.toggle('open');
        e.stopPropagation();
      });
      main.addEventListener('click', function() {
        drawer.classList.remove('open');
      });

    </script>
  </body>
</html>
