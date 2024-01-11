<?php
$insert=false;
if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con)
    {
        die("Connection to this database failed due to".mysqli_connect_error());
    }
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    // echo "Success Connection to Database"
    // $sql = "INSERT INTO trip.trip (name,age,gender,email,phone,desc,Date) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    $sql="INSERT INTO TRIP_1.TRIP_1 (`name`, `age`, `gender`, `email`, `phone`, `desc_`, `Date`) VALUES ('$name', '$age', '$gender', '$gender', '$phone', '$desc', current_timestamp());";
    if($con->query($sql) == true){
        // echo"Successfully Inserted";
        $insert=true;
    }
    else{
        echo"ERROR :  $sql <br> $con->error";
    }
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <h1>Welcome to CHARUSAT Trip Form</h1>
        <p>Enter your details and submit this form to confirm your participation in trip</p>
        <?php
        if($insert==true){
        echo "<p class='submit_msg'>Thanks For Submitting Your Form. We are happy to see you for joining trip.</p>";}
     ?>
        
        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Your Name">
        <input type="text" name="age" id="age" placeholder="Enter Your Age">
        <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">
        <input type="email" name="email" id="email" placeholder="Enter Your Email">
        <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">
        <textarea name="desc" id="desc"cols="30" rows="10" placeholder="Enter any other information here"></textarea>
        <button class="btn">Submit</button>
    </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trip` (`SrNo`, `Name`, `Age`, `Gender`, `Email`, `Phone`, `Other`, `Date`) VALUES ('1', 'testname', '18', 'female', 'this@gmail.com', '9999999999', 'this is good website.', current_timestamp());  -->
</body>
</html>