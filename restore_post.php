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
        <h1>投稿完了!</h1>
    </header>
    <main>
        <form action ="kakunin.php" method = "POST">
            <?php
            
            $kind = $_POST['selected_kind'];

            echo'<input type="hidden" name="selected_kind" value="'.$kind.'"  />';
            ?>
            <a class="button"></a>
            <button type="submit">確認する</button>
        </form>
    </main>
    <?php
// フォームからの入力データを取得
$kind = $_POST['selected_kind'];
$amount = $_POST['amount'];
$comment = $_POST['comment'];

// CSVファイルのパスを指定
$file = 'data.csv';

// 入力データをCSVファイルに追加
$fileHandle = fopen($file, 'a');
$data = [$kind, $amount, $comment];
fputcsv($fileHandle, $data);
fclose($fileHandle);
?>

    <footer>
        <p>&copy; 2024 OMG</p>
    </footer>
</body>
</html>
