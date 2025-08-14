<x-layouts.app>
  <h1 class="text-2xl font-bold mb-2">{{ $post->title }}</h1>
  <p class="mb-4">{{ $post->body }}</p>
  <a class="underline" href="{{ route('posts.index') }}">Back</a>
</x-layouts.app>
