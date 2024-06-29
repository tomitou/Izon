<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $db = new SQLite3('database.db');
    $stmt = $db->prepare('INSERT INTO posts (title, content) VALUES (:title, :content)');
    $stmt->bindValue(':title', $title, SQLITE3_TEXT);
    $stmt->bindValue(':content', $content, SQLITE3_TEXT);
    $stmt->execute();

    header('Location: select.php');
    exit;
}
?>
