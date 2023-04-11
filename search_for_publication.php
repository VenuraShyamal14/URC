<?php 
    include_once("db_connect.php");
?>

<?php




// Connect to the database


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn, "utf8mb4");

// Get keyword from user input
$keyword = $_POST['keyword'];

// Prepare SQL statement
$sql = "SELECT * FROM pubnew WHERE name LIKE '%" . $keyword . "%'";
$result = $conn->query($sql);

$array1 = array();
while($publication = mysqli_fetch_assoc($result) ) {

    $array1[] = $publication;

}
echo json_encode($array1, JSON_UNESCAPED_UNICODE);
// Close connection
$conn->close();

?>

