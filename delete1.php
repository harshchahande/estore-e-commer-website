<?php


    require('db.php');

    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $q="DELETE FROM contact WHERE id='$id'";

        $res=$conn->query($q);

        if($res){
            header('location:index1.php');
        }else{
            echo " data error";
        }
    }





?>