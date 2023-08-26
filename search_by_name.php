<?php 
    include_once("db_connect.php");
?>

<?php




// Connect to the database


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get keyword from user input
$keyword = $_POST['keyword'];

// Prepare SQL statement
$sql = "SELECT * FROM researchers WHERE name LIKE '%" . $keyword . "%'";
$result = $conn->query($sql);

$array1 = array();
while($researcher = mysqli_fetch_assoc($result) ) {

    $array1[] = $researcher;

}
echo json_encode($array1, JSON_UNESCAPED_UNICODE);
// Close connection
$conn->close();

?>

