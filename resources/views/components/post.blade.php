<article class="py-6">
    <div class="mb-3 flex items-center justify-between text-gray-500">
        <div>
            @foreach ($post->tags as $tag)
                <a
                    class="mb-2 mr-2 rounded bg-blue-100 px-2.5 py-0.5 text-sm font-medium text-blue-800 hover:bg-blue-200 dark:bg-blue-200 dark:text-blue-800 dark:hover:bg-blue-300"
                    href="/blog/tag/{{ $tag->name }}"
                >
                    #{{ $tag->name }}
                </a>
            @endforeach
        </div>
        <span class="text-sm">
            {{ __("Published") }}
            <time datetime="{{ $post->created_at }}">
                {{ $post->created_at->diffForHumans() }}
            </time>
        </span>
    </div>
    <h2
        class="mb-2 text-2xl font-bold tracking-tight text-gray-900 hover:underline dark:text-white"
    >
        <a href="{{ route("posts.show", $post->id) }}">
            {{ $post->title }}
        </a>
    </h2>
    <p class="mb-5 text-gray-500 dark:text-gray-400">
        {{ Str::limit($post->content, 150) }}
    </p>
    <div class="flex items-center justify-between">
        <a
            class="flex items-center space-x-2"
            href="/blog/author/{{-- $post->author->slug --}}"
        >
            <img
                class="h-7 w-7 rounded-full"
                src="{{-- $post->author->profile_picture --}}"
                alt="{{-- $post->author->name --}} profile picture"
            />
            <span class="font-medium dark:text-white">
                {{-- $post->author->name --}}
            </span>
        </a>
        <a
            class="inline-flex items-center font-medium text-blue-600 hover:underline dark:text-blue-500"
            href="{{ route("posts.show", $post->id) }}"
        >
            Read more
            <svg
                class="ml-2 h-4 w-4"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <path
                    fill-rule="evenodd"
                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                    clip-rule="evenodd"
                ></path>
            </svg>
        </a>
    </div>
</article>
