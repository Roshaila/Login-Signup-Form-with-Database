<?php
        //create connection
        $con = mysqli_connect('localhost', 'root', '', 'test');
        
        $account_type = $_POST['account'];
        $email = $_POST['email'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];

        
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO registration (account_type, email, name, password, gender) VALUES ('$account_type', '$email', '$name', '$password', '$gender')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            header("Location: successregister.php");
            //echo "<div class='form'>
              //    <h2>User Successfully Registered...</h3><br/>
               //   </div>";
        }

        //display (ASK SIR)
        //$result = "SELECT * FROM registration";
        //$display = mysqli_query($result);
        //echo $display;
      //connection closed.
        mysqli_close($con);

?>