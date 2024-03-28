<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h3>Login</h3>
        <form action="login.inc.php" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button>Login</button>
        </form>
        <br>
        <br>
        <h3>Signup</h3>
        <form action="signup.inc.php" method="post">
            <input type="text" name="username" placeholder="Username"><br>
            <input type="password" name="pwd" placeholder="Password"><br>
            <input type="text" name="email" placeholder="Email"><br>
            <button>Signup</button>
        </form>
    </main>
</body>
</html>