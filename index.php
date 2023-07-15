<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
     -->
  
    <style>
      body{
       background-color:rgb(186, 198, 255);
      }
        *{
            margin: 0;
            padding: 0;
        }
        .foot{
          background-color: rgb(86, 98, 255,0.5);
          /* position: sticky; */
          /* position: -webkit-sticky; */
  /* position: sticky; */
        }
        .bca{
            background-image: url("./image/bg1.jpg");
           
      background-repeat: no-repeat; background-size: cover;
     
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
        .fbac{
          background-image: url("./image/page-header.jpg");
         background-repeat: no-repeat; 
          /* background-size: cover; */
          height: 100%;
          width:100%;
        }

    </style>
</head>
<body>
 <div class="sticky-top">
    <div class="container-fluid">
     
<div class="row foot  " >
    <div class="col-sm-4 mt-2">
        <img src="image/spilogo.png" alt="" height="80px"  width="120px">
        
    </div>
    <div class="col-sm-4 my-2">
        <h2>Softpro Learning Center</h2>
                <h4><span style="color: orangered;">A Unit Of Softpro Group Of Companies</span></h4>
    </div>
    <div class="col-sm-4 my-5">
      <button type="button" onclick="location.href='http://localhost/myproject/login.php?msg=1'" class="btn btn-success btn-outline-warning" style="margin-left: 30px;"><i class="fa-solid fa-user ms-3" ></i>Admin Login</button>
    </div>
</div>
      </div>
      </div>
      
      

     
<!-- header close -->
<!-- nav bar -->

      

<div class="row">
    <div class="col-sm-12 nav">
        <nav>
          <ul>
            <a href="#"><li><i class="fa-solid fa-house"></i> Home </li></a>
            <a href="About.php"><li> <i class="fa-solid fa-building-columns"></i> About Spi</li></a>
            <a href="SPI.php"><li><i class="fa-solid fa-user-graduate"></i> ST2023</li></a>
            <a href="#"><li><i class="fa-solid fa-display-code"></i> Technologies</li></a>
            <a href="contactus.php"><li><i class="fa-solid fa-envelope"></i> Contact Us</li></a>
            
          </ul>
        </nav>

    </div>
</div>
      
<!-- nav close -->
<!-- main -->
      
<div class="row bca">
    <div class="col-sm-6 my-5">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/qlXZlOw7C4c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    <div class="col-sm-6 my-5">
      <h2>Softpro summer Training Pre-Reporting Portal</h2>
      <h3>Softpro Welcomes all the trainees to the </h3>
    </div>
  </div>
</div>
<!-- main close -->
<!-- form head -->
<div class="row fbac mt-2">
  <div class="col-sm-12 mt-2">
    <h2 style=" text-align:center; color:blue;">Please fill the Pre-Reporting form</h2>
  </div>

</div>
<!-- form head  close-->


<!-- form  -->
<div class="container" >
  <form action="code.php" method="post" enctype="multipart/form-data">
<h2>Pre-Reporting Form</h2>
<p>Only those student who have registered for summer training in Softpro india are eligible to fill this form</p>
<!-- <font size="30" color="red" face="chiller"I Love PHp !!!</font> -->
<hr>
<!-- <span id="msg"></span><br><br> -->
<!--  -->
<div class="row mt-5">
  <span id="msg"></span><br><br> 
<div class="col-sm-6">
<input type="number" name="mobile" id="mobile" placeholder="Enter Registered Mobile Number" required class="form-control" >
</div>
<div class="col-sm-6">
<input type="email" name="email" id="email" placeholder="Enter Registered Email" required class="form-control">
</div>
</div>
<br>
<!--  -->
<!--  -->
<div class="row">
<div class="col-sm-6">
<input type="text" name="name" id="name" placeholder="Enter Your Name" required="true" class="form-control"/>
</div>
<div class="col-sm-6">
<input type="text" name="college" id="college" placeholder="Enter your College Name" required="true" class="form-control">
</div>
</div>
<br>
<!--  -->

<!--  -->
<div class="row">
<div class="col-sm-6">
<input type="text" name="gname" id="gname" placeholder="Enter Your Guardian Name" required="true" class="form-control" >
</div>
<div class="col-sm-6">
<input type="text" name="gmobile" id="gmobile" placeholder="Enter your Guardian Number" required class="form-control">
</div>
</div>
<br>
<!--  -->

<!--  -->
<div class="row">
<div class="col-sm-6">
<select name="course" id="course" class="form-control">
<option value="">Select Course</option>
<option value="Diploma">Diploma</option>
<option value="B-Tech">B-Tech</option>
<option value="PGDCA">PGDCA</option>
</select>
</div>
<div class="col-sm-6">
<select name="branch" id="branch" class="form-control">
<option value="">Select Branch</option>
<option value="CSE">CSE</option>
<option value="EE">EE</option>
<option value="ME">ME</option>
</select>
</div>
</div>
<br>
<!--  -->


<!--  -->
<div class="row">
<div class="col-sm-6">
<select name="year" id="year" class="form-control">
<option value="">Select Year</option>
<option value="1st Year">1st Year</option>
<option value="2nd Year">2nd Year</option>
<option value="3rd year">3rd year</option>
<option value="4th year">4th year</option>
</select>
</div>

<div class="col-sm-6">
<select name="gender" id="gender" class="form-control">
<option value="">Select Gender</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Others">Others</option>
</select>
</div>
</div>
<br>
<!--  -->



<!--  -->
<div class="row">
<div class="col-sm-6">
<select name="technology" id="technology" class="form-control">
<option value="">Select Technologies</option>
<option value="Python with Django">Python with Django</option>
<option value="PHP With Laravel/CI">PHP With Laravel/CI</option>
<option value=".NET">.NET</option>
</select>
</div>

<div class="col-sm-6">
<select name="rdate" id="rdate" class="form-control">
<option value="">Select Reporting Date</option>
<option value="9 july 2023">9 july 2023</option>
<option value="12 july 2023">12 july 2023</option>
</select>
</div>
</div>
<br>
<!--  -->



<!--  -->
<div class="row">
<div class="col-sm-6">
<select name="accomdation" id="accomdation" class="form-control">
<option value="">Select Type Of Accommodation</option>
<option value="Hostal">Hostal</option>
<option value="Room">Room</option>
<option value="self-Arrangment">self-Arrangment</option>
</select>
</div>

<div class="col-sm-6">
<select name="mess" id="mess" class="form-control">
<option value="">Would You Like to avail mess facility</option>
<option value="Yes">Yes</option>
<option value="No">No</option>

</select>
</div>
</div>
<br>
<!--  -->



<!--  -->
<div class="row">
<div class="col-sm-6">
<label for="photo">**Upload Your Passport Size Photo in JPG/JPEG/PNG Formet</label>
<input type="file" name="photo" id="photo" accept="image/jpg, image/jpeg, image/png" placeholder="Uploade Your Image"class="form-control">
</div>
<div class="col-sm-6">
<label for="aadhar">**Upload Your Aadhar Card in JPG/JPEG/PNG Formet </label>
<input type="file" name="aadhar" id="aadhar" accept="image/jpg, image/jpeg, image/png" placeholder="Uploade Your Image" class="form-control">
</div>
</div>
<br>
<!--  -->



<!--  -->
<div class="row">
<div class="col-sm-6">
<label for="photo">**Upload Your Marksheet  in PDF Formet</label>
<input type="file" name="marksheet" id="marksheet" accept=".pdf" placeholder="Uploade Your Marksheet"class="form-control">
</div>
<div class="col-sm-6 mt-4">
<select name="district" id="district" class="form-control">
<option value="">Select Your Home District</option>
<option value="unnao">unnao</option>
<option value="lucknow">lucknow</option>
<option value="kanpur">kanpur</option>

</select>

</div>
</div>
<br>
<!--  -->


<!--  -->
<div class="row">
<div class="col-sm-6">
<input type="number" name="pincode" id="pincode"  class="form-control" placeholder="Enter Your Pincode" required maxlength="6">
</div>
<div class="col-sm-6">
<textarea name="address" id="address" rows="1" cols="5" class="form-control" placeholder="Enter Your Address"></textarea>
</div>
</div>
<br>
<!--  -->


<!--  --> 
<div class="container-fluid">
<div class="row bg-body">
<div class="col-sm-12">
<input type="checkbox" name="checkbox" id="checkbox" required >
<label for="checkbox">
I hereby declare that the details mentioned above in the form are true as per my knowledge & I give my concern to join Summer Training 2022 at Softpro India on the selected date & time as per my choice.
</label>
</div>
    </div>

<div class="row mt-2">
  <div class="col-sm-5"></div>
  <div class="col-sm-2">
<input type="submit" value="submit" class="form-control btn btn-warning btn-outline-info">
</div>
<div class="col-sm-5"></div>

</div>
<!--  -->
</form>
</div>
<!-- form close -->
<div class="container-fluid">
<div class="row mt-5 bg-danger">
  <div class="col-sm-12">
  <p>Not yet registered for Summer Training 2022, kindly register today to be a part of Team Softpro.</p>
    ग्रीष्मकालीन प्रशिक्षण 2022 के लिए अभी तक पंजीकृत नहीं है, कृपया टीम सॉफ्टप्रो का हिस्सा बनने के लिए आज ही पंजीकरण करें
    <br>
<input type="submit" value="Registar Now" class="btn btn-dark  btn-outline-info" style="width:150px; margin-left:475px">
</div>
    </div>
    </div>
  <!--  -->
<br>
<br>
<div class="row">
<h1 style="text-align: center; color: brown;">Testimonial</h1>
<h2 style="text-align: center; color: blue">2000+ Students Love Us</h2>
<br>
    </div>
<!-- testi  -->
<div class="container-fluid">
<div class="row mt-5 ">
  <div class="col-sm-3">
    
      <img src="image/Testimonial.png" alt="" height="100%" width="100%" style="box-shadow: 5px 5px 25px black;">
    </div>
 
  
  <div class="col-sm-3 ">
    
      <img src="image/Testimonial3.png" alt="" height="100%" width="100%" style="box-shadow: 5px 5px 25px black;">
    </div>
   
  
  <div class="col-sm-3">
    <img src="image/t2.png" alt="" height="100%" width="100%" style="box-shadow: 5px 5px 25px black;">
  </div>
  <div class="col-sm-3">
    <img src="image/Testimonial.png" alt="" height="100%" width="100%" style="box-shadow: 5px 5px 25px black;">
  </div>
</div>
    </div>
    </div>    
<!-- testi close -->

<br>
<br>
    
<div class="container-fluid ">
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
<!-- footer1 -->

   <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
   
    <script>
            $("#mobile").on("keyup",function(){
                let mobile=$(this).val();
                $.ajax({
                 url:"stu_ajax.php",
                 type:"POST",
                 data:{mobile},
                 
                 success: function(res){
                    console.log(res);
                    if(res.status == false){
                        $("#msg").html("You are not eligible for filling this form!");
                        setTimeout(function(){
                            $('#msg').fadeOut();
                            },5000);                      
                        $("#msg").removeClass("alert-success");
                        $("#msg").addClass("alert-danger");
                        $("#msg").html(res.message);
                        $("#name").val("");
                        $("#email").val("");
                        $("#college").val("");
                        $("#submit").attr("disabled", true);
                        
                        
                   }else{
                    $("#msg").html("You are eligible for filling this form!");
                    setTimeout(function(){
                            $('#msg').fadeOut();
                            },5000);
                    $("#msg").removeClass("alert-danger");
                    $("#msg").addClass("alert-success");
                    $("#name").val(res[0].name);
                    $("#email").val(res[0].email);
                    $("#college").val(res[0].college);
                    $("#submit").attr("disabled", false);
                   }
                 },   
                });
            });
        </script> 


    
</body>
</html>