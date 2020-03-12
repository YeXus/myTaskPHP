<!--API BOOSTRAPS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--API FONTAWESOME GOOGLE-->
<script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>

<!--API GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="../css/LoginStyle.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask - Login</title>
</head>
<body>
    <div class="container">
        <div class="box">
                <h1>MyTask <i class="fas fa-cookie-bite"></i></h1>
                <h3>Login</h3>
                <div class="items">
                    <form method="POST" action="../functions/register.php">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username">

                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                        
                        <a href="resetpassword.php">Forget my password</a>
                        
                        <div class="buttons">
                            <button type="submit" class="btn btn-success btn-block" href="../inc/register.php">SIGN IN</button>
                            <h6>Dont have a account? <a href="../inc/register.php">Sign up</a></h6>
                        </div>
                    </form>
                <div>    
        </div>
    </div>
</body>
</html>