<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>View Approvide Students</title>
    
</head>
<body>
    <div class="sticky-top">
    <?php
    include("header.php");
    ?>
    </div>
    <div class="container-fluid mt-2">
    <div class="row" >
        
        <div class="col-sm-12 table-responsive">
        
    <table class="table table-stripped">
        
       <tr>
        <th>Sr. No</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Name</th>
        <th>College</th>
        <th>Guardian Name</th>
        <th>Guardian Mobile</th>
        <th>Course</th>
        <th>Branch</th>
        <th>Year</th>
        <th>Gender</th>
        <th>Technology</th>
        <th>Reporting Date</th>
        <th>Accommodation</th>
        <th>Mess</th>
        <th>Photo</th>
        <th>Aadhar</th>
        <th>Marksheet</th>
        <th>District</th>
        <th>Pincode</th>
        <th>Address</th>
        <th>Checkbox</th>
        <th>Status</th>


       </tr>
       <tbody>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'myproject');
        $query = "Select * from tbl_form where status='Y'";
        $result = mysqli_query($con, $query);
        // $row = mysqli_fetch_assoc($result);
        $i = 1;
        while ($row=mysqli_fetch_assoc($result)){?>
           <tr>
                 <td><?php echo $i ?><input type="hidden" name="id" value="<?php echo $row['id'];?>"></td>
                 <td><?php echo $row['mobile']?></td>
                 <td><?php echo $row['email']?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['college']?></td>
                  <td><?php echo $row['gname']?></td>
                  <td><?php echo $row['gmobile']?></td>
                  <td><?php echo $row['course']?></td>
                  <td><?php echo $row['branch']?></td>
                  <td><?php echo $row['year']?></td>
                  <td><?php echo $row['gender']?></td>
                  <td><?php echo $row['technology']?></td>
                  <td><?php echo $row['rdate']?></td>
                  <td><?php echo $row['accomdation']?></td>
                  <td><?php echo $row['mess']?></td>
                  <td><?php echo $row['photo_name']?></td>
                  <td><?php echo $row['aadhar_name']?></td>
                  <td><?php echo $row['marksheet_name']?></td>
                  <td><?php echo $row['district']?></td>
                  <td><?php echo $row['pincode']?></td>
                  <td><?php echo $row['address']?></td>
                  <td><?php echo $row['checkbox']?></td>
                  <td><?php echo $row['status']?></td>


           </tr>
           <?php
           $i++;
        }
           ?>
       </tbody>
    </table>
    </div>
    </div>
</body>
</html>