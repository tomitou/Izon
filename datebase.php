<?php
$database = 'mydatabase.sqlite';

try {
    $db = new PDO('sqlite:' . $database);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // テーブルを作成するSQL文
    $sql = "CREATE TABLE users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE
    )";

    // SQL文を実行
    $db->exec($sql);

    echo "テーブルの作成に成功しました。";
} catch (PDOException $e) {
    echo "テーブルの作成に失敗しました: " . $e->getMessage
}