<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form_data";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['resume'])) {
    $targetDir = "uploads/";

    // Check if 'uploads/' directory exists, if not, create it
    if (!is_dir($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $fileName = basename($_FILES["resume"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

    // Allowed file types
    $allowedTypes = array("pdf", "doc", "docx");

    if (in_array($fileType, $allowedTypes)) {
        if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFilePath)) {
            // Insert file info into database
            $sql = "INSERT INTO resumes (file_name, file_path) VALUES ('$fileName', '$targetFilePath')";
            if ($conn->query($sql) === TRUE) {
                echo "Resume uploaded successfully: <a href='$targetFilePath'>$fileName</a>";
            } else {
                echo "Error inserting into database: " . $conn->error;
            }
        } else {
            echo "Error moving file. Check folder permissions.";
        }
    } else {
        echo "Invalid file type. Only PDF, DOC, and DOCX allowed.";
    }
} else {
    echo "No file uploaded.";
}

$conn->close();
?>
