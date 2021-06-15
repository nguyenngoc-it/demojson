<?php
include_once 'Data.php';
include_once 'User.php';

$user = new User('Tuyen','123');
Data::addUser($user);
//echo '<pre>';
//print_r(Data::loadData());
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="post">
<!--    <div class="imgcontainer">-->
<!--        <img src="img_avatar2.png" alt="Avatar" class="avatar">-->
<!--    </div>-->

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
            <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $u = $_POST['uname'];
    $p = $_POST['psw'];
    Data::login($u, $p);
}
?>