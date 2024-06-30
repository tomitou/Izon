<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム画面</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>投稿完了</h1>
    </header>
    <main>
        <form>
            <a class="button" href="post.html"></a>
            <input type = "button" class="button" value="戻る" onclick="location.href='home.html'">
        </form>
    </main>
    <footer>
        <p>&copy; 2024 OMG</p>
    </footer>
</body>
</html>


<?php
// フォームからの入力データを取得
$kind = $_POST['kind'];
$amount = $_POST['amount'];
$comment = $_POST['comment'];

// CSVファイルのパスを指定
$file = 'data.csv';

//idを決める
$id = 0;

// 入力データをCSVファイルに追加
$fileHandle = fopen($file, 'a');
$data = [$id, $kind, $amount, $comment];
fputcsv($fileHandle, $data);
fclose($fileHandle);

// 完了メッセージを表示
echo "<p>データが保存されました。</p>";
?>
