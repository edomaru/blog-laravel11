<x-app-layout>
    <div class="mt-10 space-y-5 prose max-w-none">
        <h1 class="not-prose text-2xl font-bold">{{ $post->title }}</h1>
        <x-post-meta :post="$post" />
        <div>{{ $post->contents }}</div>
    </div>
</x-app-layout>