<x-app-layout>
    <x-slot name="header">
        <h2
            class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
        >
            {{ $article->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div
                class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg"
            >
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <article
                        class="format format-sm sm:format-base lg:format-lg format-blue dark:format-invert mx-auto w-full max-w-2xl"
                    >
                        <header class="not-format mb-4">
                            <h1
                                class="mb-2 text-3xl font-extrabold leading-tight text-gray-900 dark:text-white lg:mb-6 lg:text-4xl"
                            >
                                {{ $article->title }}
                            </h1>
                            <div class="mb-4 flex flex-wrap">
                                @foreach ($article->tags as $tag)
                                    <a
                                        class="mb-2 mr-2 rounded bg-blue-100 px-2.5 py-0.5 text-sm font-medium text-blue-800 dark:bg-blue-200 dark:text-blue-800"
                                        href="{{-- route("tag", $tag->slug) --}}"
                                    >
                                        #{{ $tag->name }}
                                    </a>
                                @endforeach
                            </div>
                            <div class="text-base">
                                <address class="inline">
                                    Published by
                                    <a
                                        rel="author"
                                        class="text-gray-900 no-underline hover:underline dark:text-white"
                                        href="{{-- route("author", $article->author->slug) --}}"
                                    >
                                        {{-- $article->author->name --}}
                                    </a>
                                </address>
                                <time
                                    datetime="{{-- $article->published_at->toIso8601String() --}}"
                                >
                                    {{-- $article->published_at->diffForHumans() --}}
                                </time>
                            </div>
                        </header>
                        <div>
                            <p>{{ $article->content }}</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
