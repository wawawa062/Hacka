<x-app-layout>
    <x-slot name="header">
        　投稿作成
    </x-slot>
    <!DOCTYPE HTML>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <title>Blog</title>
        </head>
        <body>
            <h1>投稿作成</h1>
            <form action="/posts" method="POST" enctype="multipart/form-data">
                @csrf
                <div>
                    <h2>本文</h2>
                    <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <div>
                    <div class="image">
                        <input type="file" name="image">
                    </div>
                    <div class="paripi">
                    <input type="radio"  name="post[is_paripi]" value="1" >パリピハロウィン<br>
                    <input type="radio" name="post[is_paripi]" value="0">地味ハロウィン<br>
                    </div>
                <input type="submit" value="保存"/>
            </form>
            <div><a href="/">戻る</a></div>
        </body>
    </html>
</x-app-layout>