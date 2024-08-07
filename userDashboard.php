<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
    session_start();
    if ($_SESSION['status'] == "login") {
        echo "<h1>Hai " . $_SESSION['username'] . "</h1><br>";
        echo "<a href='sessionLogout.php'>Logout</a>";
    }
    ?>
</body>

</html>