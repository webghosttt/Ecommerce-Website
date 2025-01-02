<?php
include('../includes/connect.php');
include('../functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment page</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
   
</style>

</head>

<body>
<!-- php code to access user id -->
 <?php
 $user_ip=getIPAddress();
 $get_user="Select * from `user_table` where user_ip='$user_ip'";
 $result=mysqli_query($con,$get_user);
 $run_query=mysqli_fetch_array($result);
 $user_id=$run_query['user_id'];
 ?>


    <div class="container">
        <h2 class="text-center text-info">Payment Option</h2>
        <div class="row d-flex justify-content-center align-items-center my-5 ">
            <div class="col-md-6">
            <a href="https://www.esewa.com.np" target="_blank"><img src="../image/esewa.png" alt=""></a>
            </div>
            <div class="col-md-6">
            <a href="order.php?user_id=<?php echo  $user_id ?>"><h2 class="text-center">Pay Offline</h2></a>
            </div>
            
        </div>
    </div>
    
</body>
</html>