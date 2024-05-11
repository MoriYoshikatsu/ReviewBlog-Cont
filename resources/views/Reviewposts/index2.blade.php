<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <h1>復習会へようこそ！！</h1>
        <h2>投稿一覧ページ</h2>
        <div>
            @foreach($items as $item)
                <div>
                    <h2>
                        タイトル：<a href="/reviewpost/{{ $item->id }}">{{ $item->title }}</a>
                    </h2>
                    <p class='body'>本文：{{ $item->body }}</p>
                </div>
            @endforeach
        </div>
        <div>
            [<a href='/reviewpost/create'>新規作成</a>]
        </div>
        <div class='paginate'>
            {{ $items->links() }}
        </div>
    </body>
</html>