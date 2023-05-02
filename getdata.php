<?php
include('connection.php');


$sql = "SELECT * FROM utilisateur ";
$result = $con->query($sql);
 while($row = $result->fetch_assoc()){
    
    $data[] = $row;
 }

 echo json_encode($data);



?>