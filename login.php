<?php
session_start();

if (isset($_SESSION['username'])) {
    header("Location: dashboard.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Misalnya verifikasi username dan password dengan hardcode
    if ($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        echo "<script>Swal.fire('Berhasil', 'Login berhasil!', 'success').then(() => { window.location.href = 'dashboard.php'; });</script>";
    } else {
        echo "<script>Swal.fire('Gagal', 'Username atau password salah!', 'error');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Login</h2>
            <form method="POST" action="login.php">
                <label for="username" class="block mb-2">Username:</label>
                <input type="text" id="username" name="username" class="w-full p-2 border border-gray-300 rounded mb-4" required>
                <label for="password" class="block mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full p-2 border border-gray-300 rounded mb-4" required>
                <input type="submit" value="Login" class="w-full bg-blue-500 text-white p-2 rounded">
            </form>
        </div>
    </div>
</body>
</html>
