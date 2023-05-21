<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>

    <!--swiper--->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>


    <!--font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

<!--HEADER-->

<section class="header">
    <a href="home.php" class="logo">Viajes</a>

    <nav class="navbar">
        <a href="home.php">Inicio</a>
        <a href="about.php">Acerca de</a>
        <a href="package.php">Paquetes</a>
        <a href="book.php">ver</a>
    </nav>


    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--inicio--->
<section class="home">

  <div class="swiper home-slider">
    <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(img/home-slide-1.png) no-repeat">
          <div class="content">
            <span>explorar, descubrir, viajar</span>
            <h3>viajar alrededor del mundo</h3>
            <a href="package.php" class="btn">Descubrir más</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(img/home-slide-2.png) no-repeat">
          <div class="content">
            <span>explorar, descubrir, viajar</span>
            <h3>descubre los nuevos lugares</h3>
            <a href="package.php" class="btn">Descubrir más</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(img/home-slide-3.png) no-repeat">
          <div class="content">
            <span>explorar, descubrir, viajar</span>
            <h3>haz que tu recorrido valga la pena</h3>
            <a href="package.php" class="btn">Descubrir más</a>
          </div>
        </div>

    </div>

    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

  </div>

</section>


<!--servicios-->
<section class="services">
  <h1 class="heading-title"> Nuestros servicios </h1>

  <div class="box-container">

    <div class="box">
        <img src="img/icon-1.png" alt="">
        <h3>Aventura</h3>
    </div>

    <div class="box">
        <img src="img/icon-2.png" alt="">
        <h3>Guía turístico</h3>
    </div>

    <div class="box">
        <img src="img/icon-3.png" alt="">
        <h3>Trekking</h3>
    </div>

    <div class="box">
        <img src="img/icon-4.png" alt="">
        <h3>Fogata</h3>
    </div>

    <div class="box">
        <img src="img/icon-5.png" alt="">
        <h3>Fuera de la carretera</h3>
    </div>

    <div class="box">
        <img src="img/icon-6.png" alt="">
        <h3>Camping</h3>
    </div>
  </div>
</section>

<section class="home-about">
    <div class="image">
        <img src="img/about-1.png" alt="">
    </div>

    <div class="content">
        <h3>Acerca de</h3>
        <p>Lorem  dolor sit amet consectetur adipisicing elit. At dignissimos corporis asperiores dolorum consectetur, 
        voluptates accusantium, numquam aliquam nulla obcaecati non minima deserunt incidunt ut ipsa totam delectus</p>
       <a href="about.php" class="btn">Ver más</a>
    </div>
</section>

<!--home package-->
<section class="home-packages">
    <h1 class="heading-title"> Nuestros paquetes </h1>

    <div class="box-container">

      <div class="box">
        <div class="image">
            <img src="img/paisaje.png" alt="">
        </div>
        <div class="content">
            <h3>Aventura y recorrido</h3>
            <p>esot kqjnew iOKWK ueebnbe kzojs sj ssussnskaloass.kwowow</p>
            <a href="book.php"  class="btn">Reservar ahora</a>
        </div>
    </div>

    
    <div class="box">
        <div class="image">
            <img src="img/paisaje2.png" alt="">
        </div>
        <div class="content">
            <h3>Aventura y recorrido</h3>
            <p>esot kqjnew iOKWK ueebnbe kzojs sj ssussnskaloass.kwowow</p>
            <a href="book.php"  class="btn">Reservar ahora</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="img/paisaje3.png" alt="">
        </div>
        <div class="content">
            <h3>Aventura y recorrido</h3>
            <p>esot kqjnew iOKWK ueebnbe kzojs sj ssussnskaloass.kwowow</p>
            <a href="book.php"  class="btn">Reservar ahora</a>
        </div>
    </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">Ver más</a> </div>
</section>


<section class="home-offer">
    <div class="content">
        <h3>Hasta 50% descuento</h3>
        <p> Natus assumenda expedita velit, autem veritatis quod dolore hic soluta minima sapiente eum suscipit.</p>
        <a href="book.php" class="btn">reservar ahora</a>
    </div>
</section>






<!--footer--->
<section class="footer">
    <div class="box-container">

     <div class="box">
        <h3>Enlaces</h3>
        <a href="home.php"><i class="fas fa-angle-right"></i>Inicio</a>
        <a href="about.php"><i class="fas fa-angle-right"></i>Acerca de</a>
        <a href="package.php"><i class="fas fa-angle-right"></i>Paquetes</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>fotos</a>
     </div>

     <div class="box">
        <h3>Demas enlaces</h3>
        <a href="#"><i class="fas fa-angle-right"></i>Hacer preguntas</a>
        <a href="#"><i class="fas fa-angle-right"></i>Sobre nosotros</a>
        <a href="#"><i class="fas fa-angle-right"></i>Politica y privacidad</a>
        <a href="#"><i class="fas fa-angle-right"></i>Terminos y condiciones</a>
     </div>

     <div class="box">
        <h3>Info de contacto</h3>
        <a href="#"><i class="fas fa-angle-right"></i>+123-456-7890</a>
        <a href="#"><i class="fas fa-angle-right"></i>+111-22-333</a>
        <a href="#"><i class="fas fa-angle-right"></i>vaije@gmail.com</a>
        <a href="#"><i class="fas fa-angle-right"></i>chicago, entre rios - 38490</a>
     </div>

    <div class="box">
        <h3>Seguinos</h3>
        <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
        <a href="#"><i class="fab fa-twitter"></i>twitter</a>
        <a href="#"><i class="fab fa-instagram"></i>instagram</a>
        <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>
    

</div>

   <div class="credit"> 2023 | <span> Iara Barcos </span></div>

</section>











<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
</body>
</html>