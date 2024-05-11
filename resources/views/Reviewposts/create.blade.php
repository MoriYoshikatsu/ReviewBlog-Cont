<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>復習会へようこそ！！</h1>
        <h2>投稿作成ページ</h2>
        <form action="/reviewpost" method="POST">
            @csrf
            <div>
                <h2>Title</h2>
                <input type="text" name="item[title]" placeholder="タイトル"/>
                <p style="color:red">{{ $errors->first('item.title') }}</p>
            </div>
            <div>
                <h2>Body</h2>
                <textarea name="item[body]" placeholder="今日も1日お疲れさまでした。"></textarea>
                <p style="color:red">{{ $errors->first('item.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div>
            [<a href="/reviewpost1">戻る</a>]
        </div>
    </body>
</html>