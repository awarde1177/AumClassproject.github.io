<?php 

session_start();
if(!isset($_SESSION["stud_id"])){
   header("location: http://localhost/AumClassproject/login/index.php");
}

$stid = $_SESSION["stud_id"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="fontawesome/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet" />
    <title>AUM classproject | Home </title>

    <style>
   table, td, th {  
   border: 1px solid #ddd;
   text-align: left;
   }

   table {
   border-collapse: collapse;
   width: 90%;
   }

   th, td {
   padding: 15px;
   }
   </style>


</head>

<body>
    <!-- Back to top button -->
    <a id="button"><i class="fas fa-angle-up fa-2x"></i></a>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome to Auburn University Montgomery</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> &puncsp; &puncsp; &puncsp; &puncsp; &puncsp; &puncsp; &puncsp;
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="courseinfo.php">Courseinfo</a>
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
<br>
        <section class="tm-mb-1" id="about">
            <div class="tm-row tm-about-row">
                <div class="tm-section-1-l">
                 <!-- Search course here -->

                 <!-- end -->
                </div>

                
                <div class="cinfogrid" style="height: auto; margin-right:50%;"> <br>
      <h2 style="text-align: center;">Available Courses</h2> 
            
            
               <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
               <input type="text" name="search" placeholder="Search Course id, name, or instuctor...">
               <br>
               <input type="submit" name="search_btn" value="Search"  >
               <br> 
               <br>
               <br>
               <br>
               </form>
               <?php 
            if(isset($_POST['search_btn'])){
            $conn3 = mysqli_connect("localhost","root","","student") or  die("Connection Failed");

            $search = $_POST['search']
            ;
            $sql3 = "SELECT * FROM course_info   WHERE c_id = '{$search}' or c_name = '{$search}'or
            c_semester = '{$search}' or c_instructor = '{$search}'  ";

            $result3 = mysqli_query ($conn3, $sql3) or die("Query Unsuccessful.");
         
            if(mysqli_num_rows($result3)>0){
            while($row=mysqli_fetch_assoc($result3)){    
         ?>
            <br> <br>

           
         <form action="enrollcourse.php" method="post">
            <h3>Search Result For: <i> <?php echo $search;  ?> </i></h3>

            <table>
            <tr>
               <th>Student ID</th>
               <th>Course ID</th>
               <th>Course Name</th>
               <th>Semester</th>
               <th>Instructor</th>
               <th>Classroomr</th>
               <th>Time</th>
            </tr>
            <tr>
               <td><?php  echo ($_SESSION["stud_id"]);?></td>
               <td><?php echo $row['c_id'];?></td>
               <td><?php echo $row['c_name'];?></td>
               <td><?php echo $row['c_semester'];?></td>
               <td><?php echo $row['c_instructor'];?></td>
               <td><?php echo $row['c_classroom'];?></td>
               <td><?php echo $row['c_time'];?></td>
            </tr> 
            </table>  

          <br> <br> <br> <br> <br> 

        
         </form>
            <?php
            }
         }else {
            
            echo "Error: No Result Found";
         } 
         
         }
            ?>

<!-- ------------------------------------------------------------------------ -->



<form action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 

<label>Select Course:</label>
<select name="course" required>
    <option value="" selected disabled>Choose Course</option>
    <?php 
    $conn = mysqli_connect("localhost","root","","student") or  die("Connection Failed");
    $sql = "SELECT * FROM course_info";
    $result = mysqli_query ($conn, $sql) or die("Query Unsuccessful.");
    while($row = mysqli_fetch_assoc($result)) 
    {              
    ?>
    
    <option ><?php echo $row['c_name']; ?></option>
    
    <?php } ?>
</select>
<br> <br> 

<input type="submit" name="showbtn" value="Show" > <br> <br>  
<br>
<br>
</form>

<?php 
if(isset($_POST['showbtn'])){
$conn1 = mysqli_connect("localhost","root","","student") or  die("Connection Failed");

$co_name = $_POST['course'];


$sql1 = "SELECT * FROM course_info   WHERE c_name = '{$co_name}'  ";


$result1 = mysqli_query ($conn1, $sql1) or die("Query Unsuccessful.");

if(mysqli_num_rows($result1)>0){
while($row=mysqli_fetch_assoc($result1)){    
?>

<form action="enrollcourse.php" method="post">

<label> Student ID</label>
<input type="text" name="stuid" value="<?php  echo ($_SESSION["stud_id"]);?>" readonly> <br> <br>

<label> Course ID</label>
<input type="text" name="coid" value="<?php echo $row['c_id'];?>" readonly> <br> <br>

<label> Course Name</label>
<input type="text" name="coname" value="<?php echo $row['c_name'];?>" readonly><br> <br>

<label> Semester</label>
<input type="text" name="cosem" value="<?php echo $row['c_semester'];?>" readonly><br> <br>

<label> Instructor</label>
<input type="text" name="coinst" value="<?php echo $row['c_instructor'];?>" readonly><br> <br>

<label> Classroom</label>
<input type="text" name="classroom" value="<?php echo $row['c_classroom'];?>" readonly><br> <br>

<label> Time</label>
<input type="text" name="cotime" value="<?php echo $row['c_time'];?>" readonly><br> <br>

<input type="submit"  value="Enroll"> <br> <br> <br> <br> <br>
<br>
<br>

</form>

<?php
}}}
?>
                </div>

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