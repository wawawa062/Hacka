<x-app-layout>
    <x-slot name="header">
            Home
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
            <h1 style="text-align: right;"><a href="/posts/kyapi">今日のきゃぴランキング</a></h1>
            <h1 style="text-align: right;"><a href="/posts/jimmy">今日の地味ハロランキング</a></h1>
        </head>
        <body>
            <h1 style="text-align: center;">新規投稿一覧</h1>
            <
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900"><a href="/posts/create">
                            {{ __("投稿する") }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                @foreach ($posts as $post)
                    <div style='border:solid 1px; margin-bottom: 10px;'>
                        <p>
                            <a href="/posts/{{ $post->id }}">{{ $post->body }}</a>
                        </p>
                        <p><a href="/posts/{{ $post->id }}">{{ $post->image_url }}</a></p>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $posts->links() }}
            </div>
        </body>
    </html>
</x-app-layout>