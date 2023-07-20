
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nawnit Stdio Prints | Wedding Invation Order</title>
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Pangolin&display=swap');
  </style>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap');
  </style>

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="wedding.css">
  <link rel="stylesheet" href="assets/css/wedding.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/newaadhar.css">
  <script src="calculate"></script>


</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info me-auto">
        <i class="icofont-envelope"></i> <a href="nawnitstudio@example.com">contact@nawnitstudio.com</a>
        <i class="icofont-phone"></i> 9263282297
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>
  </head>


  <body>
    <!-- ======= Header =======
      <div id="margin-bottom single-product"> -->
    <header id="header" class="fixed-top">

      <div class="container margin_bottom d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html">Nawnit Studio Prints Aadhar<span>.<div class="head_contact">
                Contno-9263282297,6204616951</div></span></a></h1><br>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt=""></a> -->

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="index.html">Home</a></li>
            <li><a href="aboutus.html">About</a></li>
            <li><a href="inner-page.html">Services</a></li>
            </li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav><!-- .nav-menu -->
      </div>
    </header>
    </div>
    <!-- <h1  id="topbar-s" class="no-padding Aadhar-headr hd-centre  "> Aadhar PVC Card Print at 50 Rupee</h1> -->

    </head>





    <!-- ----------single page product detail--------- -->

    <div class="small-container single-product">
      <div class="row">
        <div class="col-2">
          <div>
            <img src="assets\slider\panimages\pan2.png" width="100%" id="ProductImg">


            <div class="small-img-row">
              <div class="small-img-col">
                <img src="assets\slider\panimages\pan1.png" width="100%" class="small-img">
              </div>

              <div class="small-img-col">
                <img src="assets\slider\panimages\pan3.png" width="100%" class="small-img">
              </div>

              <div class="small-img-col">
                <img src="assets\slider\panimages\pan4.png" width="100%" class="small-img">
              </div>

              <div class="small-img-col">
                <img src="assets\slider\panimages\pan2.png" width="100%" class="small-img">
              </div>
            </div>
          </div>
        </div>


        <div class="col-2 ">
          <br>

          <?php 
                 
                 if(isset($_SESSION['status']))
                 {
                   echo $_SESSION['status'];
                   unset($_SESSION['status']);
                 }
                 
                 
                 ?>
                 
          <?php if (isset($_GET['error'])): ?>
          <p>
            <?php echo $_GET['error']; ?>
          </p>
          <?php endif ?>
          <p>Home / Pan Pvc Card</p>
          <h1>Pan Pvc Card Print </h1>
          <h4> Price: 50 &#8377;</h4>

          <a href="https://wa.me/916204616951" class="whatsapp-dir-btn"><i class="fa fa-whatsapp"></i> Direct
            Order</a><br><br>

          <i class="fa fa-star"></i><label>Upload Your Pan File</label><br>

          <div>
            <?php

            $number = rand(1009,9989);


            $emp = "P";
            $random = $emp.$number  ;

           
          ?>




            <form action="submit.php" method="post" enctype="multipart/form-data">
            <input  hidden type="text" id="demo" name="date"></p>

                      <script>
                         const d = new Date();
                         document.getElementById("demo").value = d;
                         </script>


            
              <input hidden type="text" class="form-control" name="printtype" value="Pan PVC Card Print"
                readonly>

              <input hidden type="text" class="form-control" name="no_token" value="<?php echo $random;?>" readonly>


              <span style="color:#ff0000">*</span><label>Name</label>
              <input type="text" class="form-control" name="username" required><br>

              <span style="color:#ff0000">*</span><label for="">Enter Phone Number</label>
              <input type="number" class="form-control" name="image_owner" required>

              <span style="color:#ff0000">*</span><input type="file" name="my_image" class="upload-button" required>

            
            <p class="upload-p">We Request you to send us aadhar pdf file with pass</p>
         
            <input type="submit" name="submit" value="Add To Cart" class="btn-pro" >
              <br>
              <?php if (isset($_GET['error'])): ?>
              <p>
                <?php echo $_GET['error']; ?>
              </p>
              <?php endif ?>
            </form>
          </div>

          <!-- =======================UploaD Option ENd================= -->
          <?php 
                 
                 if(isset($_SESSION['status']))
                 {
                   echo $_SESSION['status'];
                   unset($_SESSION['status']);
                 }
                 
                 
                 ?>
          
          <br>
          
          <!-- <input class="cart-input-button" type="number" value="1"> -->
          <!-- <button type="button" data-toggle="modal" data-target="#exampleModalLong" class="btn-pro">Add to
            cart</button><br><br> -->

          <h3 class="pd-top">Product Detail <i class="fa fa-indent"></i></h3>


          <div class="Font-size-p">
            <li>Size:: 2.13" x 3.38" (54mm x 86mm)</li>
            <li>
              Easy To Carry In Purse
            </li>
            <li>Durable</li>
            <li>Strong Print</li>
            <li>Water Resistence</li>
            <li class="instrucation_box_text">Scratch Free</li>
            <li class="instrucation_box_text">Cheap and in Good Quality</li>

          </div>

        </div>
      </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="small-conatiner">
      <h2 class="title">Featured Products</h2>
      <div class="row">

        <div class="col-4">

          <img src="assets/img/wedding/004.jpg" width="100%">
          <h4>Cardilian Card</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
          </div>
          <p>$50.00</p>
        </div>



        <div class="col-4">

          <img src="assets/img/wedding/003.jpg" width="100%">
          <h4>Cardilian Card</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>




        <div class="col-4">

          <img src="assets/img/wedding/003.jpg" width="100%">
          <h4>Cardilian Card</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
          </div>
          <p>$50.00</p>
        </div>





        <div class="col-4">

          <img src="assets/img/wedding/003.jpg" width="100%">
          <h4>Cardilian Card</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
            <i class="fa fa-star-o"></i>

          </div>
          <p>$50.00</p>
        </div>






      </div>
    </div>


    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
      <!-- Section: Social media -->
      <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-facebook-f"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-twitter"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-google"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-instagram"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-linkedin"></i>
          </a>
          <a href="" class="me-4 text-reset">
            <i class="fa fa-github"></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->

      <!-- Section: Links  -->
      <section class="">
        <div class="container text-center text-md-start mt-5">
          <!-- Grid row -->
          <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <!-- Content -->
              <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Nawnit Studio Prints
              </h6>
              <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Products
              </h6>
              <p>
                <a href="#!" class="text-reset">Aadhar Card</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Pan Card</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Driving License</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Personal ID </a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Useful links
              </h6>
              <p>
                <a href="#!" class="text-reset">Pricing</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Settings</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Orders</a>
              </p>
              <p>
                <a href="#!" class="text-reset">Help</a>
              </p>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
              <!-- Links -->
              <h6 class="text-uppercase fw-bold mb-4">
                Contact
              </h6>
              <p><i class="fas fa-home me-3"></i> Umedanda,Burmu,Ranchi jharkhand<br>
                Pin-835214</p>
              <p>
                <i class="fas fa-envelope me-3"></i>
                info@nawnitstudio.com
              </p>
              <p><i class="fas fa-phone me-3"></i> 91+ 9263282297</p>
              <p><i class="fas fa-print me-3"></i> 91+ 6204616951/p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <!-- <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Nawnit Studio</a>
      </div> -->
      <!-- Copyright -->
    </footer>
    <!-- Footer -->



    <!-- ---------------js for product gallery------- -->
    <script>
      var ProductImg = document.getElementById("ProductImg");
      var SmallImg = document.getElementsByClassName("small-img");


      SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;

      }


      SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;

      }

      SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;

      }


      SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;

      }


      SmallImg[4].onclick = function () {
        ProductImg.src = SmallImg[4].src;

      }





    </script>












  </body>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</html>