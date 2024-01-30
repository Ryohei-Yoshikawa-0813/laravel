<x-layout>
    <h1>
        <span>Hello Laravel!</span>
        <a href="{{ route('create.posts') }}">新規追加</a>
        <a class="search_btn" href="{{ route('search.posts') }}">検索</a>
    </h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts', $post->id ) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>

