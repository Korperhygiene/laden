<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta
          name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no"
  />
  <link rel="shortcut icon" href="img/fav.png"/>
  <meta charset="UTF-8"/>

  

  <title>Kontakte</title>

  <link
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Playfair+Display:700,700i"
          rel="stylesheet"
  />
  <!--
          CSS
          ============================================= -->
  <link rel="stylesheet" href="css/linearicons.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/magnific-popup.css"/>
  <link rel="stylesheet" href="css/nice-select.css"/>
  <link rel="stylesheet" href="css/owl.carousel.css"/>
  <link rel="stylesheet" href="css/bootstrap.css"/>
  <link rel="stylesheet" href="css/bootstrap-datepicker.css"/>
  <link rel="stylesheet" href="css/themify-icons.css"/>
  <link rel="stylesheet" href="css/main.css"/>
</head>

<body>

<header class="header-area">
  <div class="container">
    <div class="header-wrap">
      <div
              class="header-top d-flex justify-content-center align-items-lg-center navbar-expand-lg"
      >
        <div class="menu-left">
          <a class="active" href="index.php">Startseite</a>
          <a class="active" href="blog.php">Artikel</a>
        </div>
        <div class="col-4 text-lg-center mt-2 mt-lg-0">
              <span class="logo-outer">
                <span class="logo-inner">
                  <a href="index.php"
                  >
                    Die Erhaltung der Gesundheit
                  </a>
                </span>
              </span>
        </div>
        <nav class="navbar navbar-expand-lg justify-content-end">

          <button
                  class="navbar-toggler"
                  type="button"
                  data-toggle="collapse"
                  data-target="#collapsibleNavbar"
          >
            <span class="lnr lnr-menu"></span>
          </button>


          <div
                  class="collapse navbar-collapse menu-right"
                  id="collapsibleNavbar"
          >
            <ul class="navbar-nav justify-content-center w-100">
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Kontakte</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="terms.php">Die Allgemeinen Geschäftsbedingungen</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</header>



    <section class="banner-area relative" style="background-image: url(./assets/images/timothy-dykes-yd4ubmuntg0-unsplash.jpg)">
      <div class="overlay overlay-bg"></div>
      <div class="banner-content text-center">
        <h1>Kontakte</h1>
      </div>
    </section>



    <section class="contact-page-area section-gap">
      <div class="container">
        <div class="row">
          <div class="map-wrap" id="contactMap"></div>
          <div class="col-lg-4 d-flex flex-column address-wrap">
            <div class="single-contact-address d-flex flex-row">
              <div class="icon"><span class="lnr lnr-home"></span></div>
              <div class="contact-details">
                <h5>Wiesnerweg 622
45958 Melle</h5>
                <p>Adresse</p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon">
                <span class="lnr lnr-phone-handset"></span>
              </div>
              <div class="contact-details">
                <h5>+7307349401098</h5>
                <p>Telefonnummer</p>
              </div>
            </div>
            <div class="single-contact-address d-flex flex-row">
              <div class="icon"><span class="lnr lnr-envelope"></span></div>
              <div class="contact-details">
                <h5>rvoss@singer.com</h5>
                <p>Email</p>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <form
              class="form-area contact-form text-right"
              id="myForm"
              action="thanks.php"
              method="post"
            >
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input
                    name="name"
                    placeholder="Name"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Name'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                  />

                  <input
                    name="email"
                    placeholder="Email"
                    pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Email'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="email"
                  />

                  <input
                    name="phone"
                    placeholder="Telefonnummer"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Telefonnummer'"
                    class="common-input mb-20 form-control"
                    required=""
                    type="text"
                  />
                </div>
                <div class="col-lg-6 form-group">
                  <textarea
                    class="common-textarea form-control"
                    name="message"
                    placeholder="Der Text des Kommentars"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Der Text des Kommentars'"
                    required=""
                  ></textarea>
                </div>
                <div class="col-lg-12">
                  <label class="terms-field">
                    <input type="checkbox" name="terms" value="check" required=""/>
                    <a href="terms.php" target="_blank">
                      Habe ich gelesen und erkläre mich damit einverstanden
                    </a>
                  </label>
                  <div class="alert-msg" style="text-align: left;"></div>
                  <button
                    class="primary-btn text-uppercase"
                    style="float: right;"
                  >
                    Senden
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>



<footer class="footer-area section-gap">
  <div class="container">
    <div class="row">
      <div class="col-lg-3  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Kontakte</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="terms.php">Die Allgemeinen Geschäftsbedingungen</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="policy.php">Datenschutzerklärung</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4  col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>Versand</h6>
          <div class="" id="mc_embed_signup">

            <form target="_blank" novalidate="true"
                  action="thanks.php"
                  method="get" class="form-inline">

              <div class="d-flex flex-row">

                <input class="form-control" name="EMAIL" placeholder="Email"
                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email '"
                       required="" type="email">


                <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right"
                                                             aria-hidden="true"></i></button>
                <div style="position: absolute; left: -5000px;">
                  <input name="" tabindex="-1" value=""
                         type="text">
                </div>

                <!-- <div class="col-lg-4 col-md-4">
                      <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                    </div>  -->
              </div>
              <div class="info"></div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="single-footer-widget">
          <h6>abonnieren</h6>
          <div class="footer-social d-flex align-items-center">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-dribbble"></i></a>
            <a href=""><i class="fa fa-behance"></i></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
      <p class="footer-text m-0">
        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
        All rights reserved</p>
    </div>
  </div>
</footer>


<div class='cookie-banner'>
  <p>
    Die Webseite nutzt cookie-Dateien. Sie ermöglichen, Sie zu erkennen und erhalten Informationen zu Ihren Erfahrungen.Durch die weitere Nutzung der Website, ich bin einverstanden mit der Verwendung von Cookies Inhaber der Website in übereinstimmung mit  <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Cookie-Politik</a>
  </p>
  <button class='close-cookie'>&times;</button>
</div>
<script>
  window.onload = function() {
    $('.close-cookie').click(function () {
      $('.cookie-banner').fadeOut();
    })
  }
</script>

<script>
  let elems = document.querySelectorAll('.server-name');
  elems.forEach((elem) => {
    elem.innerHTML = window.location.hostname
  })
</script>

    <script src="js/vendor/jquery-2.2.4.min.js"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
      integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
      crossorigin="anonymous"
    ></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.tabs.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script
      type="text/javascript"
      src="http://maps.google.com/maps/api/js"
    ></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
