<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿選択画面</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>選択画面</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">ホーム</a></li>
            <li><a href="post.php">投稿</a></li>
            <li><a href="select.php">投稿選択</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>確認する</h2>
            <ul>
                <?php
                $db = new SQLite3('database.db');
                $result = $db->query('SELECT id, title FROM posts');
                while ($row = $result->fetchArray()) {
                    echo "<li><a href='kakunin.php?id={$row['id']}'>{$row['title']}</a></li>";
                }
                ?>
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024</p>
    </footer>
</body>
</html>
