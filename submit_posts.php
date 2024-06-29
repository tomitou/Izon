<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $posts = file_get_contents('posts.json');
    $posts = json_decode($posts, true);

    $new_post = [
        'id' => count($posts) + 1,
        'title' => $title,
        'content' => $content
    ];

    $posts[] = $new_post;
    file_put_contents('posts.json', json_encode($posts, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));

    header('Location: select.php');
    exit;
}
?>
