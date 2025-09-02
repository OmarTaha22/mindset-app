<div class="sidebar-group mb-4">

    <button onclick="this.nextElementSibling.classList.toggle('hidden')"
            class="w-full text-left text-lg font-bold mb-2 px-2 py-1 rounded hover:bg-gray-700">
        {{ $title }}
    </button>

    <ul class="hidden pl-4">
        @foreach ($items as $item)
            <li class="mb-1">
                @if(isset($item['submenu']))

                    <button onclick="this.nextElementSibling.classList.toggle('hidden')"
                            class="w-full text-left px-2 py-1 rounded hover:bg-gray-600 bg-gray-700">
                        {{ $item['label'] }}
                    </button>

                    <ul class="hidden ml-4 mt-1">
                        @foreach ($item['submenu'] as $sub)
                            <li>
                                <a href="{{ $sub['url'] }}"
                                   class="block px-2 py-1 rounded hover:bg-gray-100 bg-white text-gray-900">
                                    {{ $sub['label'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @else

                    <a href="{{ $item['url'] ?? '#' }}"
                       class="block px-2 py-1 rounded hover:bg-gray-200 bg-white text-gray-900">
                        {{ $item['label'] }}
                    </a>
                @endif
            </li>
        @endforeach
    </ul>
</div>
