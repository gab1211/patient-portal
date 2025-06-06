<!DOCTYPE html>
<?php
// Simple login logic (for demonstration only, not secure for production)
$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    // Example credentials
    if ($username === 'admin' && $password === 'password123') {
        $message = 'Login successful!';
    } else {
        $message = 'Invalid username or password.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($message): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>
    <form method="post" action="">
        <label>Username:
            <input type="text" name="username" required>
        </label><br><br>
        <label>Password:
            <input type="password" name="password" required>
        </label><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
<html lang="en">
<head>
    <a href="page2.html">Page 2</a>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Know More About Our Lying-in Clinic</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: #333;
        }
        h1 {
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #333;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #555;
        }
    </style>
</head>
<body>
    <h1>Welcome to Androcie Bagtas Lying-in Clinic Website</h1>
    <p>How can I help you?</p>
    <button onclick="goBack()">Go Back</button>

    <script>
        function goBack() {
            if (window.history.length > 1) {
                window.history.back();
            } else {
                alert("No previous page in history!");
            }
        }
    </script>
    
</body>
</html>