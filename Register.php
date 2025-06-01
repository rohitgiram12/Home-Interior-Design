<?php
include("connection.php"); // Database connection

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usname = trim($_POST['name']); // Fix: Match input name
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($usname) && !empty($email) && !empty($password)) {
        
        // Check if email already exists
        $check_query = "SELECT * FROM login WHERE email = ?";
        $stmt = $conn->prepare($check_query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $message = "Email is already registered!";
        } else {
            // 🔹 Hash the password before storing
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insert user into database
            $query = "INSERT INTO login (usname, email, pass) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sss", $usname, $email, $hashed_password);
            
            if ($stmt->execute()) {
                $message = "Registration successful! You can now log in.";
                header("location: login.php");
                exit();
            } else {
                $message = "Error in registration!";
            }
        }
        $stmt->close();
    } else {
        $message = "All fields are required!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>User Registration</title>
</head>
<body>
    <h2>Register Here</h2>
    
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Register</button>
    </form>

    <p><?php echo $message; ?></p>

    <p>Already have an account? <a href="login.php">Login here</a></p>
</body>
</html>
