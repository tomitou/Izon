<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿画面</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
    </nav>
    <header>
        <h1>投稿画面</h1>
    </header>
    <main>
        <form action="post.html" method="post">
            <select name = "kind" size ="1">
                <option value="caffein">カフェイン</option>
                <option value="snack">お菓子</option>
            </select>
            <label for="title">使用量:</label>
            <input type="text" id="title" name="title" required>
            <br>
            

            <label for="content">内容:</label>
            <textarea id="content" name="content" rows="4" required></textarea>
            
            <br>
            <button type="submit">投稿して確認する</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 サイト</p>
    </footer>
</body>
</html>

<!--ボタンを押した際にSQLに格納する-->
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