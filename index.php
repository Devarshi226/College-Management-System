<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CMS</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <style>
    #cms_main {
      max-width: 35%;
    }

    .container-img {
      width: 100%;
      margin: 0;
      padding: 15px;
    }
    .navbar-dark .navbar-nav .nav-link {
      color: hsl(0deg 0% 100%);
    }
    #mainimg {
      width: 100%;
      padding: 0px 25px 25px 25px;
    }

    *{
      margin: 0;
      padding: 0;
    }

    .color {
      color: #3b71ca;
    }
    .navbar-dark .navbar-nav .nav-link {
      font-size: 22px;
    }
    .navbar-brand img{
      border-radius: 50px;
    }
    .linked{
      text-align: center;
    }
    .linkspics{
      color: #3b71ca;
      text-align: center;
      font-size: x-large;
      font-weight: 500;
    }
    a.linkspics:hover, a.linkspics:active {color: red;}
    a:active {
      color: yellow;
    } 
      /* .slider {
        width: 1500px;
        height: 1000px;
        background-color: yellow;
        margin-left: auto;
        margin-right: auto;
        margin-top: 0px;
        text-align: center;
        overflow: hidden;
      }
      .image-container {
        width: 1500px;
        background-color: pink;
        height: 300px;
        clear: both;
        position: relative;
        -webkit-transition: left 2s;
        -moz-transition: left 2s;
        -o-transition: left 2s;
        transition: left 2s;
      }
      .slide {
        float: left;
        margin: 0px;
        padding: 0px;
        position: relative;
      }
      #slide-1:target ~ .image-container {
        left: 0px;
      }
      #slide-2:target ~ .image-container {
        left: -500px;
      }
      #slide-3:target ~ .image-container {
        left: -1000px;
      }
      .buttons {
        position: relative;
        top: -20px;
      }
      .buttons a {
        display: inline-block;
        height: 15px;
        width: 15px;
        border-radius: 50px;
        background-color: lightgreen;
      } */
      .mySlides {
        display:none;
      }
      #left-btn{
        padding: 15px;
      }
      
      #right-btn{
        padding: 15px;
      }
      #CMS{
        font-weight: 500;
      }
      h3{
        font-weight: 500;
      }
    </style>
  </style>
</head>

<body>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js"></script>
  <!-- Navbar -->
  <nav class="contain bg-primary">

  </nav>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <!-- Container wrapper -->

    <div class="container-fluid">
      <!-- Toggle button -->
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <div class="logo">
            <img src="image/sitlogo.jfif" alt="saffrony logo" height=55px>
          </div>
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item" style="padding-left:5px ;">
            <a class="nav-link" href="https://www.saffrony.ac.in/">Saffrony-Web</a>
          </li>
          <li class="nav-item" style="padding-left:5px ;">
            <a class="nav-link" href="ex-student.html">Ex-Student</a>
          </li>
          <li class="nav-item" style="padding-left:5px ;">
            <a class="nav-link" href="admissions.html">Admission</a>
          </li>
        </ul>
        <!-- Right links -->
        <div class="d-flex align-items-center ">
          <?php if (isset($_SESSION['login'])) {   ?>
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a href="#" class="dropdown-item">Action 1</a>
              <a href="#" class="dropdown-item">Action 2</a>
              <a href="#" class="dropdown-item">Action 3</a>
            </div> -->
            <!-- 2minutes -->
            
          <?php } else { ?>

            <button type="button" class="btn btn-link px-3 me-2 bg-light" sizeof>
              <a href="login.php" style="font-size: 18px;">Login</a>
            </button>
          <?php } ?>
        </div>
      </div>
    </div>
    <!-- Container wrapper -->
  </nav>
  <section class="py-0">
  <div class="py-5 shadow" style="background: linear-gradient(-45deg, #392387 50%, transparent 50%)">
    <div class="container-fluid my-4">
      <div class="row">
        <div class="col-lg-6 my-auto">
          <h1 class="display-3 font-weight-bold" id="CMS">College Management System</h1>
        </div>
        <div class="col-lg-6">
          <div class="col-lg-8 mx-auto card shadow-lg">
            <div class="card-body py-5">
              <h3>Inquiry Form</h3>
              <form action="inquiry.php" method="post" class="" onsubmit="return validate()">
                <div class="md-form">
                  <input type="text" id="names" class="form-control" name="names">
                  <label for="names">Your Name</label>
                </div>
                <div class="md-form">
                  <input type="email" id="email" class="form-control" name="email">
                  <label for="email">Your Email</label>
                </div>
                <div class="md-form">
                  <input type="text" id="mobile" class="form-control" name="mobile"> 
                  <label for="mobile">Your Mobile</label>
                </div>
                <div class="md-form">
                  <input type="text" id="topic" class="form-control" placeholder="Eg. Admission etc" name="topic">
                  <label for="topic">Your Inquiry topic</label>
                </div>
                <div class="sub" style="width: 442px;">
                  <input type="submit" value="submit" name="submit" style="padding: 4px 44% 4px 44%">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<script>
  
