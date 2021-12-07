<?php
include 'connect.php';

if(isset($_POST['submit'])) {
    $name=$_POST['Name'];
    $username=$_POST['Username'];
    $password=md5($_POST['Password']);
    $c_password=md5($_POST['c_password']);
    if ($password==$c_password) {
        $sql="INSERT INTO user_table(Name,Username,Password)
        VALUES ('$name','$username','$password')";
        $result=mysqli_query($conn,$sql);
        if(!$result) {
            echo "<script>alert('Something went wrong.')</script>";
        }
    } else { 
        echo "<script>alert('Password doesn't match.')</script>";
    }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Sign-in page </title >
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>

 <body class="container2">
              <form class="login_mail">
                      <div class="signin_input">
                        <input type="text" placeholder="Name" name="Name" value="<?php echo $name; ?>" required>
                    </div>
                    <div class="signin_input">
                          <input type="email" placeholder="Username" name="Username" value="<?php echo $username; ?>" required>
                      </div>
                    <div class="signin_input">
                        <input type="Password" placeholder="Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>
                    </div>
                    <div class="signin_input">
                          <input type="Password" placeholder="Confirm password" name="c_password" value="<?php echo $_POST['c_password']; ?>"  required>
                      </div>
                      <div class="signin_input">
                        <button class="btn"> submit</button>
                        <p class='sign-in'>  <a href='ims_login.html'>Back to Home</a></p>
                    </div>
                  </from>
              </div>
</body>  
</html>
 