<!--API BOOSTRAPS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--API FONTAWESOME GOOGLE-->
<script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>

<!--API GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="../css/AppStyle.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask - APP</title>
</head>
<body>
    <div class="container">
        <div class="box">
            <header class="navbarAPP">
                
                <!--====== NAVBAR ======-->
                <nav class="navbar navbar-light bg-light">
                
                    <!--====== USER MESSAGE ======-->
                    <a style="padding-top: 2.5%;">
                        <h6><i class="fas fa-user-circle"></i> Hi %user%<?php  ?></h6>
                    </a>

                    <div class="navbarBtn">
                        <!--====== SETTINGS ======-->
                        <a href="settings.php" style="padding-right: 10px;">
                            <i class="fas fa-cog"></i>
                        </a>
                    
                        <!--====== LOGOUT ======-->
                        <a href="login.php">
                            <i class="fas fa-sign-out-alt"></i>
                        </a> <br>
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
                    <form method="POST" action="#">
                        <input type="text" class="form-control" placeholder="Ex: fix bugs" name="task">
                        <button type="submit" class="btn btn-dark btn-block">+</buttons>
                    </form>
                </div>

                <!--====== LIST TASKS ======-->
                <h6>Your Tasks</h6>
                <div class="taskList">
                    <h5>%tasks%</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>