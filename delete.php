<?php
// database connection


require('db.php');


if(isset($_GET['id'])){
   $id=$_GET['id'];
   
   // query string
   $q="DELETE FROM user WHERE id = '$id'";

   $res=$conn->query($q);

   if($res){
    header('location:index.php');
   }else{
    echo "Error";
   }


}




?>