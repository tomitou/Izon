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

        <?php
        //ファイル読み込み
        $f = fopen("data.csv", "r");

        $total_amount = 0;

        $first_skip = 0;
        
        //一行ずつ読み出し
        while($line = fgetcsv($f)){
            
            if($first_skip == 0) {
                $first_skip ++;
                continue;
            }

            for($i = 0; $i<count($line); $i++){
                if($i == 2) $total_amount += intval($line[$i]);
            }
        }

        echo "<p>". "あなたは<span class='calculate-result'>" .$total_amount ."mg</span>摂取しています……！！</p>"
        
        ?>
    </div>

    <br>
    <br>
    
        <!--これまでの投稿を確認する場所-->
    <div class ="memory">
        <article>
            <h2>過去の記録</h2>
            
            <h3>投稿１</h3>
        <?php

        //ファイル読み込み
        $f = fopen("data.csv", "r");

        $first_skip = 0;
        
        //一行ずつ読み出し
        while($line = fgetcsv($f)){
            
            if($first_skip == 0) {
                $first_skip ++;
                continue;
            }

            for($i = 0; $i<count($line); $i++){
                if($i == 3) echo"<p>". $line[$i] . "</p>";
            }
        }
        ?>
        </article>
    </div>
        
    <form>
            <a class="button" href="post.html"></a>
            <input type = "button" class="button" value="戻る" onclick="location.href='home.html'">
    </form>

    </main>
    <footer>
        <p>&copy; 2024 OMG</p>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<!--自作のJS-->
<script src="load_transition.js"></script>
</body>
</html>
