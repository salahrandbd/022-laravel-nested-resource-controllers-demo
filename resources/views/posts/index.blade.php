<x-layout>
  @forelse ($posts as $post)
    @if ($loop->index == 0)
      <h6 class="mb-4">All posts:</h6>
      <ul class="list-group">
    @endif

    <li class="list-group-item d-inline-flex align-items-center">
      <a href="{{ route('posts.comments.index', $post->id) }}">{{ $post->title }}</a>
      <a class="btn btn-info btn-sm ms-3" href="{{ route('posts.edit', $post->id) }}">Edit</a>
      <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger btn-sm ms-3" type="submit">Delete</button>
      </form>
    </li>

    @if ($loop->last)
      </ul>
    @endif
  @empty
    <p>No posts to show</p>
  @endforelse
</x-layout>
