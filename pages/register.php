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

    <h1>Register</h1>

    <form action="../src/controller/registerController.php" method="POST">
        <div>
            <label for="email">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="email">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">S'enregistrer</button>
        </div>
    </form>

     <!-- footer -->
     <?php include('../includes/footer.php'); ?>
</body>
</html>