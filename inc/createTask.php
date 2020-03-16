<!--API BOOSTRAPS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--API FONTAWESOME GOOGLE-->
<script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>

<!--API GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 

<!--CSS-->
<link rel="stylesheet" href="../css/AppStyle.css">

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
    <title>MyTask - New Task</title>
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
                <h6>Create a task</h6>

                <!--====== INSERT TASK ======-->
                <div class="taskForm">
                    <div class="items">
                        <form method="POST" action="../functions/addTask.php">
                            <!--====== TASK ======-->      
                            <div class="input-group mb-2 mr-sm-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-tasks" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" name="task" style="border-left: none;" placeholder="Ex: Fix a bug in my application.">
                            </div>
                            <div class="buttons">
                                <button type="submit" class="btn btn-dark btn-block"><i class="fas fa-plus-circle"></i></button>
                            </div>
                        </form>
                    <div>    
                </div>
            </div>
        </div>
    </div>
</body>
</html>