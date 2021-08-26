    <!-- 編集画面 -->
    @if (session('message'))
        {{ session('message') }}
    @endif

    {{ $post->title }}
    {{ $post->content }} 

    <a href="/posts/{{ $post->id }}/edit">Edit</a>