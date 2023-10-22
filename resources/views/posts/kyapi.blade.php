<x-app-layout>
    <x-slot name="header">
        　 いいねランキング
    </x-slot>    
    <!DOCTYPE HTML>
    <html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            @foreach ($kyapi_posts as $post)
            <div>
                <p><a href="/posts/{{ $post->id }}">{{ $post->body }}</a></p>
                <p><a href="/posts/{{ $post->id }}">{{ $post->image_url }}</a></p>
                <p>いいね: {{ $post->likes_count }}</p>
            </div>
            @endforeach
        </body>
    </html>
</x-app-layout>