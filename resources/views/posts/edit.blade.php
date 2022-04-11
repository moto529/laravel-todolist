<x-layout>
    <x-slot name="title">
       Edit Task - MyTodo
    </x-slot>

        <div class="back-link">
            &laquo; <a href="{{ route('posts.show', $post) }}">もどる</a>
        </div>

        <h1>Edit Task</h1>

        <form method="post" action="{{ route('posts.update',$post) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">
                <label>
                    タスク
                        <input type="text" name="title" value="{{ old('title',$post->title) }}">
                </label>
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>
                    内容
                    <textarea name="">{{ old('body',$post->body) }}</textarea>
                </label>
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-button">
                <button>Update</button>
            </div>
        </form>
</x-layout>
