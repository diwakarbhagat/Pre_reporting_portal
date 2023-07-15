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

    <title>Dashboard</title>
    <style>
     
       
         .header{
           
            width:100%;
        }
        .container-fluid{
            background-color:#f1f1f1;
        }
        
        button{
            margin-top:20px;
            border:none;
            border-radius:5px;
            padding:5px;
            background-color:orangered;
        }
        
    </style>
    <!-- 1 -->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Students', 'status'],
          ['Approved',   <?php
                $con = mysqli_connect('localhost', 'root', '', 'myproject');
                $query = "select * from tbl_form where status='Y' ";
                $result = mysqli_query($con,$query);
                $res = mysqli_num_rows($result);
                echo $res;
                 ?>  ],    
          ['Not Approved',    <?php
                $con = mysqli_connect('localhost', 'root', '', 'myproject');
                $query = "select * from tbl_form where status='N'";
                $result = mysqli_query($con,$query);
                $res = mysqli_num_rows($result);
                echo $res;
                 ?>     ],
         
        ]);

        var options = {
          title: 'Registered Students Details '
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <!-- 1 -->
    <!--2-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year','Registerd','Approved','Not Approved'],
          ['2022', 10, 4, 2],
          ['2023', <?php
                $con = mysqli_connect('localhost', 'root', '', 'myproject');
                $query = "select * from tbl_register";
                $result = mysqli_query($con,$query);
                $res = mysqli_num_rows($result);
                echo $res;
                 ?> , <?php
                 $con = mysqli_connect('localhost', 'root', '', 'myproject');
                 $query = "select * from tbl_form where status='Y' ";
                 $result = mysqli_query($con,$query);
                 $res = mysqli_num_rows($result);
                 echo $res;
                  ?>  ,  <?php
                  $con = mysqli_connect('localhost', 'root', '', 'myproject');
                  $query = "select * from tbl_form where status='N' ";
                  $result = mysqli_query($con,$query);
                  $res = mysqli_num_rows($result);
                  echo $res;
                   ?> ],
          ['2024', 0, 0, 0],
         
        ]);

        var options = {
          chart: {
            title: 'Reporting',
            
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>
    <!--  2-->
</head>
<body>
<div class="header">
<div class="container-fluid ">
    <div class="row header">
    <div class="col-sm-5 ">
        <img src="image/spilogo.png" alt="" height="80px"  width="120px" >
    </div>
    <div class="col-sm-5 mt-3">
        <h1 style="color:black;">Dashboard</h1>
    </div>
    <div class="col-sm-2">
      <button type="button"  onclick="location.href='http://localhost/myproject/index.php'" class="btn btn-success btn-outline-warning" style="margin-left: 35px;">Back</button>
    </div>
</div>
        
 </div>
 <!--  -->
 
        <?php
        include("navbar.php");
        ?>
          <div class="col-sm-9 mt-2">
         <div class="row">
            <div class="col-sm-3 ">
               <div class="well" style="background-color:green;border:15px solid green;text-align:center;">
                <h3  style="color:white;">Register</h3>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'myproject');
                $query = "select * from tbl_register";
                $result = mysqli_query($con,$query);
                $res = mysqli_num_rows($result);
                echo $res;
                 ?>
               </div>
            </div>
            <div class="col-sm-3">
            <div class="well"style="background-color:yellow;border:15px solid yellow; text-align:center;">
                <h3 style="color:white;">Approved</h3>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'myproject');
                $query = "select * from tbl_form where status='Y' ";
                $result = mysqli_query($con,$query);
                $res = mysqli_num_rows($result);
                echo $res;
                 ?>
               </div>
            </div>
            <div class="col-sm-3">
            <div class="well"style="background-color:red;border:15px solid red;text-align:center;">
                <h3 style="color:white;">Not Approved</h3>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'myproject');
                $query = "select * from tbl_form where status='N'";
                $result = mysqli_query($con,$query);
                $res = mysqli_num_rows($result);
                echo $res;
                 ?>
               </div>
            </div>
            <div class="col-sm-3">
            <div class="well"style="background-color:blue;border:15px solid blue;text-align:center;">
                <h3 style="color:white;">Reported</h3>
                <?php
                $con = mysqli_connect('localhost', 'root', '', 'myproject');
                $query = "select * from tbl_form ";
                $result = mysqli_query($con,$query);
                $res = mysqli_num_rows($result);
                echo $res;
                 ?>
               </div>
            </div>
            <div class="col-sm-6 mt-2 ">
            <div class="well">
            <div id="piechart" style="width: 490px; height: 250px; border:10px double grey;"></div>
            </div>
         </div>
         <div class="col-sm-6 mt-2 ">
            <div class="well">
            <div id="columnchart_material" style="width: 485px; height: 250px; border:10px double grey;"></div>
            </div>
         </div>
         <div class="row">
         <h2 class="text-center my-3" style="color:blue;">Students Details</h2>
                <table class="table table-stripped table-bordered">
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
                    <td style="color:"><?php echo $row["name"]; ?></td>
                    <td style="color:;"><?php echo $row["college"]; ?></td>
                    <td style="color:;"><?php echo $row["email"]; ?></td>
                    <td style="color:;"><?php echo $row["mobile"]; ?></td>
                </tr>
                <?php
                }
                ?>
            </table>
         </div>
         </div>
          </div> 
</body>
</html>