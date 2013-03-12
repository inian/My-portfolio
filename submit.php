 <?php
require_once 'config.php';
var_dump($_POST);
db_connect();
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];
$query = mysql_query("INSERT into comments (name, email, comment) VALUES ('$name', '$mail', '$message' )");
if(!$query) {
    die(mysql_error());
}
header("Location: http://ec2-46-137-197-194.ap-southeast-1.compute.amazonaws.com/");
?>
