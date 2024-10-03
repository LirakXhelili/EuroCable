<?php

@include 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $repeat_pass = $_POST['repeat_pass'];


    $select = "SELECT * FROM user WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists!';
    } else {
        if (!password_verify($repeat_pass, $password)) {
            $error[] = 'Passwords do not match!';
        } else {
            $insert = "INSERT INTO user (user_name, email, password) VALUES ('$name', '$email', '$password')";
            mysqli_query($conn, $insert);
            echo "success";
            header('Location: login.php');
            exit();
        }
    }
}
?>
