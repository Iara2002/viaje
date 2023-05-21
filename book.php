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


<div class="heading" style="background:url(img/header-bg-3.png) no-repeat">
  <h1>Nuevos</h1>
</div>


<section class="booking">
    <h1 class="heading-title">reserva tu viaje</h1>

    <form action="book_form.php" method="post" class="book-form">
    <div class="flex">
        <div class="inputBox">
            <span> nombre :</span>
            <input type="text" placeholder="ingrese su nombre" name="name">
        </div>
        <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="ingrese su email" name="email">
        </div>
        <div class="inputBox">
            <span>telefono :</span>
            <input type="number" placeholder="ingrese numero de telefono" name="phone">
        </div>
        <div class="inputBox">
            <span>dirección :</span>
            <input type="text" placeholder="ingrese su dirección" name="addres">
        </div>
        <div class="inputBox">
            <span>a donde :</span>
            <input type="text" placeholder="ingrese su lugar de viaje" name="location">
        </div>
        <div class="inputBox">
            <span>cuantas :</span>
            <input type="number" placeholder="cantidad de personas" name="guests">
        </div>
        <div class="inputBox">
            <span>llegada :</span>
            <input type="date"  name="arrivals">
        </div>
        <div class="inputBox">
            <span>partida :</span>
            <input type="date" name="leaving">
        </div>
    </div>

    <input type="submit" value="submit" class="btn" name="send">
    </form>
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