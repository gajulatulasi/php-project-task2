<?php
require 'config.php';
if(!isset($_SESSION['user_id'])) header("Location: login.php");

$result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
?>
<a href="logout.php">Logout</a> | <a href="create.php">Add New Post</a><br><br>
<?php while($row = $result->fetch_assoc()): ?>
    <h3><?= $row['title']; ?></h3>
    <p><?= $row['content']; ?></p>
    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
    <hr>
<?php endwhile; ?>