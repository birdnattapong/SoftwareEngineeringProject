<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Scrummy</title>
    <script src="https://kit.fontawesome.com/75ee461739.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
    <form name="formlogin" action="checklogin.php" method="POST" id="login">
        <div class="box"></div>
        <div class="login-box">
            <h1>Log in</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Email" name="username" required>
            </div>
            <div class="textbox">
                <i class="fas fa-unlock"></i>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <input type="submit" class="btn" value="Sign in">
        </div>
    </form>
</body>
</html>