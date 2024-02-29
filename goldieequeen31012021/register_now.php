<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Goldee Queen</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="57x57" href="fav/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="fav/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="fav/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="fav/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="fav/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="fav/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="fav/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="fav/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="fav/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="fav/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="fav/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="fav/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="fav/favicon-16x16.png">
        <link rel="manifest" href="fav/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="fav/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/media.css">
        <script>(function(d, s, id) {
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) return;
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=767036263316976";
         fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    </head>
    <body>
        <section class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Logo"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about-us.php">About Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link active" href="how-to-participate.php">How to Participate</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">Rules</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="faq.php">Faqs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us.php">Contact Us</a>
                            </li>
                            </ul>
                        </div>
                </nav>
            </div>  
        </section><!--header section-->
        <section class="register__now__section">
            <h4>Every queen deserves a crown,</h4>
            <p class="mt-1 mb-5">Get one step closer to getting yours</p>
            <h2>Register Now</h2>
            <div class="d-grid contact-view register__view">
          <div class="map-content-9 register">
            <form action="register_now_insert.php" method="POST" name="" enctype="multipart/form-data"> 
            <div class="twice-two mb-5 radio__butotns">
                <div class="radio__inputs">
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">IAmAGoldieeQueen</label>
                </div>
                <div class="radio__inputs">
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">SheIsAGoldieeQueen</label>
                </div>
            </div>
            <div class="twice-two">
                <input type="text" class="form-control" name="her_highness" id="w3lSubject" placeholder="Her Highness:" required="" autocomplete="off">
                <input type="number" class="form-control" name="majesty_digits" id="w3lSubject" placeholder="Majesty's digits:" required="" autocomplete="off"> 
            </div>
              <div class="twice-two">
                <input type="email" class="form-control" name="majestys_email" id="w3lSubject" placeholder="Majesty's Email" required="" autocomplete="off">
                <input type="text" class="form-control" name="media_link" id="w3lSubject" placeholder="Social Media Link" required="" autocomplete="off">  
            </div>
              <div class="twice-two">
                <input type="text" class="form-control video__link" name="age" id="w3lSubject" placeholder="Sorry for asking her age:" required="" autocomplete="off">  
                <input type="text" class="form-control video__link" name="her_kingdom_city" id="w3lSubject" placeholder="Her kingdom (city):" required="" autocomplete="off">    
            </div>
              <div class="twice-two">
                  <div class="upload__files">
                    <label for="myfile">Upload Photo</label>
                    <input type="file" id="myfile" name="upload_photo">
                  </div>
                  <div class="upload__files">
                    <input type="text" class="form-control video__link" name="video_link" id="w3lSubject" placeholder="Video Link" required="" autocomplete="off">  
                  </div>
            </div>
              <textarea name="her_story" class="form-control" id="w3lMessage" placeholder="Her Story" required="" autocomplete="off"></textarea>
              <button type="submit" class="btn btn-contact float-right">Submit</button>
            </form>
          </div>
        </div>
        </section><!--register__bg-->
        <section class="white__section">

        </section>
        <footer>
            <div class="logo__section">
                <p>An intiative by Goldiee Group</p>
                <img src="img/footer__logo.png" alt="footer logo">
            </div>
            <div class="footer__nav">
                <ul>
                    <li>Copyright 2021 - Goldiee Group |</li>
                    <li>All rights are reserved |</li>
                    <li>Privacy Policy |</li>
                    <li>Terms & Conditions |</li>
                    <li>Site Credits- Digital Latte</li>
                </ul>
            </div>
        </footer>
        <script src="https://apps.elfsight.com/p/platform.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/smoothscroll.js"></script>
    <script src="js/custom.js"></script>

    </body>
</html>