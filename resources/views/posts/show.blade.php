<x-layout>
    <x-slot name="title">
       {{ $post->title }}
    </x-slot>
        <div class="back-link">
            &laquo; <a href="{{ route('posts.index') }}">もどる</a>
        </div>
        <h1>
            <span>{{ $post->title }}</span>
            <a href="{{ route('posts.edit', $post)}}">[編集]</a>
            <form method="post" action="{{ route('posts.destroy', $post)}}">
                @method('DELETE')
                @csrf
                <button class="btn">[削除]</button>
            </form>
        </h1>
        <div class="task-group">
            <p>タスク内容  : {!! nl2br(e($post->body)) !!}</p>
            <p>作成日 : {{ $post->created_at }}</p>
        </div>
    </x-layout>
