<x-layout>
    <a href="{{ route('index.posts')}}" class="re">戻る</a>
    <h1>検索画面</h1>
    <form action="{{ route('check.posts') }}" method="post">
        @csrf

        <label>
            Title検索
            <input type="text" name="keyword" value="{{ old('keyword') }}">
        </label>
        <div class="btn"><button>検索</button></div>
    </form>

    <h1>検索結果</h1>
        <ul>
        @if(isset($posts)) {
            @foreach ($posts as $post)
                <li>
                    <a href="{{ route('text.posts', $post->id ) }}">{{ $post->title }}</a>
                </li>
            @endforeach
        }@endif
        </ul>
</x-layout>
