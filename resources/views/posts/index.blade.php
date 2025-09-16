<x-layouts.app>
  <h1 class="text-2xl font-bold mb-4">Bahit</h1>

  @if (session('status'))
    <div class="mb-3">{{ session('status') }}</div>
  @endif

  <a href="{{ route('posts.create') }}" class="underline">New Post</a>

  <ul class="mt-4 space-y-2">
    @forelse ($posts as $post)
      <li>
        <a class="underline" href="{{ route('posts.show', $post) }}">{{ $post->title }}</a>
        — <a class="underline" href="{{ route('posts.edit', $post) }}">Edit</a>
        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline">
          @csrf @method('DELETE')
          <button onclick="return confirm('Delete this post?')">Delete</button>
        </form>
      </li>
    @empty
      <li>No posts yet.</li>
    @endforelse
  </ul>

  <div class="mt-4">{{ $posts->links() }}</div>
</x-layouts.app>

 