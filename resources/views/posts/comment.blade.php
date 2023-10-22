<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>チーム開発会へようこそ！</h1>
        <h2>コメント投稿</h2>
        <form action="/posts/comment" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>本文</h2>
                <textarea name="comment[body]" placeholder="コメントを残す"></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div><a href="/">戻る</a></div>
    </body>
</html>
