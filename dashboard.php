<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-6 rounded-lg shadow-lg text-center">
            <h2 class="text-2xl font-bold mb-4">Selamat datang, <?php echo $_SESSION['username']; ?></h2>
            <a href="logout.php" class="bg-blue-500 text-white p-2 rounded">Logout</a>
        </div>
    </div>
</body>
</html>
