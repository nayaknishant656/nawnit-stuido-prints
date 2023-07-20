<?php session_start(); ?>

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
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Pangolin&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../wedding.css">
  <link rel="stylesheet" href="../assets/css/wedding.css">
  <link rel="stylesheet" href="../assets/css/footer.css">
  <link rel="stylesheet" href="../assets/css/newaadhar.css">
  <script src="calculate"></script>
  <!-- <link rel="stylesheet" href="assets/css/stylee.css"> -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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

  <!-- ======= Header ======= -->
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

  <body>

    <div class=" top-margin-mobile single-product">
      <div class="b-head">
        <h3>Shipping and Billing Form </h3>
      </div>
      <div class="container">
        <div class="row-25">
          <section>


          
              <div class="forms">
              <div class="forms">
                <form method="POST" action="submit2.php">

                      <?php if(isset($_SESSION['success'])){echo '<span style="color:rgb(26, 196, 4);text-align:center;,font-weight: bold;,background-color: burlywood;"><h5>Your Aadhar File Successfully Uploaded.</h5></span>'; }else{ echo '<span style="color:	#FF0000;text-align:center;,font-weight: bold;"><h3>Error<br>Please,Upload Your Aadhar File First!</h3></span>'; }?><br>
                      <?php if(isset($_SESSION['uploadmessage'])){echo '<span style="color:rgb(26, 196, 4);text-align:center;,font-weight: bold;,background-color: burlywood;"><h5>Your Shipping Details Successfully Uploaded.</h5></span><br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" >Proceed To Checkout</button>';}unset($_SESSION['uploadmessage']);?><br>
                        <?php if (isset($_GET['error'])): ?>
              <p>
                <?php echo $_GET['error']; ?>
              </p>
              <?php endif ?>

                      <input type="text" hidden name="datee" value="<?php echo $_SESSION['date'];?>">
                      <span style="color:#ff0000">*</span><label class="forms_text" for="Type"><b>Select Print type</b></label>
                      <input type="text" class="form-control" name="printtype" readonly value="<?php  if(isset($_SESSION['printtype'])){echo $_SESSION['printtype']; }?>">
                      
                      <span style="color:#ff0000">*</span></i><label>Token Number</label>
                      <input type="text" name="tokennumber" class="form-control" readonly
                        value=" <?php if(isset($_SESSION['no_tokenn'])){echo $_SESSION['no_tokenn'];  }?>"><br>

                      <span style="color:#ff0000">*</span></i><label for="name"><b>Name</b></label>
                      <input class="form-control" type="text" name="username"
                        value="<?php if(isset($_SESSION['usernamee'])){echo $_SESSION['usernamee'];  }?>"  required><br>
                    
                      <span style="color:#ff0000">*</span><label class="forms_text" for="Phone number"><b>PhoneNumber</b></label>
                      <input class="form-control" type="text" name="cusnumber" required value="<?php if(isset($_SESSION['image_ownerr'])){echo $_SESSION['image_ownerr']; } else { echo '';} ?>" required><br>

                      <span style="color:#ff0000">*</span><label class="forms_text" for="Phone number"><b>Email</b></label>
                      <input class="form-control" type="text" name="cusemail"  placeholder="Enter Your Email" required  required><br>

                        
                      <span style="color:#ff0000">*</span><label class="forms_text" for="state"><b>Select state</b></label>
                      <select name="userstate" class="form-control" id="state" class="form-control" required>
                        <option value="">Select your State</option> 
                        <option value="Jharkhand">Jharkhand</option> 
                      </select><br>

                      <span style="color:#ff0000">*</span> <label for="state"><b>Select District</b></label>
                      <select name="userdistrict" id="District" class="form-control">
                        <option value="">Select your District </option>
                        <option value="Ranchi">Ranchi</option>
                        <option value="Garhwa">Garhwa</option>
                        <option value="Palamu">Palamu</option>
                        <option value="Latehar.">Latehar</option>
                        <option value="Chatra ">Chatra</option>
                        <option value="Hazaribagh">Hazaribagh</option>
                        <option value="Koderma">Koderma</option>
                        <option value="Giridih">Giridih</option>
                        <option value=" Ramgarh">Ramgarh</option>
                        <option value="Bokaro">Bokaro</option>
                        <option value="Dhanbad">Dhanbad</option>
                        <option value="Gumla">Gumla</option>
                        <option value="Lohardaga">Lohardaga</option>
                        <option value="Simdega">Simdega</option>
                        <option value="Khunti">Khunti</option>
                        <option value=" WestSinghbhum">WestSinghbhum</option>
                        <option value="Saraikela Kharsawan">Saraikela Kharsawan</option>
                        <option value="East Singhbhum">East Singhbhum</option>
                        <option value="Jamtara">Jamtara</option>
                        <option value="Deoghar">Deoghar</option>
                        <option value="Dumka">Dumka</option>
                        <option value="Pakur">Pakur</option>
                        <option value="Godda">Godda</option>
                        <option value="Sahebganj">Sahebganj</option>
                      </select><br>

                      <span style="color:#ff0000">*</span><label class="forms_text"
                        for="email"><b>Delivery Address</b></label><br>
                      <textarea rows="4" cols="45" name="useraddress" type="text" placeholder="Enter Full address">
                       </textarea><br>

                      <span style="color:#ff0000">*</span><label class="forms_text" for="pincode"><b>Enter
                          Pincode</b></label>
                      <input class="form-control" type="userpincode" placeholder="Enter Area Pincode" name="userpincode"
                        required><br>

                      
                        
                     <input class="Submit_button" type="submit" name="submit" value="Upload Details" ><br><br>
                     <?php if(isset($_SESSION['uploadmessage'])){echo '<span style="color:rgb(26, 196, 4);text-align:center;,font-weight: bold;"><p>Your Detail has SuccessFully Uploaded. </p></span>'; }?><br>
                     
                      </form>
                    </div>
                  </form>
                
              </div>
          </section>
        </div>
      </div>
    </div>


  

