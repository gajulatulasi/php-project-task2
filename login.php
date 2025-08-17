<?php
require 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $query->bind_param("s",$username);
    $query->execute();
    $result = $query->get_result()->fetch_assoc();

    if($result && password_verify($password, $result['password'])){
       $_SESSION['user_id'] = $result['id'];
       header("Location: index.php");
       exit;
    }else{
       echo "Invalid login.";
    }
}
?>
<form method="POST">
 Username: <input type="text" name="username" required><br>
 Password: <input type="password" name="password" required><br>
 <button type="submit">Login</button>
</form>