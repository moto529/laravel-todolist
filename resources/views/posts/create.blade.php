<x-layout>
    <x-slot name="title">
       タスクを追加 - MyTodo
    </x-slot>

        <div class="back-link">
            &laquo; <a href="{{ route('posts.index') }}">もどる</a>
        </div>

        <h1>タスク追加</h1>

        <form method="post" action="{{ route('posts.store')}}">
            @csrf
            <div class="form-group">
                <label>
                    タスク<span>（必須）</span>
                        <input type="text" name="title" value="{{ old('title') }}">
                </label>
                @error('title')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>
                    内容<span>（必須）</span>
                        <textarea name="body" id="">{{ old('body') }}</textarea>
                </label>
                @error('body')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-button">
                <button>追加</button>
            </div>
        </form>
</x-layout>
