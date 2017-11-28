<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Mon portfolio en ligne </title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- header -->
    <header class="container-fluid header">
      <div class="container">
        <a href="#" class="logo"> Mon portfolio</a>
        <nav class="menu">
          <a href="#"> Accueil </a>
          <a href="#about"> A propos </a>
          <a href="#portfolio"> Portfolio </a>
          <a href="#contact"> Contact </a>
        </nav>
      </div>
    </header>
    <!-- end header -->

    <!-- banière -->
    <section class="container-fluid banner">
      <div class="ban">
        <img src="img/ban.jpg" alt="bannière du site">
      </div>
      <div class="inner-banner">
        <h1> Bienvenue sur mon portfolio </h1>
        <button class="btn btn-custom" > Contacter moi ! </button>
      </div>
    </section>

    <!-- A propos -->
    <section class="container-fluid about">
      <div class="container">
        <div class="row">
          <h2 id="about"> A propos de moi </h2>
          <hr class="separator">
          <article class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
            <h2> Etudes </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </article>
          <article class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
            <h2> Expériences </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </article>
          <article class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
            <h2> Hobbies </h2>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
          </article>
        </div>
      </div>
    </section>
    <!-- end A propos -->
    <!-- portfolio -->
    <section class="container-fluid portfolio">
      <div class="container">
        <h2 id="portfolio"> Mon portfolio </h2>
        <hr class="separator">
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
        <article class="col-md-3 col-lg-3 col-xs-12 col-sm-12 item-folio">

        </article>
      </div>
    </section>
    <!-- end portfolio -->
    <!-- footer -->
    <footer class="container-fluid footer">
      <div class="container">
        <h2 id="contact"> Contactez - moi </h2>
        <hr class="separator">
        <form class="well span8">
            <div class="row">
                <div class="span3">
                    <label>First Name</label> <input class="span3" placeholder=
                    "Your First Name" type="text"> <label>Last Name</label>
                    <input class="span3" placeholder="Your Last Name" type="text">
                    <label>Email Address</label> <input class="span3" placeholder=
                    "Your email address" type="text"> <label>Subject</label>
                    <select class="span3" id="subject" name="subject">
                        <option selected value="na">
                            Choose One:
                        </option>

                        <option value="service">
                            General Customer Service
                        </option>

                        <option value="suggestions">
                            Suggestions
                        </option>

                        <option value="product">
                            Product Support
                        </option>
                    </select>
                </div>

                <div class="span5">
                    <label>Message</label>
                    <textarea class="input-xlarge span5" id="message" name="message"
                    rows="10">
                  </textarea>
                </div><button class="btn btn-primary pull-right" type=
                "submit">Send</button>
            </div>
        </form>
      </div>
    </footer>
  </body>
</html>
