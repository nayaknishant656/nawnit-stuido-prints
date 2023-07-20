<?php include './php/pay.php';?>
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
  <link rel="stylesheet" href="assets/css/wedding.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/newaadhar.css">
  <link rel="stylesheet" href="assets/css/order.css">
</head>
<body>
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center">
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
  <body  >
    <!-- ======= Header =======
      <div id="margin-bottom single-product"> -->
    <header id="header" class="">
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
<div class="container">
<div class="box">
  <span class="order-centre">Token No::</span><input  class="form-control" value="<?php if(isset($_SESSION['no_tokenn'])){echo $_SESSION['no_tokenn'];}else{echo "Something Went Wrong, Try Again ";}
                       ?>" readonly> <br>
<span class="order-centre">Order ID::</span><input  class="form-control"value="<?php echo $_SESSION['razorpay_order_id']; ?>" readonly> <br>
<span class="order-centre">Name::</span><input  class="form-control" value="<?php if(isset($_SESSION['usernamee'])){ echo $_SESSION['usernamee']; }else{echo "Something Went Wrong, Try Again ";}?>" readonly> <br>
<span class="order-centre">Phone Number::</span><input  class="form-control" value="<?php if(isset($_SESSION['image_ownerr'])){echo $_SESSION['image_ownerr'];}else{echo "Something Went Wrong, Try Again";}?>" readonly> <br>
<form action="verify.php" method="POST">
  <script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $data['key']?>"
    data-amount="<?php echo $data['amount']?>"
    data-currency="INR"
    data-name="<?php echo $data['name']?>"
    data-image="<?php echo $data['image']?>"
    data-description="<?php echo $data['description']?>"
    data-prefill.name="<?php echo $data['prefill']['name']?>"
    data-prefill.email="<?php echo $data['prefill']['email']?>"
    data-prefill.contact="<?php echo $data['prefill']['contact']?>"
    data-notes.shopping_order_id="<?php echo $_SESSION['tkno'];?>"
    data-order_id="<?php echo $data['order_id']?>"
    <?php if ($displayCurrency !== 'INR') { ?> data-display_amount="<?php echo $data['display_amount']?>" <?php } ?>
    <?php if ($displayCurrency !== 'INR') { ?> data-display_currency="<?php echo $data['display_currency']?>" <?php } ?>
  >
  </script>
  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->
  <input type="hidden" name="shopping_order_id" value="<?php echo $_SESSION['tkno'];?>">
</form>
</div>
</div>
</div>

<script type="text/javascript">

$(document).ready(function(){
  $('razorpay-payment-button').click();

});

</script>


</body>
</html>






