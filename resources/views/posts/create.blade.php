<x-layouts.app>
  <h1 class="text-2xl font-bold mb-4">New Post</h1>
  <form method="POST" action="{{ route('posts.store') }}" class="space-y-4">
    @csrf
    <div>
      <label>Title</label>
      <input name="title" value="{{ old('title') }}" class="border p-1 w-full">
      @error('title') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>
    <div>
      <label>Body</label>
      <textarea name="body" class="border p-1 w-full">{{ old('body') }}</textarea>
      @error('body') <div class="text-red-600">{{ $message }}</div> @enderror
    </div>
    <button type="submit">Create</button>
  </form>
</x-layouts.app>
