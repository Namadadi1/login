<?php
require_once '../src/config/database.php';
require_once '../src/controllers/AuthController.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $emailOrPhone = $_POST['emailOrPhone'];
    $password = $_POST['password'];

    $authController = new AuthController();
    $loginResult = $authController->login($emailOrPhone, $password);

    if ($loginResult) {
        // Redirect to a protected page or dashboard
        header('Location: /dashboard.php');
        exit();
    } else {
        $error = "Invalid email/phone number or password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form class="login-container" method="POST" action="index.php">
        <h2>Namadadi site</h2>
        <input type="text" name="emailOrPhone" placeholder="Email/Phone Number" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Enter</button>
        <?php if (isset($error)): ?>
            <p style="color: red;"><?php echo $error; ?></p>
        <?php endif; ?>
        <div class="links">
            <a href="#">Forgot password?</a>
            <a href="#">Sign up</a>
        </div>
    </form>
</body>
</html>