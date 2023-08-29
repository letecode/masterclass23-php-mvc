<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- header -->
    <?php include('includes/header.php'); ?>
    <h1>Login</h1>

    <form action="src/controller/loginController.php" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div>
            <label for="email">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <button type="submit">Se connecter</button>
        </div>

        <a href="pages/register.php">Créer un compte</a>
    </form>

    <!-- footer -->
    <?php include('includes/footer.php'); ?>
</body>
</html>