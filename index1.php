<?php

require("db.php");

$q="SELECT * FROM contact ";

$res=$conn->query($q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        width: 100%;
        height: 100%;
        background-image: url(img/s.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      
    }
table{
    border-collapse: collapse;
    color:white;
    
}
th{
    padding: 20px;
}
td{
   padding-left:20px;
   padding-right:10px;
   padding-top:10px;
   padding-bottom:10px;
}
a{
color:white;
text-decoration:none;
}
.a1{

}
button{
    padding:10px;
    background:gray;
    border:none;
   
}
.b1{
    padding-left:20px;
   padding-right:20px;
   padding-top:10px;
   padding-bottom:10px;
   background:red;
   border:none;
}
h1{
    text-align:center;
    color:white;
}
</style>
<body>
<button><a class="a1" href="Contact.php">back</a></button>   
    <h1>Contact Information</h1>

<table border="2" align="center" >

<tr>
        <td>Id</td>
        <td>Massage</td>
        <td>Name</td>
        <td>Email</td>
        <td>Subject</td>
        <td>Action</td>
    </tr>

<?php

while ($data=$res->fetch_object()){
   
    echo '<tr>';
        echo '<td>'.$data->id.'</td>';
        echo '<td>'.$data->Massage.'</td>';
        echo '<td>'.$data->Name.'</td>';
        echo '<td>'.$data->Email.'</td>';
        echo '<td>'.$data->Subject.'</td>';
        echo '<td>
        <button class="b1" ><a href="delete1.php?id='.$data->id.'">delete</a></button> </td>';
        echo "</tr>";
}
?>

</table>
</body>
</html>



