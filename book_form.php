<?php
  $connection = mysqli_connect('localhost','root','','book_db');

  if(isset($_POST['send'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $addres = $_POST['addres'];
    $location = $_POST['location'];
    $guests = $_POST['guests'];
    $arrivals = $_POST['arrivals'];
    $leaving = $_POST['leaving'];

   $request = "insert into book_form(name, email, phone, addres, location, guests, arrivals, leaving) values
   ('$name', '$email', '$phone', '$addres', '$location', '$guests', '$arrivals', '$leaving')";

   mysqli_query($connection, $request);

   header('location:book.php');
  }else{
    echo 'Algo salió mal, intenta de nuevo';
  }
?>