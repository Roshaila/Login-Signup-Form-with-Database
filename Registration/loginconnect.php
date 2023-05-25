<?php
	$con = mysqli_connect('localhost', 'root', '', 'test');
	$name = $_POST['name'];
    $password = $_POST['password'];
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }
    else echo "Failed";
    $query = "SELECT * FROM registration where name = '$name' AND password = '$password'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows == 1){
    	header("Location: loginsuccess.php");

    } 
    else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='loginform.php'>Login</a> again.</p>
                  </div>";
        }
        mysqli_close($con);


?>