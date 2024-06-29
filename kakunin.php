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
        <h1>あなたの記録</h1>
    </header>
    <main>

        <!--計算結果を提示する場所-->
    <div class = "calculation">
        <article>
            <h2>
                計算結果
            </h2>
        </article>
        <p>あなたは<span class="calculate-result">〇〇mg</span>摂取しています……！！</p>
    </div>

    <br>
    <br>
    
        <!--これまでの投稿を確認する場所-->
    <div class ="memory">
        <article>
            <h2>過去の記録</h2>
            <h3>投稿１</h3>
            <p>ここに投稿内容が表示されます...</p>
        </article>
    </div>
<!--おそらくここでDBにアクセスして過去の投稿を表示-->
    <?php
        $id = $_GET['id'];
        $db = new SQLite3('database.db');
        $stmt = $db->prepare('SELECT title, content FROM posts WHERE id = :id');
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $result = $stmt->execute();
        $post = $result->fetchArray();
        ?>
        <article>
            <h2><?php echo htmlspecialchars($post['title']); ?></h2>
            <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
        </article>
    </main>
    <footer>
        <p>&copy; 2024 OMG</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--自作のJS-->
<script src="load_transition.js"></script>
</body>
</html>
