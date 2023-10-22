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
             @foreach ($comments as $comment)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                         {{ $comment->body }}
                    </p>
                    
                </div>
            @endforeach
    
            <div>
                <a href="/">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>
