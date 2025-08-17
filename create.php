<?php
require 'config.php';
if(!isset($_SESSION['user_id'])) header("Location: login.php");

if($_POST){
    $title   = $_POST['title'];
    $content = $_POST['content'];
    $stmt = $conn->prepare("INSERT INTO posts (title, content) VALUES (?,?)");
    $stmt->bind_param("ss", $title,$content);
    $stmt->execute();
    header("Location: index.php");
}
?>
<form method="POST">
 Title: <input type="text" name="title" required><br>
 Content:<br><textarea name="content" required></textarea><br>
 <button type="submit">Save</button>
</form>