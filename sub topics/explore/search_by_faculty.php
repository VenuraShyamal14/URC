<?php 
    include_once("../../db_connect.php");
    ?>

<?php

$data = json_decode(file_get_contents("php://input"), true);
$id=$data["Id"];

mysqli_set_charset($conn, "utf8mb4");
$query = "SELECT * FROM researchers WHERE name LIKE '%$id%'";

$result = mysqli_query($conn, $query);

$filteredResults = array();
while ($row = mysqli_fetch_assoc($result)) {
    $parts = explode('.', $row['name']);
    $lastName = end($parts);
    if (stripos($lastName, $id) === 0) {
        $filteredResults[] = $row;
    }
}

echo json_encode($filteredResults, JSON_UNESCAPED_UNICODE);

mysqli_close($conn);
