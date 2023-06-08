<x-layout>
  <form action="{{ route('posts.comments.update', [$post->id, $comment->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <legend class="mb-4">Edit Post Comment #{{ $comment->id }}</legend>
    <div class="mb-3">
      <label for="comment" class="form-label">Comment</label>
      <input type="text" class="form-control shadow-none" name="comment" id="comment" value="{{ $comment->comment }}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</x-layout>
