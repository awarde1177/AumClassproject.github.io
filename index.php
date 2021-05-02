<?php
session_start();

if(!isset($_SESSION["stud_id"])){
   header("location: http://localhost/AumClassproject/login/index.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <title>AUM classproject | Home </title>

</head>

<body>

    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-up fa-2x"></i></a>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome <b> <u>  <?php  echo ($_SESSION["stud_id"]);?> </u></b>
 to Auburn University Montgomery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> &puncsp; &puncsp; &puncsp; &puncsp; &puncsp; &puncsp; &puncsp;
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="courseinfo.php">Courseinfo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="personalinfo.php">Personalinfo</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="logout.php">Logout</a>
        </li>
      </ul>

    </div>
  </div>
</nav>
    <!-- <div class="container-fluid">
        <div class="tm-site-header tm-mb-1">
            <div class="tm-site-name-container tm-bg-color-1">
                <h1 class="tm-text-white">AUM </h1>
            </div>
            <div class="tm-nav-container tm-bg-color-8">
                <nav class="tm-nav" id="tm-nav">
                    <ul>
                        <li class="tm-nav-item current ">
                            <a href="index.php" class="tm-nav-link">
                         
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="tm-nav-item ">
                            <a href="courseinfo.php" class="tm-nav-link">
                                <span class="tm-mb-1">.02</span>
                                <span>Courseinfo</span>
                            </a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="personalinfo.php" class="tm-nav-link">
                                <span class="tm-mb-1">.03</span>
                                <span>Personalinfo</span>
                            </a>
                        </li>
                        <li class="tm-nav-item">
                            <a href="logout.php" class="tm-nav-link">
                                <span class="tm-nav-text tm-mb-1">.04</span>
                                <span class="tm-nav-text">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div> -->

<br>
        <section class="tm-mb-1" id="about">
            <div class="tm-row tm-about-row">
                <div class="tm-section-1-l">
                    <img src="img/1.jpg" alt="About image" class="tm-img-responsive">
                </div>
                <article class="tm-section-1-r tm-bg-color-8">
                    <p>Auburn University at Montgomery (AUM) is a public university in Montgomery, Alabama. Established by an act of the Alabama Legislature in 1967, it is governed by the Auburn University Board of Trustees as a member of the Auburn University system. AUM offers more than 90 programs of study leading to bachelor's, master's, specialist, and doctoral degrees. As of 2018, the university enrolled more than 5,200 students</p>
                    
                    
                    <a href="https://www.aum.edu/" target="_blank" class="tm-btn tm-btn-1 tm-link-to-services">More Detail</a>
                </article>
            </div>
        </section>
       

        <section id="contact" class="tm-bg-color-5 tm-mb-3">
            <h2 class="tm-text-white tm-contact-title">Contact Us</h2>
            <div class="tm-bg-color-white tm-contact-main">
                <div class="map-outer">
                    <div class="gmap-canvas">
                        <iframe width="100%" height="400" id="gmap-canvas"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.9543220580363!2d-86.17754998525021!3d32.366770881097736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x888c2bf557b4d51f%3A0x9ee62dc30eba98c0!2s7430%20East%20Dr%2C%20Montgomery%2C%20AL%2036116%2C%20USA!5e0!3m2!1sen!2sin!4v1602197736482!5m2!1sen!2sin"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                    </div>
                </div>
                <div class="contact-form-outer" style="text-align: center; list-style: none; 
                text-decoration: none; ">
                   <a href="index.php"> Home</a> <br> <br>
                   <a href="courseinfo.php">Courseinfo</a> <br> <br>
                   <a href="personalinfo.php"> Personalinfo</a> <br> <br>
                   <a href="logout.php"> Logout</a> <br>
                </div>
                <div class="contact-info-outer">
                    <div class="tm-bg-color-6 contact-info">
                        <p>Connect with Auburn University at Montgomery departmental and interest-based accounts for the latest from campus. <br>
                        <a href="https://www.aum.edu/about-aum/" target="_blank">
                        <b> <u> More Information </u></b></a>
                        </p>

                        <p> <a href="https://www.youtube.com/watch?v=WVz0LEyPhVY" target="_blank"> Take a Virtual Tour Now!</a></p>

                        <p class="tm-mb-0">Call today: (334)244-3000</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="tm-mb-4 text-center tm-social-s">
            <a href="https://www.aum.edu/admissions/contact-admissions/" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
            <a href="https://www.instagram.com/auburnmontgomery/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
            <a href="https://twitter.com/aumontgomery" class="tm-social-link"><i class="fab fa-twitter tm-social-icon"></i></a>
            <a href="https://www.youtube.com/channel/UC9CsTzLAy4pX6zRMFgocBPA" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
        </div>
        <footer class="text-center tm-mb-1">
            <p>Copyright &copy; Abhishek Warde
            
        </footer>
    </div> <!-- .container -->
    <script src="js/jquery.min.js"></script> <!-- https://jquery.com/download/ -->
    <script src="js/imagesloaded.pkgd.min.js"></script> <!-- https://imagesloaded.desandro.com/ -->
    <script src="js/isotope.pkgd.min.js"></script> <!-- https://isotope.metafizzy.co/ -->
    <script src="js/jquery.singlePageNav.min.js"></script> <!-- https://github.com/ChrisWojcik/single-page-nav -->
    <script>

        // Scroll to Top button
        var btn = $('#button');

        $(window).scroll(function () {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function (e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, '300');
        });

        // DOM is ready
        $(function () {
            // Single Page Nav
            $('#tm-nav').singlePageNav({ speed: 600 });

            // Smooth Scroll (https://css-tricks.com/snippets/jquery/smooth-scrolling/)
            $('a[href*="#"]')
                // Remove links that don't actually link to anything
                .not('[href="#"]')
                .not('[href="#0"]')
                .click(function (event) {
                    // On-page links
                    if (
                        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                        &&
                        location.hostname == this.hostname
                    ) {
                        // Figure out element to scroll to
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        // Does a scroll target exist?
                        if (target.length) {
                            // Only prevent default if animation is actually gonna happen
                            event.preventDefault();
                            $('html, body').animate({
                                scrollTop: target.offset().top
                            }, 600, function () {
                                // Callback after animation
                                // Must change focus!
                                var $target = $(target);
                                $target.focus();
                                if ($target.is(":focus")) { // Checking if the target was focused
                                    return false;
                                } else {
                                    $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                                    $target.focus(); // Set focus again
                                };
                            });
                        }
                    }
                });

            /* Isotope Gallery */

            // init isotope
            var $gallery = $(".tm-gallery").isotope({
                itemSelector: ".tm-gallery-item",
                layoutMode: "fitRows"
            });
            // layout Isotope after each image loads
            $gallery.imagesLoaded().progress(function () {
                $gallery.isotope("layout");
            });

            $(".filters-button-group").on("click", "a", function () {
                var filterValue = $(this).attr("data-filter");
                $gallery.isotope({ filter: filterValue });
            });

            $(".tabgroup > div").hide();
            $(".tabgroup > div:first-of-type").show();
            $(".tabs a").click(function (e) {
                e.preventDefault();
                var $this = $(this),
                    tabgroup = "#" + $this.parents(".tabs").data("tabgroup"),
                    others = $this
                        .closest("li")
                        .siblings()
                        .children("a"),
                    target = $this.attr("href");
                others.removeClass("active");
                $this.addClass("active");
            });
        });
    </script>
</body>
</html>