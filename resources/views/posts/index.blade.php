<x-app-layout>
    <x-slot name="header">
    </x-slot>
        <body>
            <h1 style="text-align: right;"><a href="/posts/kyapi">今日のきゃぴランキング</a></h1>
            <h1 style="text-align: right;"><a href="/posts/jimmy">今日の地味ハロランキング</a></h1>
            <h1 style="text-align: center;">新規投稿一覧</h1>
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
        <h1>チーム開発会へようこそ！</h1>
        <h2>投稿一覧画面</h2>
        <a href='/posts/create'>新規投稿</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p>
                        本文：<a href="/posts/{{ $post->id }}">{{ $post->body }}</a>
                    </p>
                    <p>
                        画像：<a href="/posts/{{ $post->id }}">{{ $post->image_url }}</a>
                    </p>
                    <a href='/posts/{{ $post->id }}/comment'>コメントする</a>
                    <div class="comment_text">
                        @if ($post->comments->count())
                        <div class="edit"><a href="/posts/{{ $post->id }}/comment_show">コメントをみる</a></div>
                        @else
                        <span>コメントはまだありません。</span>
                        @endif
                    </div>
                </div>
            @endforeach
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
</x-app-layout>