<?PHP 

// Start Session
SESSION_START();

// Include database
require_once("connection.php");

// Verify if user exist in database
if((isset($_POST['username'])) && (isset($_POST['password']))){
    
    // Protect from MYSQLInjection
    $user = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $password = md5($password);

    // Search the data in the database
    $sql = "SELECT * FROM users WHERE username='$user' && password='$password' LIMIT 1";
    $results = mysqli_query($conn, $sql);
    $result = mysqli_fetch_assoc($results);

    // Create sessions with data of the database
    $_SESSION['UserId'] = $result['id'];
    $_SESSION['UserName'] = $result['username'];
    $_SESSION['UserAccess'] = $result['accessLevelId'];

    //Verify, if is empty redirect a error message, else redirect user to application
    if(empty($result)){
        $_SESSION['loginErro'] = "Invalid username or password.";
        header("Refresh:2; url=../inc/login.php"); exit;
    } elseif(isset($result)){
        header("Refresh:2; url=../inc/app.php"); exit;
    } else{
        $_SESSION['loginErro'] = "Invalid username or password.";
        header("Refresh:2; url=../inc/login.php"); exit;
    }

} else {
    $_SESSION['loginErro'] = "Invalid username or password.";
    header("Refresh:2; url=../inc/login.php"); exit;
}

?>