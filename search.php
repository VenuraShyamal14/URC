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
$sql = "SELECT * FROM publications WHERE publication LIKE '%" . $keyword . "%'";
$result = $conn->query($sql);

// Display results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<u>";
        echo $row["name"];
        echo ": ";
        echo "</u>". "<br>";
        echo $row["publication"] . "<br>";
        echo "<hr>";
    }
} else {
    echo "No results found.";
}

// Close connection
$conn->close();

?>