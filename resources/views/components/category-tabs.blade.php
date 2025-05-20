<ul class="flex flex-wrap justify-center text-center text-sm font-medium text-gray-500 dark:text-gray-400">
    <li class="me-2">
        <a class="active inline-block rounded-lg bg-blue-600 px-4 py-2 text-white" href="#" aria-current="page">All</a>
    </li>
    @forelse ($categories as $category)
        <li class="me-2">
            <a class="inline-block rounded-lg px-4 py-2 hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-gray-700 dark:hover:text-white" href="#">
                {{ $category->name }}
            </a>
        </li>
    @empty
        {{ $slot }}
    @endforelse
</ul>
