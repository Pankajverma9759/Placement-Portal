<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Database credentials
    $host = 'localhost';
    $dbname = 'form_data';
    $username = 'root';
    $password = '';

    // Connect to the database
    $conn = new mysqli($host, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get form data
    $user = $conn->real_escape_string($_POST['username']);
    $email = $conn->real_escape_string($_POST['email']);
    $pass = $conn->real_escape_string($_POST['password']);
    $role = $conn->real_escape_string($_POST['Role']);


   // echo ($user);
    //echo ($email);
    //echo ($pass);
    //echo ($role)

    // Check if the email already exists
    $check_email_sql = "SELECT Email FROM user WHERE Email = '$email'";
    $result = $conn->query($check_email_sql);

    if ($result->num_rows > 0) {
        // Email already exists
        echo "<script>alert('Error: This email is already registered. Please use a different email.'); window.history.back();</script>";
    } else {
        // Insert user into the database
        $sql = "INSERT INTO user (Name, Email, Password, Role) VALUES ('$user', '$email', '$pass', '$role')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registration successful!'); window.location.href='login.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="signup.css">
</head>
<body>
  <div class="container">
    <div class="signup-form">
      <h1>Create Account</h1>
      <form  action="" method="POST">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your username" required>
        
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>

        <label for="Role">Role</label>
        <select name="Role" id="Role" required>
    <option value="Admin">Admin</option>
    <option value="Student">Student</option>
    <option value="Recruiter">Recruiter</option>
        </select>

        
        <button type="submit">Sign Up</button>
        <p class="signin-link">Already have an account? <a href="login.php">Sign In</a></p>
      </form>
    </div>
  </div>
</body>
</html>
