
<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['kirim'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // include database connection file
    include_once("koneksi.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO userlogin(id,username,password,email) VALUES('$id','$username','$password','$email')");

    // Show message when user added
    header("location:index.php");
}
?>
