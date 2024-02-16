
<?php

require('db.php');
// query string

$q="SELECT * FROM user ";

// query results
$res= $conn->query($q);

// echo "<pre>";
// print_r($res);
// $data=$res->fetch_object();
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
<button><a class="a1" href="estore.php">back</a></button>   
    <h1>User Information</h1>

<table border="2" align="center" >

<tr >
    <th >Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Massage</th>
    <th>Action</th>
</tr>

<?php

while ($data=$res->fetch_object()){
   
   echo "<tr>";
   echo '<td>'.$data->id.'</td>';
   echo '<td>'.$data->Name.'</td>';
   echo '<td>'.$data->Email.'</td>';
   echo '<td>'.$data->Mobile.'</td>';
   echo '<td>'.$data->Massage.'</td>';
   echo '<td>
  <button class="b1"> <a href="delete.php?id='.$data->id.'">delete</a></button>
   </td>';
   echo "</tr>";
}
?>

</table>
</body>
</html>