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
        <form action="restore_post.php" method="post">
            <select name = "kind" size ="1">
                <option value="caffein">カフェイン</option>
                <option value="snack">お菓子</option>
            </select>
            <label for="title">使用量:</label>
            <input type="text" id="amount" name="amount" required>
            <br>
            

            <label for="content">内容:</label>
            <textarea id="comment" name="comment" rows="4" required></textarea>
            
            <br>
            <button type="submit">投稿して確認する</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 サイト</p>
    </footer>
</body>
</html>