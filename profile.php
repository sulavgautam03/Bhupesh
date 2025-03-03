<?php
session_start();
require_once 'config/database.php';
require_once 'auth/middleware.php';
checkAuth();

$user_id = $_SESSION['user_id'];
$stmt = $conn->prepare("SELECT username, email, age FROM users WHERE id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['update_profile'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        
        $stmt = $conn->prepare("UPDATE users SET username = ?, email = ?, age = ? WHERE id = ?");
        $stmt->bind_param("ssii", $username, $email, $age, $_SESSION['user_id']);
        
        if ($stmt->execute()) {
            $success = "Profile updated successfully!";
        } else {
            $error = "Error updating profile. Please try again.";
        }
    } elseif (isset($_POST['delete_account'])) {
        $id = $_SESSION['user_id'];
        $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        
        if ($stmt->execute()) {
            session_destroy();
            header("Location: login.php");
            exit();
        } else {
            $error = "Error deleting account. Please try again.";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900 min-h-screen antialiased">
    <!-- Navigation -->
    <nav class="fixed w-full top-0 left-0 right-0 bg-gray-900/80 backdrop-blur-md border-b border-white/10 z-50 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <a href="index.php" class="flex items-center space-x-2 text-white/80 hover:text-white transition-all duration-300 group">
                    <div class="p-2 rounded-lg bg-white/5 group-hover:bg-white/10 transition-all duration-300">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <span>Back</span>
                </a>
                <div class="text-2xl font-bold bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 text-transparent bg-clip-text">KB™</div>
                <a href="auth/logout.php" class="px-4 py-2 rounded-lg bg-red-500/10 hover:bg-red-500 text-red-400 hover:text-white text-sm transition-all duration-300 border border-red-500/20">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <main class="pt-28 pb-12 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Profile Card -->
            <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 border border-white/10 mb-8">
                <div class="flex flex-col items-center">
                    <div class="w-24 h-24 relative group">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-full blur-md opacity-75 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative w-full h-full bg-gray-900 rounded-full flex items-center justify-center border-2 border-white/10">
                            <span class="text-3xl font-bold text-transparent bg-gradient-to-r from-blue-400 to-purple-400 bg-clip-text">
                                <?php echo strtoupper(substr($user['username'], 0, 1)); ?>
                            </span>
                        </div>
                    </div>
                    <h1 class="text-2xl font-bold mt-4 mb-2"><?php echo htmlspecialchars($user['username']); ?></h1>
                    <p class="text-blue-400"><?php echo htmlspecialchars($user['email']); ?></p>
                </div>
            </div>

            <!-- Profile Content Grid -->
            <div class="grid md:grid-cols-2 gap-6">
                <!-- Info Section -->
                <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                    <h2 class="text-xl font-semibold mb-6 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 text-transparent bg-clip-text">
                        Profile Information
                    </h2>
                    <?php if (isset($success)): ?>
                        <div class="bg-green-500/10 border border-green-500/20 text-green-400 rounded-lg p-4 mb-6 text-sm">
                            <?php echo htmlspecialchars($success); ?>
                        </div>
                    <?php endif; ?>
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm text-gray-400">Username</label>
                            <p class="text-white"><?php echo htmlspecialchars($user['username']); ?></p>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400">Email</label>
                            <p class="text-white break-all"><?php echo htmlspecialchars($user['email']); ?></p>
                        </div>
                        <div>
                            <label class="block text-sm text-gray-400">Age</label>
                            <p class="text-white"><?php echo htmlspecialchars($user['age']); ?></p>
                        </div>
                    </div>
                </div>

                <!-- Edit Section -->
                <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-6 border border-white/10">
                    <h2 class="text-xl font-semibold mb-6 bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 text-transparent bg-clip-text">
                        Edit Profile
                    </h2>
                    <form method="post" action="" class="space-y-4">
                        <div>
                            <input type="text" name="username" value="<?php echo htmlspecialchars($user['username']); ?>"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <input type="number" name="age" value="<?php echo htmlspecialchars($user['age']); ?>"
                                class="w-full bg-white/10 border border-white/20 rounded-lg px-4 py-2 text-white focus:outline-none focus:border-blue-500">
                        </div>
                        <button type="submit" name="update_profile"
                            class="w-full bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-lg transition-colors">
                            Update Profile
                        </button>
                    </form>

                    <!-- Delete Account -->
                    <div class="mt-8 pt-6 border-t border-white/10">
                        <form method="post" action="" onsubmit="return confirm('Are you sure you want to delete your account?');">
                            <input type="hidden" name="delete_account" value="1">
                            <button type="submit" 
                                class="w-full bg-red-500/10 hover:bg-red-500 text-red-400 hover:text-white py-2 px-4 rounded-lg transition-all">
                                Delete Account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
