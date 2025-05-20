<x-app-layout>
    <div class="py-4">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                <div class="p-4 text-gray-900 dark:text-gray-100">
                    <x-category-tabs>
                        {{ __('No Categories') }}
                    </x-category-tabs>
                </div>
            </div>
            <div class="mt-8 text-gray-900 dark:text-gray-100">
                @forelse ($posts as $post)
                    <x-post-item :post="$post" />
                @empty
                    <div>
                        <p class="text-center  py-16 text-gray-900 dark:text-gray-100">
                            {{ __('No posts found.') }}
                        </p>
                    </div>
                @endforelse
            </div>

            {{ $posts->onEachSide(1)->links() }}
        </div>
    </div>
</x-app-layout>
