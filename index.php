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
                Login Form
            </center>
            <!--Form Login-->
            <form action="" class="header" method="post">
                <div class="field input">
                    <label for="">Username</label>
                    <input type="text" name="username" placeholder="masukan nama">
                </div>

                <div class="field input">
                    <label for="">Password</label>
                    <input type="text" name="password" placeholder="masukan password">
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Login">
                </div>
                <div class="error-text">

                </div>
                <a href="register.php" class="link">Register disini</a>
            </form>
            <!--Form Login-->

        </section>
    </div>
    <!--WRAPPER-->
</body>

</html>