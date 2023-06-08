<x-layout>
  <form action="{{ route('posts.comments.store', $post->id) }}" method="POST">
    @csrf
    <legend class="mb-4">#{{ $post->id }} Post a Comment</legend>
    <div class="mb-3">
      <label for="comment" class="form-label">Comment</label>
      <input type="text" class="form-control shadow-none" name="comment" id="comment">
    </div>
    <button type="submit" class="btn btn-primary">Post</button>
  </form>
</x-layout>
