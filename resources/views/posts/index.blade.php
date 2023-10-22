<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>チーム開発会へようこそ！</h1>
        <h2>投稿一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        本文：<a href="/posts/{{ $post->id }}">{{ $post->body }}</a>
                    </p>
                    <p>画像：<a href="/posts/{{ $post->id }}">{{ $post->image_url }}</a></p>
                </div>
            @endforeach
        </div>
        <div>
            {{ $posts->links() }}
        </div>
    </body>
</html>
