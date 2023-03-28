<?php 
    include_once("../../db_connect.php");
    ?>

<?php
$data = json_decode(file_get_contents("php://input"), true);
$id=$data["Id"];


$query1 = "SELECT * FROM cards WHERE id = $id";
$result1 = mysqli_query($conn, $query1);
$researcher = mysqli_fetch_assoc($result1);


echo $researcher['details'] ;