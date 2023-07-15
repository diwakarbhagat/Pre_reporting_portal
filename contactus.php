<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Document</title>
    <style>
         .header{
            
            width:100%;
           
        }
        .container-fluid{
            background-color:#f1f1f1;
        }
        h3{
            color:orange;
        }
        button{
            margin-top:20px;
            border:none;
            border-radius:5px;
            padding:5px;
            background-color:orangered;
        }
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
<div class="header">
<div class="container-fluid">
    <div class="row header">
    <div class="col-sm-3 ">
        <img src="image/spilogo.png" alt="" height="80px"  width="120px" nclick="location.href='http://localhost/myproject/index.php'" >
        
    </div>
    <div class="col-sm-5 my-2">
        <h2>Softpro Learning Center</h2>
                <h3><span style="color: orangered;">A Unit Of Softpro Group Of Companies</span></h3>
    </div>
    <div class="col-sm-4 my-5">
      <button type="button"  onclick="location.href='http://localhost/myproject/index.php'" class="btn btn-success btn-outline-warning" style="margin-left: 35px;">Back To Home</button>
    </div>
</div>
        
            </div>
           <!--  -->
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
           <!--  -->
            <div class="container-fluid">
            <div class="row">
            <div class="col-sm-12 con">
                <div class="row">
                    <div class="col-sm-6 my-5" style="margin-top:20px; text-align: center;">
                        <h1>Contact Us</h1>
                        <h5>Fill out the Form or write to us at <b>softproindia@gmail..com</b></h5>
                        <img src="image/cont1.jpg" height="300px" width="500px" alt="" style="margin-top:20px ;">
                    </div>
                    <div class="col-sm-6 my-5" style="background-color:white ; min-height:500px; width: 570px;">
                        <form style="margin-top:30px ; margin-left: 20px;">
                           
                            <input type="text" placeholder="Name*" class="form-control" style="width:500px ; background-color: #f2f2f2;"><br>
                            <input type="email" placeholder="Email*" class="form-control" style="width:500px ; background-color: #f2f2f2;"><br>
                            <input type="number" placeholder="Number*" class="form-control" style="width:500px ; background-color: #f2f2f2;"><br>
                            <textarea class="form-control" name="Type text*" placeholder="Type text*" style="width:500px ; height: 180px; background-color: #f2f2f2;"></textarea>
                           <br>
                            <button class="form-control" style="width:500px ; background-color: black; color: whitesmoke; height: 50px;">Submit</button>
                        </form>
                    </div>
                </div>
        
            </div>
            <!-- footer -->
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
            <!-- footer -->
            </div>
</body>
</html>