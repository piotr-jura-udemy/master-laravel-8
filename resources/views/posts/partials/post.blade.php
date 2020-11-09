{{-- @break($key == 2) --}}
{{-- @continue($key == 1) --}}
@if($loop->even)
<div>{{ $key }}.{{ $post->title }}</div>
@else
<div style="background-color: silver">{{ $key }}.{{ $post->title }}</div>
@endif

<div>
    <form action="{{ route('posts.destroy', ['post' => $post->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" value="Delete!">
    </form>
</div>