<?php


session_start();

if (!isset($_SESSION['user_email']) || empty($_SESSION['user_email'])) {
    header('location:../auth/login.php');
    exit;
}
include '../global/font.php';
include '../global/css.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body class="h-full w-full d-flex">
    <div style="width: 13%;" class="bg-dark"> <?php include '../components/sidebar.php' ?></div>
    <!-- <p class="card-text"> <?php echo $_SESSION['user_name'] ?></p> -->
    <div style="width: 87%;" class="p-4 d-flex">
        <div class="card h-25 mx-4">
            <div class="card-body d-flex align-items-center" style="flex-direction: column;">
                <p class="fs-3 text-warning fw-bolder">10</p>
                <p>Admin Account</p>
            </div>
        </div>

        <div class="card h-25">
            <div class="card-body d-flex align-items-center" style="flex-direction: column;">
                <p class="fs-3 text-warning fw-bolder">123</p>
                <p>Website Visit Count</p>
            </div>
        </div>

    </div>
</body>

</html>