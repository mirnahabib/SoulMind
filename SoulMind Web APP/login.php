<?php
session_start();
$DATABSE_HOST = 'localhost';
$DATABSE_USER = 'root';
$DATABSE_PASS = '';
$DATABSE_NAME = 'web assignment';

$conn = mysqli_connect($DATABSE_HOST,$DATABSE_USER,$DATABSE_PASS,$DATABSE_NAME);

    if(mysqli_connect_error()){
    exit('Error connecting to the database' . mysqli_connect_error());
}
if(isset($_POST["login"])){
$email=$_POST['email'];
$pass=$_POST['password'];
$result=mysqli_query($conn,$sql="select * from users where email='$email' and password='$pass'");
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);

if($row>0 && isset($_POST['checkbox'])) {
  $_SESSION["loggedin"]= true;
  $_SESSION['login_user'] = $myusername;
  header("location: SoulMind.php");
}
elseif($row >0 && !isset($_POST['checkbox'])){
  $_SESSION["loggedin"]= false;
  $_SESSION['login_user'] = $myusername;
  header("location: SoulMind.php");
 }
else {
  $error="Your Email or Password may be wrong.Try again";
}
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: SoulMind.php");
  exit;
}
}
$conn->close();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="logstyle.css">
</head>

<body>
    <div class="firstdiv">
        <form method="post" onsubmit="return signup()" action="login.php">
            <h1>Secret Diary</h1>
            <h5>Store your thoughts permanently and securely.</h5>
            <br>
            <div id="wrong" class="p-3 bg-danger-subtle rounded-3" style="color: rgb(204, 106, 106); display: none;">
                <h4 id="paragraph">
                </h4>
            </div>
            <h6>Log in using your email and password.</h6>
            <input placeholder="Your Email" type="email" id="email" name="email"
                style="width: 400px; transform: translateX(50px);" class="form-control"><br>
            <input placeholder="Password" type="password" id="password" name="password"
                style="width: 400px; transform: translateX(50px);" class="form-control"><br>
            <input type="checkbox" name="checkbox"> <label>Keep me signed in</label><br><br>
            <button type="submit" class="btn btn-outline-success btn-lg px-5">Log in!</button><br><br>
            <a href="signup.php">Sign up</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>