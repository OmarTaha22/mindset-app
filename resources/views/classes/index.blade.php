<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Classes') }}
        </h2>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto">
        <table class="min-w-full bg-white shadow rounded-lg">
            <thead>
                <tr>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Students Count</th>
                    <th class="px-4 py-2">School</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($classes as $class)
                <tr>
                    <td class="px-4 py-2">{{ $class->name }}</td>
                    <td class="px-4 py-2">{{ $class->students_count }}</td>
                    <td class="px-4 py-2">{{ $class->school }}</td>
                    <td class="px-4 py-2">
                        <form action="{{ route('classes.delete', $class->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
