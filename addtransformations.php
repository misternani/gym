<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:login.php");
}

$name = $_POST['name'];
$age = $_POST['age'];
$weightbefore = $_POST['weightBefore'];
$weightafter = $_POST['weightAfter'];
$description = $_POST['description'];
$duration = $_POST['duration'];

// Directory to store the uploaded files
$targetDir = "transform/";

// Get the file names
$fileName1 = $_FILES["beforeImage"]["name"];
$fileName2 = $_FILES["afterImage"]["name"];

// File paths for moving the uploaded files
$targetFilePath1 = $targetDir . $fileName1;
$targetFilePath2 = $targetDir . $fileName2;

// Check if the file types are allowed
$allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
$fileType1 = pathinfo($targetFilePath1, PATHINFO_EXTENSION);
$fileType2 = pathinfo($targetFilePath2, PATHINFO_EXTENSION);

if (in_array($fileType1, $allowTypes) && in_array($fileType2, $allowTypes)) {
    // Upload files to the server
    if (move_uploaded_file($_FILES["beforeImage"]["tmp_name"], $targetFilePath1) && move_uploaded_file($_FILES["afterImage"]["tmp_name"], $targetFilePath2)) {
        // Store file names in the database
        $query = "INSERT INTO transformations (beforeimage, afterimage, `name`, age, duration, weightbefore, weightafter, `description`) 
                  VALUES ('$fileName1', '$fileName2', '$name', '$age', '$duration', '$weightbefore', '$weightafter', '$description')";
        $result = mysqli_query($con, $query);
        
        if ($result) {
            echo "Files uploaded and stored in the database successfully.";
        } else {
            echo "Error storing file names in the database: " . mysqli_error($con);
        }
    } else {
        echo "Error uploading files to the server.";
    }
} else {
    echo "Invalid file types. Allowed file types are: " . implode(", ", $allowTypes);
}

?>
