<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ランキング</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        @foreach ($posts as $post)
        <div>
            <h2>{{ $post->image }}</h2>
            <p>いいね: {{ $post->likes_count }}</p>
        </div>
        @endforeach
    </body>