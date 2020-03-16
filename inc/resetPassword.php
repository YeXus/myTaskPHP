<!--API BOOSTRAPS-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!--API FONTAWESOME GOOGLE-->
<script src="https://kit.fontawesome.com/00ef49d3c2.js" crossorigin="anonymous"></script>

<!--API GOOGLE FONTS-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Chettan+2&display=swap" rel="stylesheet"> 

<link rel="stylesheet" href="../css/resetPasswordStyle.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyTask - Reset Password</title>
</head>
<body>
    <div class="container">
        <div class="box">
                <h1>MyTask <i class="fas fa-cookie-bite"></i></h1>
                <h4>Reset your password</h4>
                <div class="items">
                    <form method="POST" action="../functions/resetpassword.php">
                        <!--====== EMAIL ======--> 
                        <label>Put your email address below, we will send an email containing your password</label>     
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style="background-color: #ffff; border-right: none;"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                            </div>
                            <input type="email" class="form-control" name="email" style="border-left: none;" placeholder="Email">
                        </div>
                        <!--====== BUTTONS ======--> 
                        <div class="buttons">
                            <button type="submit" class="btn btn-dark btn-block">SEND</button>
                            <h6 style="padding-top: 4%;">Dont have a account? <a href="../inc/register.php">Sign up</a></h6>
                        </div>
                    </form>
                <div>    
        </div>
    </div>
</body>
</html>