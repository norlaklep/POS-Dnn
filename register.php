<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Managemen Apotek</title>
    <!--Boostrap CSS-->
    <link rel="stylesheet" href="dist\css\bootstrap.min.css">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="dist\css\style.css">
</head>

<body>
    <!-- WRAPPER-->
    <div class="wrapper">
        <section>
            <center>
                Register Form
            </center>
            <!--Form Register-->
            <form action="" class="header" method="post">
                <div class="field input">
                    <label for="">Username</label>
                    <input type="text" name="username" placeholder="masukan nama">
                </div>
                <div class="field input">
                    <label for="">Password</label>
                    <input type="password" name="Password" placeholder="masukan password">
                </div>
                <div class="field input">
                    <label for="">Confirm Password</label>
                    <input type="password" name="confirm_password" placeholder="masukan password lagi">
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Register">
                </div>
                <div class="error-text">

                </div>
                <a href="index.php" class="link">Login </a>
            </form>
            <!--Form Register-->
        </section>
    </div>
    <!--WRAPPER-->
</body>

</html>