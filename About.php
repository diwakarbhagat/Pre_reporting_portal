<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/about.css">
    <script src="js/bootstrap.bundle.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>About SPI</title>
    <style>
        .msg{
            border: 2px solid;
            height: auto;
            width: auto;
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
    <div class="container-fluid ">
      <div class="sticky-top">
        <!-- header -->
        <?php
        include("header.php");
        ?>
        </div>
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
        <!--  -->
        <div class="row">
            <!-- <div class="col-sm-12"> -->
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="image/mouban.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/slider1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="image/tech.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
              
            </div>
        </div>
        <!--end  -->
        
        <!--2  -->
        <div class="row mt-3 bg-gradient">
            <div class="col-sm-5"></div>
            <div class="col-sm-2">
                <img src="image/sir.jpg" class=" rounded-circle" height="150px">
                   <h5>Er. Ajay Chaudhari</h5>
                   <span>Director, Softpro Groups</span>
            </div>
            <div class="col-sm-5"></div>
        </div>
        <!-- 2end -->
        <!-- 3rd -->
        <div class="row mt-4">
            <div class="col-sm-12">
                <h2 style="margin-left:500px;">Director's <span style="color:red">Message</span> </h2>
                <div class="msg">
                    <span>"Today, Softpro stands at the pinnacle of success, prosperity and jubilance on account of its diverse strengths and
opportunities being tapped from a wide horizon of activities and ventures. We have a very sound and large empowered
customers having clear cut vision and commitment for growth and development. Softpro India offers customized and
flexible IT solutions, with the costs that are affordable for international standards, without any reduction or loss in
quality, technology and/or scalability of the client. We treat our clients with courtesy, friendliness and intelligence. I
personally feel that this could only be achieved through a very strong bonding between our employees and customers
Vis-à-vis with the management working in tandem with them to fulfil their wishes and expectationsfrom all corners. In
fact we have entered in different domain of business to diversify our major thrust area of activities like Education,
Training & Research. The focus of success in all business ventures resolves around the basic concept of "ACHIEVE BIG" and
having positivity of mind in order to achieve the desired results with full commitment and dedication to realize the
cherished dream of thousands of people from all the sections of our society and providing solace to our people"<span>
                </div>
            </div>
        </div>
        <!-- 3rd end -->
        <!-- 4th -->
        <div class="row mt-4">
            <div class="col-sm-12 ">
            <h2 style="margin-left:500px;">About <span style="color:red">Softpro Learning Center</span> </h2>
            <div class="msg">
            <h5>
            The parent company of the group; Softpro India Computer Technologies (P) Ltd is a complete Technology Services and Solutions
provider to the clients. It is an ISO 9001:2015 Certified Company, incorporated in the year 2004, by Technocrats from IIT Kanpur and
IET Lucknow. The Company is devoted to provide Software Solutions to patrons in verticals like Manufacturing, IT Services,
Pharmaceutical and Education Sector. Softpro is an acclaimed member of UPDESCO which facilitates software development in
government sectors in UP. "Softpro Learning Center", commenced in 2008 with a perception to bridge the Technology Gap prevalent
between students and professionals. Softpro Learning Center has embarked itself as one of the most propitious center for learning
across UP and nearby states. We have recently signed MoUs with Directorate of Technical Education, Government of Uttar Pradesh &
Dr. APJ Abdul Kalam Technical University to conduct training programs, placement drives, workshops & seminars for the students of
AKTU & BTEUP.
            </h5>
            </div>
        </div>
</div>
        <!-- 4th end -->
        <!-- 5th -->
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
        <!-- 5th end -->
    </div>
</body>

</html>