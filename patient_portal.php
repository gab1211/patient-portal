<?php
session_start();

// Simple authentication check
if (isset($_POST['username']) && isset($_POST['password'])) {
    // In a real portal, use a database and hashed passwords!
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'password') {
        $_SESSION['user'] = $_POST['username'];
    } else {
        $error = "Invalid credentials.";
    }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// If logged in, show portal
if (isset($_SESSION['user'])):
?>
<!DOCTYPE html>
<html>
<head>
    <title>Androcie Bagtas Lying-in Clinic Portal</title>
    <style>
        body { font-family: Arial; background: yellow; }
        h2 {color: black}
        .container { max-width: 400px; margin: 50px auto; background: gold; padding: 30px; border-radius: 8px; }
        a { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo htmlspecialchars($_SESSION['user']); ?>!</h2>
        <p>This is your portal dashboard.</p>
        <ul>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Messages</a></li>
        </ul>
        <a href="?logout=1">Logout</a>
    </div>
</body>
</html>
<?php
else:

<!DOCTYPE html>
<html>
<head>
    <title>Login - PHP Portal</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container { max-width: 300px; margin: 100px auto; background: gold; padding: 30px; border-radius: 8px; }
        input { width: 100%; padding: 8px; margin: 8px 0; }
        .error { color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <?php if (!empty($error)): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        <form method="post">
            <input type="text" name="username" placeholder="Username" required autofocus>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
<?php
endif;
?>