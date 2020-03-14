<!--API BOOSTRAPS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--API FONTAWESOME GOOGLE-->
<script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>

<!--API GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="../css/RegisterStyle.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask - Register</title>
</head>
<body>
    <div class="container">
        <div class="box">
                <h1>MyTask <i class="fas fa-cookie-bite"></i></h1>
                <h4>Register</h4>
                <div class="items">
                    <form method="POST" action="../functions/register.php">
                        <!--====== USERNAME ======-->      
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-user" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control" name="username" style="border-left: none;" placeholder="username">
                        </div>

                        <!--====== EMAIL ======-->      
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                            </div>
                            <input type="email" class="form-control" name="email" style="border-left: none;" placeholder="email">
                        </div>

                        <!--====== PASSWORD ======-->      
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-lock" aria-hidden="true"></i></div>
                            </div>
                            <input type="password" class="form-control" name="password" style="border-left: none;" placeholder="password">
                        </div>

                        <!--====== PHOTO ======-->      
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-camera" aria-hidden="true"></i></div>
                            </div>
                            <input type="file" class="form-control" name="photo" style="border-left: none;">
                        </div>

                        <div class="buttons">
                            <button type="submit" class="btn btn-dark btn-block" href="../inc/register.php">LETS GO!</button>
                            <h6 style="padding-top: 4%;">You already have a account? <a href="../inc/login.php">Sign in</a></h6>
                        </div>
                    </form>
                <div>    
        </div>
    </div>
</body>
</html>