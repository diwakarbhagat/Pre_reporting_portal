<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SPI</title>
    <style>
      
        .nav{
    height: 50px;
    width: 100%;
    background-color:blue;
    padding: 10px;
    position:relative;
  }
  .nav li{
    list-style: none;
    display: inline;
    text-align: center;
    padding: 8px;
    font-size: 20px;
    margin:5px  ; 
    color: white;
    

  }
  .nav  a{
    text-decoration: none;
    
  }
  .nav a:hover{
    background-color:aqua;
   
    
  }
    </style>

</head>
<body>
    <div class="container-fluid">
        <div class="sticky-top">
        <!-- header -->
        <?php
        include("header.php");
        ?>
        </div>
        <!-- header -->
        <!-- header -->
        <div class="row">
    <div class="col-sm-12 nav">
        <nav>
          <ul>
            <a href="index.php"><li><i class="fa-solid fa-house"></i> Home </li></a>
            <a href="About.php"><li> <i class="fa-solid fa-building-columns"></i> About Spi</li></a>
            <a href="SPI.php"><li><i class="fa-solid fa-user-graduate"></i> ST2023</li></a>
            <a href="#"><li><i class="fa-solid fa-display-code"></i> Technologies</li></a>
            <a href="contactus.php"><li><i class="fa-solid fa-envelope"></i> Contact Us</li></a>
            
          </ul>
        </nav>

    </div>
</div>
        <!-- int -->
        <div class="row mt-3">
            <img src="image/intern.jpg" alt="" srcset="" width="100%" height="500px">
        </div>
        <!-- int -->
        <div class="row mt-5 bg-success">
  <div class="col-sm-4 mt-2">
    <img src="image/spi.png" alt="" class="rounded-circle" style="height:150px;">
    </div>
  <div class="col-sm-4  mt-2">
    <display style="font-weight:bolder; font-size=150px;">
      Softpro Summer Training 2023 Pre-Reporting Portal
    </display>
    <p>Launching by Softpro the largest Learning   </p>
    <p>$copy 2023-<?php echo date("Y");?> Designed and Developed by Diwakar</p>
    </div>
    <div class="col-sm-4 mt-2 ">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28464.029047610617!2d80.93974383591362!3d26.903379870406628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd7e0637bf21%3A0x730fe46201abc68a!2sSoftpro%20Learning%20Center!5e0!3m2!1sen!2sin!4v1673029500095!5m2!1sen!2sin"
     width="300" height="200" style="border:0; margin-left: 50px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>" <frameborder="0"></iframe>
    </div>
    </div>
</body>
</html>