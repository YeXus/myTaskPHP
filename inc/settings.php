<!--API BOOSTRAPS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--API FONTAWESOME GOOGLE-->
<script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>

<!--API GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 

<!--CSS-->
<link rel="stylesheet" href="../css/SettingsStyle.css">

<!--START SESSION-->
<?PHP
    SESSION_START();
    // The session need to has started in all pages
    if (!isset($_SESSION)) session_start();

    // Verify if not have the variable to verify the session
    if (!isset($_SESSION['UserId'])) {
        // Destroy the session for security
        session_destroy();
        // And redirect to the login page
        header("Refresh:2; url=../inc/login.php"); exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask - Settings</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <header class="navbarAPP">
                
                <!--====== NAVBAR ======-->
                <nav class="navbar navbar-light bg-light">
                
                    <!--====== USER MESSAGE ======-->
                    <a style="padding-top: 2.5%;">
                        <h6><i class="fas fa-user-circle"></i> Hi <?php echo $_SESSION['UserName']; ?></h6>
                    </a>

                    <div class="navbarBtn">
                        <!--====== BACK TO APP ======-->
                        <a href="app.php" style="padding-right: 10px;">
                            <i class="fas fa-chevron-circle-left"></i>
                        </a>
                    
                        <!--====== LOGOUT ======-->
                        <a href="../functions/logout.php">
                            <i class="fas fa-sign-out-alt"></i>
                        </a>
                    </div>
                </nav>
            </header>
            
            <!--====== APP ======-->
            <div class="app">
                <!--====== LOGO AND TEXT ======-->
                <h3 style="padding-top: 2%;">MyTask <i class="fas fa-cookie-bite"></i></h3>
                <h6>Settings</h6>

                <!--====== SETTINGS FORM ======-->
                <div class="taskForm">
                    <form method="POST" action="#">
                        <!--====== USERNAME ======-->      
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-user" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control" name="username" style="border-left: none;" placeholder="Username">
                        </div>

                        <!--====== EMAIL ======-->      
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                            </div>
                            <input type="email" class="form-control" name="email" style="border-left: none;" placeholder="Email">
                        </div>

                        <!--====== PASSWORD ======-->      
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-lock" aria-hidden="true"></i></div>
                            </div>
                            <input type="password" class="form-control" name="password" style="border-left: none;" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-dark btn-block">CHANGE</buttons>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>