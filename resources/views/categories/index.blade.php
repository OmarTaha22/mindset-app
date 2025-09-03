<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Categories') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-4xl mx-auto">
        @if(session('success'))
            <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('categories.create') }}"
           class="mb-4 inline-block px-4 py-2 bg-blue-600 text-black rounded-lg shadow hover:bg-blue-700">
            Add Category
        </a>

        <ul class="bg-white shadow rounded-lg divide-y">
            @forelse($categories as $category)
                <li class="p-4">{{ $category->name }}</li>
            @empty
                <li class="p-4 text-gray-500">No categories yet</li>
            @endforelse
        </ul>
    </div>
</x-app-layout>
