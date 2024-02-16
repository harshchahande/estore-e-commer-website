<?php
$conn=new mysqli('localhost','root','','live project');

if($conn->connect_errno){
    echo "connection error";
}


?>