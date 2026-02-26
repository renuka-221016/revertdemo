
<?php
include 'connect.php';
if ($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['signup']))
{
    echo "Method is post method"."<br>";

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from users where username='$username'";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if ($result){
    /*if($num>0){
        echo "USERNAME ALREADY EXISTS"."<br>";
}*/

    
    if (isset($_POST['username']) && isset($_POST['password']))
{
    $sql="insert into users(username,password) values ('$username','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "SignUp Successfull"."<br>";
    }
    else{
        die(mysqli_error($con));
    }
}
else{
    echo "Please fill both the fields"."<br>";
}
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
        </head>
        <body>
            <form action="signup.php" method="POST">
                <h2>SIGNUP</h2>
                UserName:<input type="text" name="username" required><br>
                Password:<input type="password" name="password" required><br>
                <input type="submit" name="signup"  value="SIGNUP" class="submit" ><br>
                
</form>
</body>

</html>




