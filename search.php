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
$sql = "SELECT * FROM pubnew WHERE publication LIKE '%" . $keyword . "%'";
$result = $conn->query($sql);

// Display results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $btn_class= $row["name"];
        echo "<button class=\"$btn_class btn\" onClick=\"clickedname(this)\">";
        echo $row["name"];
        echo ": ";
        echo "</button>". "<br>";
        echo $row["publication"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No results found.";
}

// Close connection
$conn->close();

?>