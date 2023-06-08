<x-layout>
  <form action="{{ route('posts.update', $post->id) }}" method="POST">
    @csrf
    @method('PUT')
    <legend class="mb-4">Edit Post #{{ $post->id }}</legend>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control shadow-none" name="title" id="title" value="{{ $post->title }}">
    </div>
    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
</x-layout>
