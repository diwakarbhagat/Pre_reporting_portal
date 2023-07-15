<?php 
session_start()
?>
<?php
error_reporting(0);
$msg = $_REQUEST['msg'];
if ($msg==1) {
    # code...
    $err = "*Invalid Email Or Password!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Login Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

    
</head>
<body>
    
    <!--  -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <div class="col-sm-4" style="height:350px; text-align:center; background-color:aqua; border:2px solid yellow;">
            <h2> Admin Login </h2>
               <form action="login_data.php" method="post" enctype="multipart" class="form-control">
               <span  class="text-danger"><?php echo $err;?></span>
                    <input type="email" name="email" id="email" placeholder="Enter your email" class="form-control mt-3 py
                    " required="true"/><br>
                
                    <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control" required="true"/><br><br>
                    <button type="submit" class="btn btn-danger center btn-outline-info"  >login</button>
               </form>
               <button type="submit" class="btn btn-dark center btn-outline-info mt-3 " onclick="location.href='http://localhost/myproject/index.php'">Back To Home</button>
        </div>
        </div>
        <!--  -->
        <!--  -->
        <!--  -->
    </div>
</body>
</html>