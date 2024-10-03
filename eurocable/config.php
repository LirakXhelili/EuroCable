<?php
$conn = mysqli_connect('localhost','lirak','lirak1234', 'eurocable_user');

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>