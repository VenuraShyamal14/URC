<?php

    include_once("../../db_connect.php");


// Get form inputs
$name = $_POST["name"];
$faculty = $_POST["faculty"];
$numPublications = $_POST['publications'];
$image = $_FILES["image"]["name"];
$image_path = "../../img/researchers/" . $image;

// Save image to img folder
move_uploaded_file($_FILES["image"]["tmp_name"], $image_path);

// Save inputs to database
$sql = "INSERT INTO researchers (name, faculty, URL) VALUES ('$name', '$faculty', '$image_path')";
$conn->query($sql);


// Get the ID of the last inserted row
$id = $conn->insert_id;

// Insert the publication data into a separate table
for ($i = 1; $i <= $numPublications; $i++) {
    $publication = $_POST["publication$i"];
    $sql1 = "INSERT INTO publications ( name, faculty, publication) VALUES ( '$name', '$faculty','$publication')";
    $conn->query($sql1);
}



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br><button class=\"btn\" onclick=\"window.location.href='Find_researcher.php';\">back</button>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "<br><button class=\"btn\" onclick=\"window.location.href='Find_researcher.php';\">back</button>";
}

$conn->close();
?>
