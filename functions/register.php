<?PHP 

// Start a session
session_start();

// Include the databse connection
include_once("connection.php");

// Filter the inputs to protect the application from mysqli attacks
/*$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = md5(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
$photo = filter_input(INPUT_POST, 'photo', FILTER_SANITIZE_STRING);*/

// Variables
$username = $_POST['username'];
$email = $_POST['email'];
$password = md5($_POST['password']);

// Insert the values of the form in the database
$result_users = "INSERT INTO users (username, email, password, acessLevel_id, created) VALUES ('$username', '$email', '$password', '', NOW())";

// This has made a query with the register of the values from $result_users in the database
$result_user = mysqli_query($conn, $result_users);

// Verify if the user has been registered or no and make a action
if(mysqli_insert_id($conn)){
    header("Refresh:2; url=../inc/login.php");
} else{
    header("Location: ../");
}

?>