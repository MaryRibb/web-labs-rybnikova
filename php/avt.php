<?php 
$pass = $_POST['password'];

if ($pass ==12345 )
{
    session_start();
    $_SESSION['addmin'] = true;
    $script='sessia.php';
}
else
echo '<p>Пароль не правильный</p>';
header("Location:$script");
?>