<?php
session_start();
@include 'config.php'; // Include database connection

if (isset($_POST['save_changes'])) {
    // Get form data
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    // Get the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Prepare the update query
    $update_query = "UPDATE user SET user_name = '$username', email = '$email'";

    // Update password if provided
    if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $update_query .= ", password = '$hashed_password'";
    }

    // Complete the query
    $update_query .= " WHERE id = '$user_id'";

    // Execute the query
    if (mysqli_query($conn, $update_query)) {
        // Update session data
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        if (!empty($password)) {
            $_SESSION['user_password'] = $hashed_password; // Only if password is updated
        }
        header('Location: index.php'); // Redirect after successful update
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}
?>
