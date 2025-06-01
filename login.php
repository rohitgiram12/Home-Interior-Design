<?php
session_start();
include("connection.php"); // Include database connection

$message = ""; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (!empty($email) && !empty($password)) {
        // Fetch user from database
        $query = "SELECT * FROM login WHERE email = ?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $user = $result->fetch_assoc();

            // Debugging: Print stored hashed password
            // echo "Stored Hash: " . $user['pass']; exit();

            // 🔹 Verify the hashed password
            if (password_verify($password, $user['pass'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['usname'] = $user['usname'];

                header("Location: index.html"); // Redirect to home page
                exit();
            } else {
                $message = "Incorrect password!";
            }
        } else {
            $message = "No account found with this email!";
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
    <title>User Login</title>
</head>
<body>
    <h2>Login Here</h2>
    
    <form method="POST" action="">
        <label>Email:</label>
        <input type="email" name="email" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>

    <p><?php echo $message; ?></p>

    <p>Don't have an account? <a href="register.php">Register here</a></p>
</body>
</html>
