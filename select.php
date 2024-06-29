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
        <form>
            <input type = "button" value="確認する" onclick="location.href='kakunin.php'">
        </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 OMG</p>
    </footer>
</body>
</html>