</script>
  </section>
  
    <div style="text-align: center;"><h3 style="color:#3b71ca">Saffrony Photos</h3></div>
    <!-- <div class="container-img">
      <img id="mainimg" src="./image/saffrony_Main_1.png" alt="">
    </div>
    <div class="linked">
      <a href="https://www.saffrony.ac.in/" class="linkspics">See More Photos</a>
    </div>         -->
    <!-- <div class="slider">
      <span id="slide-1"></span>
      <span id="slide-2"></span>
      <span id="slide-3"></span>
      <div class="image-container">
        <img src="../CMS/image/saffrony_Main_1.png" class="slide" width="500" height="300" />
        <img src="../CMS/image/saffrony_img_2.jpg" class="slide" width="500" height="300" />
        <img src="../CMS/image/saffrony_img_3.jpg" class="slide" width="500" height="300" />
      </div>
      <div class="buttons">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
      </div>
    </div>
    <div class="linked">
      <a href="https://www.saffrony.ac.in/" class="linkspics">See More Photos</a>
    </div> -->
    <!-- Slide Photo Html -->
  <div class="w3-content w3-display-container" style="padding: 10px 20px 10px 20px;">

    <div class="w3-display-container mySlides">
      <img src="../CMS/image/saffrony_Main_1.png" style="width:100%; height:530px" class="center">
      
    </div>

    <div class="w3-display-container mySlides">
      <img src="../CMS/image/saffrony_img_2.jpg" style="width:100%; height:530px">
    
    </div>

    <div class="w3-display-container mySlides">
      <img src="../CMS/image/saffrony_img_3.jpg" style="width:100%; height:530px">
    </div>
    <div >
      <button class="w3-button w3-display-left w3-black" id="left-btn" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-display-right w3-black" id="right-btn" onclick="plusDivs(1)">&#10095;</button>
    </div>
  </div>
  <div class="linked">
    <a href="https://www.saffrony.ac.in/" class="linkspics">See More Photos</a>
  </div>

<!-- Slide Photo Html Finish -->


  <section class="py-2">
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">Our Courses</h2>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="card">
            <div>
              <img src="image/IT.jpg" alt="" class="img-fluid rounded-top">
            </div>
            <div class="card-body">
              <b>Information Technology</b>
              <p class="card-text">
                <b>Duration: </b> 4 years <br>
                <b>Price per sem: </b> 37500/- Rs
              </p>
              <a href="http://localhost/CMS/admissions.html"><button class="btn btn-block btn-primary btn-sm">Enroll Now</button></a>
              
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div>
              <img src="image/CE_Img.jpg" alt="" class="img-fluid rounded-top " style="height: 204px;" >
            </div>
            <div class="card-body">
              <b>Computer Engineering</b>
              <p class="card-text">
                <b>Duration: </b> 4 years <br>
                <b>Price per sem: </b> 37500/- Rs
              </p>
              <a href="http://localhost/CMS/admissions.html"><button class="btn btn-block btn-primary btn-sm">Enroll Now</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div>
              <img src="image/ME_img.jpg" alt="" class="img-fluid rounded-top" style="height: 204px;">
            
            </div>
            <div class="card-body">
              <b>Mechanical Engineering</b>
              <p class="card-text">
                <b>Duration: </b> 4 years <br>
                <b>Price per sem: </b> 37500/- Rs
              </p>
              <a href="http://localhost/CMS/admissions.html"><button class="btn btn-block btn-primary btn-sm">Enroll Now</button></a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card">
            <div>
              <img src="image/Civil_img.jfif" alt="" class="img-fluid rounded-top" style="height: 204px;" >
            </div>
            <div class="card-body">
              <b>Civil Engineering</b>
              <p class="card-text">
                <b>Duration: </b> 4 years <br>
                <b>Price per sem: </b> 37500/- Rs
              </p>
              <a href="http://localhost/CMS/admissions.html"><button class="btn btn-block btn-primary btn-sm">Enroll Now</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.js" integrity="sha512-jgqnY5wi2gxl4Yj4iXEEpVWrBI6JeJQc67LVC/a65X/TeMotFC0veqlMqYHAI3FfS3hCdx5z6fqKFzXqdnKXDw==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script>
    var slideIndex = 1;
    showDivs(slideIndex);

    function plusDivs(n) {
      showDivs(slideIndex += n);
    }

    function showDivs(n) {
      var i;
      var x = document.getElementsByClassName("mySlides");
      if (n > x.length) {slideIndex = 1}
      if (n < 1) {slideIndex = x.length}
      for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
      }
      x[slideIndex-1].style.display = "block";  
    }
</script>
</body>

</html>