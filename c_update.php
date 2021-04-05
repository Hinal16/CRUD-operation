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

                            <div class="form-group">
<?php

include 'php/conn.php';
$id=$_GET['id'];
$sql="SELECT * FROM `c_profile` where `id`=$id";
$result= mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

  if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $location = $_POST['location'];
    $services = $_POST['services'];
    $password = $_POST['password'];

    
$sql="UPDATE c_profile SET id='$id', name='$name',email='$email',phone='$phone',address='$address',location='$location',password='$password',services='$services' WHERE `c_profile`.`id` = $id ";
 
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
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" value="<?php echo $row['name']?>" placeholder="Your Name"/ >
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email material-icons-name"></i></label>
                                <input type="email" name="email" id="email"  value="<?php echo $row['email']?>" placeholder="Your Email"/ >
                            </div>

                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone material-icons-name"></i></label>
                                <input type="tel" name="phone" id="phone" value="<?php echo $row['phone']?>"placeholder="Your phone "/ >
                            </div>

                            <div class="form-group">
                                <label for="address"><i class="zmdi zmdi-home material-icons-name"></i></label>
                                <input type="text" name="address" id="address" value="<?php echo $row['address']?>" placeholder="Enter address"/ >
                            </div>

                            <div class="form-group">
                                <label for="location"><i class="zmdi zmdi-pin material-icons-name"></i></label>
                                <input type="text" name="location" id="location" value="<?php echo $row['location']?>" placeholder="Your location"/ >
                            </div>

                            <div class="form-group">
                                <label for="services"><i class="zmdi zmdi-star material-icons-name"></i></label>
                                <input type="text" name="services" id="services" value="<?php echo $row['services']?>" placeholder="services you looking for"/ >
                            </div>

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock material-icons-name"></i></label>
                                <input type="password" name="password" id="password" value="<?php echo $row['password']?>" placeholder="Password"/ >
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
