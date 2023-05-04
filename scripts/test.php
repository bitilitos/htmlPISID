<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="common.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<main>
    <section>
        <div class="info-box">
            <div class="info-box-content">
                <div class="leftColumn">
                    <figure><img src="images/ratLogin.svg" class="info-box-image-rat"></figure>
                </div>
                <div class="rightColumn">
                    <div class="info-box-form-content">
                        <h1 class="loginTitle"><span class="underline">L</span>ogin</h1>
                        <form method="post" action="login.php">
                            <img src="images/username.png" class="iconLogin"><input class="loginInput1" type="text" name="username" placeholder=" Enter your username" required><br>
                            <img src="images/padlock.png" class="iconLogin"><input class="loginInput2" type="password" name="password" placeholder=" Enter your password" required><br>
                            <input class="loginButton" type="submit" value="Login">
                            <div class="alert"><?php include 'login.php'; sendAlert();?></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
</body>
</html>
