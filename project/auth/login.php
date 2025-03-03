<?php
require_once '../config/database.php';
require_once 'middleware.php';
checkGuest();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header("Location: ../index.php");
            exit();
        }
    }
    $error = "Invalid credentials";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 min-h-screen flex items-center justify-center p-4 antialiased">
    <div class="w-full max-w-md">
        <!-- Logo -->
        <div class="text-center mb-8">
            <div class="relative inline-block group">
                <div class="text-3xl font-bold bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 text-transparent bg-clip-text mb-2">
                    KB™
                </div>
                <div class="absolute -inset-4 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-lg opacity-0 group-hover:opacity-20 transition-all duration-300 blur-xl"></div>
            </div>
            <h1 class="text-2xl font-bold text-white mb-2">Welcome Back</h1>
            <p class="text-gray-400">Sign in to your account</p>
        </div>

        <!-- Login Form -->
        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 relative group">
            <div class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-2xl opacity-0 group-hover:opacity-10 transition duration-300 blur-xl"></div>
            <div class="relative">
                <?php if (isset($error)): ?>
                    <div class="bg-red-500/10 border border-red-500/20 text-red-400 rounded-lg p-4 mb-6 text-sm">
                        <?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>

                <form method="POST" action="" class="space-y-6">
                    <div>
                        <label class="block text-sm text-gray-400 mb-2">Username</label>
                        <input type="text" name="username" required class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 transition-all">
                    </div>

                    <div>
                        <label class="block text-sm text-gray-400 mb-2">Password</label>
                        <input type="password" name="password" required class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-3 text-white focus:outline-none focus:border-blue-500 transition-all">
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white py-3 rounded-lg hover:opacity-90 transition-opacity">
                        Sign In
                    </button>
                </form>

                <div class="mt-6 text-center text-sm">
                    <p class="text-gray-400">
                        Don't have an account? 
                        <a href="register.php" class="text-blue-400 hover:text-blue-300 transition-colors">Create one</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
