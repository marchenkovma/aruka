<x-app-layout>
    <x-slot name="header">
        <h2
            class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
        >
            {{ __("Create post") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-4xl space-y-6 sm:px-6 lg:px-8">
            <div
                class="bg-white p-4 shadow dark:bg-gray-800 sm:rounded-lg sm:p-8"
            >
                <div class="max-w-xl">
                    <section>
                        <header>
                            <h2
                                class="text-lg font-medium text-gray-900 dark:text-gray-100"
                            >
                                {{ __("Create post") }}
                            </h2>

                            <p
                                class="mt-1 text-sm text-gray-600 dark:text-gray-400"
                            >
                                {{ __("Fill in the details below to create a new post.") }}
                            </p>
                        </header>

                        <form
                            method="post"
                            action="{{ route("posts.store") }}"
                            class="mt-6 space-y-6"
                        >
                            @csrf
                            @method("post")

                            <!-- Title -->
                            <div>
                                <x-input-label
                                    for="title"
                                    :value="__('Title')"
                                />
                                <x-text-input
                                    id="title"
                                    name="title"
                                    type="text"
                                    class="mt-1 block w-full"
                                    :value="old('title')"
                                    required
                                    autofocus
                                    autocomplete="name"
                                />
                                <x-input-error
                                    class="mt-2"
                                    :messages="$errors->get('title')"
                                />
                            </div>

                            <!-- Slug -->
                            <div>
                                <x-input-label
                                    for="slug"
                                    :value="__('Slug')"
                                />
                                <x-text-input
                                    id="slug"
                                    name="slug"
                                    type="text"
                                    class="mt-1 block w-full"
                                    :value="old('slug')"
                                    required
                                    autocomplete="slug"
                                />
                                <x-input-error
                                    class="mt-2"
                                    :messages="$errors->get('slug')"
                                />
                            </div>

                            <!-- Content -->
                            <div>
                                <x-input-label
                                    for="content"
                                    :value="__('Content')"
                                />
                                <textarea
                                    id="content"
                                    name="content"
                                    rows="4"
                                    class="mt-1 block w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    required
                                >
{{ old("content") }}</textarea
                                >
                                <x-input-error
                                    class="mt-2"
                                    :messages="$errors->get('content')"
                                />
                            </div>

                            <!-- Category -->
                            <div>
                                <x-input-label
                                    for="category"
                                    :value="__('Category')"
                                />
                                <select
                                    id="category"
                                    name="category"
                                    class="mt-1 block w-full rounded-lg border border-gray-300 p-2.5 text-sm focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 dark:focus:ring-blue-500"
                                    required
                                >
                                    <option value="">
                                        {{ __("Select category") }}
                                    </option>
                                    <option value="technology">
                                        {{ __("Technology") }}
                                    </option>
                                    <option value="health">
                                        {{ __("Health") }}
                                    </option>
                                    <option value="lifestyle">
                                        {{ __("Lifestyle") }}
                                    </option>
                                </select>
                                <x-input-error
                                    class="mt-2"
                                    :messages="$errors->get('category')"
                                />
                            </div>

                            <!-- Tags -->
                            <div>
                                <x-input-label
                                    for="tags"
                                    :value="__('Tags')"
                                />
                                <x-text-input
                                    id="tags"
                                    name="tags"
                                    type="text"
                                    class="mt-1 block w-full"
                                    :value="old('tags')"
                                    placeholder="Tag1, Tag2, Tag3"
                                />
                                <x-input-error
                                    class="mt-2"
                                    :messages="$errors->get('tags')"
                                />
                            </div>

                            <!-- Submit Button -->
                            <div class="flex items-center gap-4">
                                <x-primary-button>
                                    {{ __("Save") }}
                                </x-primary-button>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
