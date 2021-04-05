<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client detail</title>
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
   
    <!-- Main css -->
    <link rel="stylesheet" href="css/c_profile.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Let's Complete your Profile</h2>
                        <form action="" method="POST" class="register-form" id="register-form">
                            
                            <?php

include 'php/conn.php';
$id=$_GET['id'];
$sql="SELECT * FROM `d_profile` where `id`=$id";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

  if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $office_address = $_POST['office_address'];
    $specialities = $_POST['specialities'];
    $past_project = $_POST['past_project'];
    $business_info = $_POST['business_info'];
    $password = $_POST['password'];

$sql="UPDATE d_profile SET id='$id', name='$name',email='$email',phone='$phone', past_project='$past_project',office_address='$office_address',specialities='$specialities',password='$password',business_info='$business_info' WHERE `d_profile`.`id` = $id ";
 
$result=mysqli_query($conn,$sql);

if($result){
    echo "We updated the record successfully";
}
else{
    echo "We could not update the record successfully". mysqli_error($conn);
}
($conn);
  }
?>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="<?php echo $row['name']?>" placeholder="Your Name"/ >
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="email" id="email" value="<?php echo $row['email']?>" placeholder="Your Email"/ >
                            </div>

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="tel" name="phone" id="phone" value="<?php echo $row['phone']?>" placeholder="Your phone "/ >
                            </div>

                            <div class="form-group">
                                <label for="officeaddress"><i class="zmdi zmdi-home material-icons-name"></i></label>
                                <input type="text" name="office_address" id="office_address" value="<?php echo $row['office_address']?>" placeholder="Enter office address"/ >
                            </div>

                            <div class="form-group">
                                <label for="pastproject"><i class="zmdi zmdi-plus-circle material-icons-name"></i></label>
                                <input type="text" name="past_project" id="past_project" value="<?php echo $row['past_project']?>" placeholder="Enter Your past project"/ >
                            </div>

                            <div class="form-group">
                                <label for="specialities"><i class="zmdi zmdi-check-circle material-icons-name"></i></label>
                                <input type="text" name="specialities" id="specialities" value="<?php echo $row['specialities']?>" placeholder="your specialities"/ >
                            </div>

                            <div class="form-group">
                                <label for="Bussinessinfo"><i class="zmdi zmdi-case material-icons-name"></i></label>
                                <input type="text" name="business_info" id="business_info" value="<?php echo $row['business_info']?>" placeholder="Enter Business information"/ >
                            </div>
                            
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Update"/>
                             </div>
                           <!--- <div class="signup-image">
                               <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                                <a href="#" class="signup-image-link">I am already member</a>
                            </div> --->
                          
                        </form>

                    </div>
                    
                </div>
            </div>
        </section>

       

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>