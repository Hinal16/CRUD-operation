<?php

include 'php/conn.php';

$id=$_GET['id'];
          $sql= "DELETE from `c_profile` WHERE id = $id";
          $result= mysqli_query($conn,$sql);
           
          if($result){
            echo "We deleted the record successfully";
        }
        else{
            echo "We could not delete the record successfully";
        }


?>
