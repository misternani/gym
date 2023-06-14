<?php
session_start();
include_once 'dbConnection.php';

if (!(isset($_SESSION['username']))) {
    header("location:login.php");
}

$title = $_POST['title'];
$videolink = $_POST['videolink'];
$blogpost = $_POST['blogpost'];


// Directory to store the uploaded files
$targetDir = "blogcontent/";

// Get the file names
$fileName1 = $_FILES["headerimage"]["name"];
$fileName2 = $_FILES["blogvideo"]["name"];

// File paths for moving the uploaded files
$targetFilePath1 = $targetDir . $fileName1;
$targetFilePath2 = $targetDir . $fileName2;


    // Upload files to the server
    if (move_uploaded_file($_FILES["headerimage"]["tmp_name"], $targetFilePath1) && move_uploaded_file($_FILES["blogvideo"]["tmp_name"], $targetFilePath2)) {
        // Store file names in the database
        $query = "INSERT INTO blog (title,blogtext,blogheaderimage,blogvideo,videolink) 
                  VALUES ('$title', '$blogpost', '$fileName1', '$fileName2', '$videolink')";
        $result = mysqli_query($con, $query);
        
        if ($result) {
            echo "Files uploaded and stored in the database successfully.";
        } else {
            echo "Error storing file names in the database: " . mysqli_error($con);
        }
    } else {
        echo "Error uploading files to the server.";
    }

?>
