

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<div class="container-fluid mt-2">
            <div class="row">
    <div class="col-sm-3 bg-primary">
<div class="navbar ">
 <button class="active btn btn-success w-100 m-0"> Welcome - Admin</button>
    <ul id="nav1" class="text-center w-100 display-7">
        
        <li><a href="#">Dashboard</a></li>
        <li><a href="viewallreg.php">View All Registration</a></li>
        <li><a href="notapprove.php">Not Approved Student</a></li>
        <li><a href="approvide.php">View Approved Student</a></li>
        <li><a href="verify.php">Verify Students</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
    </div>
</body>
</html>