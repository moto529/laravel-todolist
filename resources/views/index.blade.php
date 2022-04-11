<x-layout>
    <x-slot name="title">
        MyTodo
    </x-slot>
        <h1>
            <span>My Todo</span>
            <a href="{{ route('posts.create') }}">追加</a>
        </h1>
        <ul>
            @forelse ($posts as $post)
                <li>
                    <a href="{{ route('posts.show', $post) }}">
                        {{ $post->title }}
                    </a>
                </li>
            @empty
                postなし
            @endforelse

        </ul>
</x-layout>
