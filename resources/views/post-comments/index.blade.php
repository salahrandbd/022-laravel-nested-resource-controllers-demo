<x-layout>
  <h6 class="mb-4">#{{ $post->id }} {{ $post->title }}</h6>

  @forelse ($comments as $comment)
    @if ($loop->index == 0)
      <h6 class="mb-4">All comments:</h6>
      <ul class="list-group">
    @endif

    <li class="list-group-item d-inline-flex align-items-center">
      <span>{{ $comment->comment }}</span>
      <a class="btn btn-info btn-sm ms-3" href="{{ route('posts.comments.edit', [$post->id, $comment->id]) }}">Edit</a>
      <form action="{{ route('posts.comments.destroy', [$post->id, $comment->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm ms-3" type="submit">Delete</button>
      </form>
    </li>

    @if ($loop->last)
      </ul>
    @endif
  @empty
    <p>No comments to show</p>
  @endforelse
</x-layout>
