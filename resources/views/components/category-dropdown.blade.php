<x-dropdown>

    <x-slot name="trigger">
        <button
            class="py-2 pl-3 pr-9 text-left text-sm font-semibold lg:w-32 lg:inline-flex flex w-full"
        >
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;"/>
        </button>
    </x-slot>

    <x-dropdown-item href="/" :active="!request('category')">All</x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="isset($currentCategory) && $currentCategory->is($category)"
        >
            {{ ucwords($category->name) }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>
