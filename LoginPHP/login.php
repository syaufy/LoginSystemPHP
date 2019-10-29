
<?php
if(isset($_POST['kirim'])){
 $user = $_POST['username'];
 $pass = $_POST['password'];

 include_once("koneksi.php");

 $sql="select * from userlogin where BINARY username='$user' and BINARY password='$pass'";
    $result=mysqli_query($mysqli, $sql);
    $num_rows=mysqli_num_rows($result);
    $row=mysqli_fetch_row($result);
    if($num_rows>0){
        session_start();
        $_SESSION["username"]=$row['username'];
        $_SESSION["password"]=$row['password'];

        echo "<script>location='home.html';</script>";
    } else {
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        echo "<script>location='http://localhost/loginPHP/index.php#login';</script>";
    }

}
?>
