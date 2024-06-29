<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>投稿内容確認画面</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>投稿内容確認画面</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">ホーム</a></li>
            <li><a href="post.php">投稿</a></li>
            <li><a href="select.php">投稿選択</a></li>
        </ul>
    </nav>
    <main>
        <?php
        $id = $_GET['id'];
        $posts = file_get_contents('posts.json');
        $posts = json_decode($posts, true);
        $post = array_filter($posts, function($post) use ($id) {
            return $post['id'] == $id;
        })[0];
        ?>
        <article>
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
        </article>
    </main>
    <footer>
        <p>&copy; 2024</p>
    </footer>
</body>
</html>
