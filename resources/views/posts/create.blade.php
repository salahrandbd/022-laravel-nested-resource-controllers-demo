<x-layout>
  <form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <legend class="mb-4">Create Post</legend>
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control shadow-none" name="title" id="title">
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</x-layout>
