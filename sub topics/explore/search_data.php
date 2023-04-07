<?php 
    include_once("../../db_connect.php");
    ?>

<?php

$data = json_decode(file_get_contents("php://input"), true);
$id=$data["Id"];

mysqli_set_charset($conn, "utf8mb4");
$query1 = "SELECT * FROM cards WHERE faculty = '$id'";
//$query1 = "SELECT * FROM cards WHERE id = 1";
$result1 = mysqli_query($conn, $query1);
//$researcher = mysqli_fetch_assoc($result1);

$array1 = array();
while($researcher = mysqli_fetch_assoc($result1) ) {

    $array1[] = $researcher;
//$myObj->honorific=$record['honorific'];
//$myObj->initials=$record['initials'];
//$myObj->name = $record['name'];
//$myObj->faculty=$record['faculty'];
//$myObj->URL=$record['URL'];
//$myObj->details=$record['details'];
//$myObj->age = 30;
//$myObj->city = "New York";
}
//$myJSON = json_encode($myObj);

//echo $myJSON;

//echo $researcher ;

echo json_encode($array1, JSON_UNESCAPED_UNICODE);

mysqli_close($conn);
