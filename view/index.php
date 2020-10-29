<?php include_once 'includes/header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matha Coir</title>

    <?php include_once 'includes/styles.php'?>

    <link rel="stylesheet" href="../css/custom-css/main-page.css">
</head>
<body>
    <!-- starting main slider -->
<div class="container-fluid slider-container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" style="justify-content: center">
          <img class="d-block w-100" src="../img/1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/4.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>
<!-- end Main Slider -->

<br><br>

    <!-- start product Slider -->
    <div class="container-slider">
    <div class="slider owl-carousel">
        <div class="card">
            <div class="img">
                <img src="../img/3.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">Briana Tozour</div>
                <div class="sub-title">Graphic Designer</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quaeanimi nihil minus sed unde voluptas cumque.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="../img/2.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">Pricilla Preez</div>
                <div class="sub-title">Web Developer</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img">
                <img src="../img/1.jpg" alt="">
            </div>
            <div class="content">
                <div class="title">Eliana Maia</div>
                <div class="sub-title">App Developer</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
    </div>
    <script>
      $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000, //2000ms = 2s;
        autoplayHoverPause: true,

      });
    </script>
    </div>


</body>
    <!-- end product Slider -->

<?php include_once 'includes/footer.php'?>
<script src="../js/custome.js"></script>
<script src="../js/jquery.slim.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/fontawesome.min.js"></script>

</body>
</html>