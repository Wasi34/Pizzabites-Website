<?php 
session_start();

if (isset($_SESSION['email']) && isset($_SESSION['name'])) {

 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href ="css/style.css" rel="stylesheet" type ="text/css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <title>PIZZABITES</title>
  </head>
  <body>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> PIZZABITES </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="menu/menu.php">Menu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu/viewProfile.php">My Account</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="menu/viewCart.php">Shopping Cart</a>
          </li>
          <li class="nav-item"><h7 class="nav-link">Hello User, <?php echo $_SESSION['name']; ?></h1></li>

            <li class="nav-item"><a class="nav-link" href="logout.php">Log Out</a></li>
        

    </div>
  </div>
</nav>

<!--"Welcome to PIZZABITES/VidBG" section starts-->
<section class ="home">

<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">  
      <!-- Showing Video Background-->  
      
      <div class="video-container">
            <div class="color-overlay">
    <video id="vidBG"  src="images/vid1.mp4" autoplay muted loop class="d-block w-100" alt="..."></video>
    </div> 
   </div>
    <div class ="welcome">
      <h1>Welcome to Pizzabites</h1>
   </div> 
   </div>

    <div class="carousel-item" data-bs-interval="7000">

    <div class="video-container">
            <div class="color-overlay">
      <video src="images/vid2.mp4" autoplay muted loop class="d-block w-100" alt="..."></video>
      </div> 
   </div>
      <div class ="welcome">
      <h1>Heaven for the Pizzalovers</h1>
   </div> 
    </div>
    <div class="carousel-item" data-bs-interval="5000">
    <div class="video-container">
            <div class="color-overlay">
     <video  src="images/vid3.mp4" autoplay muted loop class="d-block w-100" alt="..."></video>
     </div> 
    </div>
     <div class ="welcome">
      <h1>Order Now to Taste the Best Pizza</h1>
   </div> 
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section >


<!--About section starts-->
<section class="about">
      
      <div class='container-fluid mx-auto mt-5 mb-5 col-12' style="text-align: center">
      <div class="hd">Why People Believe in Us</div>
      <p><small class="text-muted">Always render more and better service as your expectation.</small></p>
      <div class="row" style="justify-content: center">
          <div class="card col-md-3 col-12">
              <div class="card-content">
                  <div class="card-body"> <img class="img" src="https://i.imgur.com/S7FJza5.png" />
                      <div class="shadow"></div>
                      <div class="card-title"> Buy in cheapest price </div>
                      <div class="card-subtitle">
                          <p> <small class="text-muted">Something special in mind?<br> We can accommodate a wide variety of requests! </small> </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card col-md-3 col-12 ml-2">
              <div class="card-content">
                  <div class="card-body"> <img class="img" src="https://i.imgur.com/xUWJuHB.png" />
                      <div class="card-title"> Our goal </div>
                      <div class="card-subtitle">
                          <p> <small class="text-muted"> We work with importers and leading suppliers to ensure that our customers get the best pizza in town.<br> All our pizzas are 100% Halal and (in our humble opinion) delicious! </small> </p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="card col-md-3 col-12 ml-2">
              <div class="card-content">
                  <div class="card-body"> <img class="img rck" src="https://i.imgur.com/rG3CGn3.png" />
                      <div class="card-title"> Order Online </div>
                      <div class="card-subtitle">
                          <p> <small class="text-muted">PRE-ORDERS: call us in advance to arrange delivery of large orders at specific times</small> </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      
  </div>
      </section>
      <!--About section ENDS-->

<!--Footer section starts-->
  <!-- Footer -->
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
    <!-- Section: Text -->
    <section class="mb-4">
      <h2> FOLLOW US </h2>
    </section>
    <!-- Section: Text -->
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact Us</h5>
          <div class ="place">
          <span class ="fas fa-map-marker-alt"></span>
          <span class ="text"> Bashabo, Dhaka </span>  
        </div>  
        <div class ="phone">
          <span class ="fas fa-phone-alt"></span>
          <span class ="text"> +8801770620552 </span>  
        </div>    
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Delivery Partners</h5>
          <ul class="list-unstyled mb-0">
          <li>
              <a href="#!" class="text-white">Foodpanda</a>
            </li>
            <li>
              <a href="#!" class="text-white">Pathao</a>
            </li>
            <!-- <li>
              <a href="#!" class="text-white">My Account</a>
            </li>
            <li>
              <a href="#!" class="text-white">Shopping Cart</a>
            </li> -->
          </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Privacy Policy</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Terms and Conditions</a>
            </li>
            <li>
              <a href="#!" class="text-white">Partners</a>
            </li>      
          </ul>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">HELP</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">FAQ</a>
            </li>
            <li>
              <a href="#!" class="text-white">SUPPORT</a>
            </li>
            
          </ul>
        </div>
        <!--Grid column-->       
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © Created By :
    <a class="text-white" href="#">Sirajus Salekin Shafi & Ahmed AL Wasi</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>  
  </body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>