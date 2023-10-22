<x-app-layout>
    <x-slot name="header">
        　投稿詳細
    </x-slot>    
    <!DOCTYPE HTML>
    <html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Posts</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <div>
                <p>本文：{{ $post->body }}</p>
            </div>
            @if($post->image_url)
            <div>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
            </div>
            @endif
            <div>
                @if($post->is_liked_by_auth_user())
                    <a href="{{ route('post.unlike', ['id' => $post->id]) }}" class="btn btn-success btn-sm">いいね<span class="badge">{{ $post->likes->count() }}</span></a>
                @else
                    <a href="{{ route('post.like', ['id' => $post->id]) }}" class="btn btn-secondary btn-sm">いいね<span class="badge">{{ $post->likes->count() }}</span></a>
                @endif
            </div>
        <div>
             {{ $post->likes->count() }}
        </div>
            <div>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
                <a href="/">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>