<section>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Billing / Amount</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="col-25">
        <div class="container-b">
          <h4>Bill
            <span class="price" style="color:black">
              <i class="fa fa-shopping-cart"></i>
              <b>1</b>
            </span>
          </h4>
          <form action="order.php" method="post">

          <br><span class="order-centre">Token No</span> <input class="form-control" readonly type="text" name="tkno" value="<?php if(isset($_SESSION['no_tokenn'])){echo $_SESSION['no_tokenn'];}else{echo " Kindly, Upload Your File ";}?>"><br>

          <span class="order-centre">Name</span><input class="form-control" readonly type="text" name="customername" value=" <?php if(isset($_SESSION['usernamee'])){echo $_SESSION['usernamee'];} else {echo " Kindly, Upload your Name File ";}?>"> 
<hr>
          <br><p><a class="pro-text" >PVC card & Print </a> <span class="price"> 50 <i class="fa fa-rupee"></i><input hidden type="number"
                id="initial-amount" class="form-control" value="50" readonly autocomplete="off"></span></p>

          <p><a class="pro-text" >Service Charge And GSTIN</a> <span class="price">15 <i class="fa fa-rupee"></i><input hidden type="number"
                id="gst-rate" class="form-control" readonly value="15" autocomplete="off"></span></p>

          <p><a class="pro-text" >Shipping Coast</a> <span class="price">30 <i class="fa fa-rupee"></i><input hidden type="number"
                id="deliviery-amtt" class="form-control" readonly value="30" autocomplete="off"></span></p>

          <p><a class="pro-text">Quantity</a> <span class="price"> <button class=" minus-btn disabled"
                type="button">-</button>
              <input type="text" id="quantity" class="form-control small-box" value="1">
              <button class=" plus-btn   w3-button w3-circle w3-black" type="button">+</button></span></p>
          <br><br>
          <hr>

           <p class="total-price">
            <span class="totsum">Total Amount::</span> <span id="price" name="price" class="totsum">95</span> <i class="fa fa-rupee"></i>

              <input hidden type="text" name="price" id="pricee" name="price" class="form-control" type="number" value="95">
              
             
              <input hidden type="text" name="contactno" value="<?php if(isset($_SESSION['image_ownerr'])){echo $_SESSION['image_ownerr'];}else{echo " upload your number First ";}?>">

            <br></br><input type="submit" name="submit" value="Proceed To Pay">
          </form>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</section>
    <div>
      
      </div>
      <div>

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
                    <i class="fas fa-gem me-3"></i>Company name
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
                    <a href="#!" class="text-reset">Angular</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">React</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Vue</a>
                  </p>
                  <p>
                    <a href="#!" class="text-reset">Laravel</a>
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
                  <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                  <p>
                    <i class="fas fa-envelope me-3"></i>
                    info@example.com
                  </p>
                  <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                  <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                </div>
                <!-- Grid column -->
              </div>
              <!-- Grid row -->
            </div>
          </section>
          <!-- Section: Links  -->

          <!-- Copyright -->
          <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2021 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->




      </div>

      <script src="calculate.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  </body>

</html>