<?php
session_start();
if ($_SESSION['user']=="" && ($_SESSION["user"]==0)) {
    # code...
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        .table-stripped{
            margin-top:5px;
            border:1px solid pink;
        }
        /* ul{
            list-style: none;
            padding: 15px;
            /* position:fixed; */
             /* margin-top: 130px; */
            overflow:auto;
            /* background-color: blue; */
            height: 400px;
          
        } */
        li{
             display: block; 
           border:2px solid red;
            text-align: center;
            

        }
        li a{
            text-decoration: none;
            padding:8px 16px ;
            color:white;

        }
        li a:active{
            background-color: aqua;

        }
        li a:hover{
            background-color: grey;
        }
        a{
    text-decoration: none;
    block-size: auto;
    color:white;
}
#nav1 li{
    list-style-type: none;
    margin-top: 20px;
    margin-bottom: 20px;
    border-bottom:1px solid red;
    padding-bottom: 3px;
    
}
#nav1 li a{
    text-decoration: none;
}
#nav1 li a:hover{
    color:orange;
}

    </style>
</head>
<body>
<div class="header">
<div class="container-fluid">
    <div class="row header">
    <div class="col-sm-3 mt-4">
        <img src="image/spilogo.png" alt="" height="80px"  width="120px" >
        
    </div>
    <div class="col-sm-5 my-2">
        <h1>Softpro Learning Center</h1>
                <h3><span style="color: orangered;">A Unit Of Softpro Group Of Companies</span></h3>
    </div>
    <div class="col-sm-4 my-5">
      <button type="button" onclick="location.href='http://localhost/myproject/login.php?msg=1'" class="btn btn-success btn-outline-warning " style="margin-left: 35px;"><i class="fa fa-user"></i><span class="faulty-letter"> Admin Login</span></button>
    </div>
</div>
        
            </div>


            <!--start-->
            <div class="container-fluid mt-2">
            <div class="row">
    <div class="col-sm-4 bg-primary">
<div class="navbar">
 <button class="active btn btn-success w-100 m-0"> Welcome - Admin</button>
    <ul id="nav1" class="text-center w-100 display-7">
        
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="viewallreg.php">View All Registration</a></li>
        <li><a href="notapprove.php">Not Approved Student</a></li>
        <li><a href="approvide.php">View Approved Student</a></li>
        <li><a href="verify.php">Verify Students</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
    </div>
                    <div class="col-sm-8 bg-light ">
                        
                        
                <form action="connect.php" method="post" style="border:2px solid orange;font-weight:bold">
                    <div class="container p-3">
                    <div class="row mx-3 mt-2">
                        <div class="col-sm-1">
                        Name:
                        </div> 
                        <div class="col-sm-11">
                        <input type="text" name="name" id="name" placeholder="Enter the name.." class="form-control">
                        </div>
                    </div>
                    <div class="row mx-3 mt-2">
                        <div class="col-sm-1">
                        College:
                        </div> 
                        <div class="col-sm-11">
                        <input type="text" name="college" id="college" placeholder="Enter college name.." class="form-control">
                        </div>
                    </div>
                    <div class="row mx-3 mt-2">
                        <div class="col-sm-1">
                        Email:
                        </div> 
                        <div class="col-sm-11">
                        <input type="email" name="email" id="email" placeholder="Enter email address.." class="form-control">
                        </div>
                    </div>
                    <div class="row mx-3 mt-2">
                        <div class="col-sm-1">
                        Mobile:
                        </div> 
                        <div class="col-sm-11">
                        <input type="number" name="mobile" id="mobile" placeholder="Enter mobile number.. " maxlength="13" minlenght="10" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4 text-center my-3">
                        <input type="submit" value="Submit" style=" border-radius:5px;padding:3px 8px;" class="btn btn-body btn-outline-success"/>
                        </div>
                        <div class="col-sm-4"></div>
                    
                    </div>
                    
                </div>
                </form>
                <h2 class="text-center my-3" style="color:blue;">Students Details</h2>
                <table class="table table-stripped">
                <tr>
                    <th>Name</th>
                    <th>College</th>
                    <th>Email</th>
                    <th>Mobile</th>
                </tr>
                
                <tr>
                <?php
                $con=mysqli_connect("localhost","root","","myproject");
                $query="select * from tbl_register";
                $result=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($result))
                {

                ?>
                    <td ><?php echo $row["name"]; ?></td>
                    <td ><?php echo $row["college"]; ?></td>
                    <td ><?php echo $row["email"]; ?></td>
                    <td ><?php echo $row["mobile"]; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
                
                        
                    </div>
                </div>
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
            
            <!--end-->
</body>
</html>