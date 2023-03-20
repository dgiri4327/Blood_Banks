<?php
    error_reporting(0);      
    include('DB_Connection.php');  
    $username = $_POST['u_name'];  
    $password = $_POST['u_password'];  
      

        $sql = "select * from user where username= '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $count = mysqli_num_rows($result);  

        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
			//header("location:index.html"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
		    echo "<a href='login.html'> Please re-login </a>";  
        }     
?>  