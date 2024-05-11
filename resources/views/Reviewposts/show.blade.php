<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1>復習会へようこそ！！</h1>
        <h1>投稿詳細ページ</h1>
        <h2>
            タイトル：{{ $post->title }}
        </h1>
        <div>
            <div>
                <p>本文：{{ $post->body }}</p>    
            </div>
        </div>
        <div>
            <a href="/reviewpost1">index1へ戻る</a>
            <a href="/reviewpost2">index2へ戻る</a>
        </div>
    </body>
</html>