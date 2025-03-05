<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database credentials
    $host = 'localhost';
    $dbname = 'form_data';
    $username = 'root';
    $password = '';

    // Define redirection URLs
    define('ADMIN_REDIRECTION', 'Redirection\Admin_Dashboard\admin.php');
    define('STUDENT_REDIRECTION', 'Redirection\Student_Dashboard\demo.php');
    define('RECRUITER_REDIRECTION', 'Redirection\Recruiter_Dashboard\job.php');

    // Connect to the database
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $email = $conn->real_escape_string($_POST['Email']);
    $pass = $conn->real_escape_string($_POST['Password']);

    // Fetch user from the database (without password hash)
    $sql = "SELECT Email, Password, Role FROM user WHERE Email = '$email' AND Password = '$pass'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Set session variables
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Role'] = $row['Role'];

        // Redirect based on role
        if ($row['Role'] === 'Admin') {
            header('Location: ' . ADMIN_REDIRECTION);
        } elseif ($row['Role'] === 'Student') {
            header('Location: ' . STUDENT_REDIRECTION);
        } elseif ($row['Role'] === 'Recruiter') {
            header('Location: ' . RECRUITER_REDIRECTION);
        } else {
            echo "Invalid role!";
        }
        exit();
    } else {
        echo "<script>alert('Invalid Email or Password!'); window.history.back();</script>";
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign In</title>
  <link rel="stylesheet" href="signin.css">
</head>
<body>
  <div class="container">
    <div class="signin-form">
      <h1>Sign In</h1>
      <form  action="" method="POST">

        <label for="username">Email</label>
        <input type="text" id="Email" name="Email" placeholder="Enter your email:" required>
        
        
        <label for="Password">Password</label>
        <input type="password" id="Password" name="Password" placeholder="Enter your password" required>

        
        
        <button type="submit">Sign In</button>
        <p class="signup-link">Don't have an account? <a href="register.php">Sign Up</a></p>
      </form>
    </div>
  </div>
</body>
</html>
