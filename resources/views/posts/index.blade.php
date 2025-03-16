<x-app-layout>
    <x-slot name="header">
        <h2
            class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
        >
            {{ __("Posts") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div
                class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg"
            >
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach ($posts as $post)
                            <x-post :post="$post" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
