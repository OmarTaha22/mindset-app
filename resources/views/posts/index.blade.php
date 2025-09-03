<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-5xl mx-auto">
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('posts.create') }}"
           class="mb-4 inline-block px-4 py-2 bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700">
            Add Post
        </a>

        <ul class="bg-white shadow rounded-lg divide-y">
            @forelse($posts as $post)
                <li class="p-4">
                    <h3 class="font-bold">{{ $post->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($post->content, 100) }}</p>
                    <span class="text-sm text-gray-500">Category: {{ $post->category->name }}</span>
                </li>
            @empty
                <li class="p-4 text-gray-500">No posts yet</li>
            @endforelse
        </ul>
    </div>
</x-app-layout>
