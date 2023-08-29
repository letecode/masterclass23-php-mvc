<?php
    include_once('../src/models/user.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- header -->
    <?php include('../includes/header.php'); ?>

    <h1>Mon profile</h1>

    <h2><?php echo $user['name']; ?></h2>
    <p><?php echo $user['email']; ?></p>

    <form action="../src/controller/logoutController.php" method="post">
        <button type="submit">Se deconnecter</button>
    </form>

     <!-- footer -->
     <?php include('../includes/footer.php'); ?>
</body>
</html>