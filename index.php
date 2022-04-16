<?php
$insert=false;
if(isset($_POST['department'])){
//set conn variables
$server = "localhost";
$username = "root";
$password = "";
//create db conn
$con=mysqli_connect($server,$username,$password);
//check for sueccsfu conn
if(!$con){
die("connection faild due to ". mysqli_connect_error());
        }
//echo "Connected Succesfully to the db";
//Collect post variables
$department = $_POST['department'];
$designation = $_POST['designation'];
$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$skype = $_POST['skype'];
$mobile = $_POST['mobile'];
$other = $_POST['other'];
$sql="INSERT INTO `fid`.`emp_det` (`department`, `designation`, `fullname`, `dob`, `gender`, `email`, `skype`, `mobile`, `other`,`dt`) VALUES ('$department ', '$designation', '$fullname', '$dob', '$gender', '$email', '$skype', '$mobile', '$other', current_timestamp());";

//echo $sql;
//excute query
if($con->query($sql)==true){
        //echo "Successfully Insteted";
        //flag for sucessful insertion
        $insert=true;
}
else {
        echo"Error: $sql <br> $con->error";
}
//close the db conn
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FID</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Redressed&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Redressed&family=Yanone+Kaffeesatz:wght@700&display=swap" rel="stylesheet">
</head>
<body>
   <img  class="bg1" src="bg1.jpg" alt="finestar">
    <!-- <video class="bg1" loop="true" autoplay="autoplay" >
        <source src="movie.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        Your browser does not support the video tag.
    </video>
    -->


<div class="container">
    <h2>Welcome to Finestar Jewellery & Diamonds Pvt. Ltd.</h2><br>
    <p>Enter your details and submit this form to confrim your Finestar Identity</p>

    <?php
    if($insert==true){
    echo "<p class='submsg'>Thank you for the submit your details</p>";
    }
    ?>

<form action='index.php' method='post'>

<select name="department" id="department">
    <optgroup lable="Department">
<option><label onclick="selectauto(1)">Head</label></option>
<option><label onclick="selectauto(2)">Admin</label></option>

  <option value="Travel">Travel</option>
  <option value="Marketing">Marketing</option>
  <option value="Digital">Digital</option>
  <option value="Stock">Stock</option>
  <option value="Pricing">Pricing</option>
  <option value="Purchase">Purchase</option>
  <option value="Shipping">Shipping</option>
  <option value="Kitchen">Kitchen</option>
  </optgroup>
  </select>

    <select name="designation" id="designation">
        <option selected="" value="">-Select-</option>
        <option value="1">Director</option>
        <option value="2">Admin Head</option>
    </select>

   <input type ="text" name="fullname" id="fullname" placeholder="Full Name">
   <input type ="date" name="dob" id="dob" placeholder="DOB">
   <select name="gender" id="gender" placeholder="Gender">
    <optgroup label="Gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </optgroup>
     </select>
   <input type ="email" name="email" id="email" placeholder="EmailID">
   <input type ="text" name="skype" id="skype" placeholder="SkypeID">
   <input type ="phone" name="mobile" id="mobile" placeholder="Mobile No.">
   <textarea type ="other" name="other" id="other" rows='10' cols ='30'  placeholder="Your additional information here"></textarea>
   <span><button class="btn">Submit</button>
    <button class="btn">Reset</button></span>
</form>

</div>

<script src="index.js"></script>
<!-- <script >
     $(document).ready(function() {
     $('.bg1').prop('autoplay',true).play()
 });
</script> -->

</body>
</html>