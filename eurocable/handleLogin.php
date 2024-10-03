<?php

    @include 'config.php';

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = $_POST['password'];  


        $select = "SELECT password, email, id FROM user WHERE user_name = '$username'";
        $result = mysqli_query($conn, $select);


        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $hashed_password = $row['password'];

            
            if (password_verify($password, $hashed_password)) {
                
                session_start();
                $_SESSION['username'] = $username; 
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['user_password'] = $password;

                header('Location: index.php');

            } else {

                echo "Invalid username or password!";
            }
        } else {

            echo "Invalid username or password!";
        }
    }
?>
