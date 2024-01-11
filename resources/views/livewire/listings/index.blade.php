<div class="relative overflow-hidden bg-white shadow-md dark:bg-slate-800 sm:rounded-lg">
    <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
        <div>
            <h5 class="mr-3 font-semibold dark:text-white">Your Listings</h5>
            <p class="text-slate-500 dark:text-slate-400">Manage all your existing listings or add a new one</p>
        </div>
        <button type="button"
            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
            <x-lucide-plus class="w-4 h-4" />
            Add product
        </button>
    </div>

    <div class="flex flex-col items-center justify-between gap-4 p-4 lg:gap-3 lg:flex-row">
        <div class="w-full lg:w-1/2">
            <div class="relative">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <x-lucide-search class="w-5 h-5 text-slate-500 dark:text-slate-400" />
                </div>
                <input type="text" wire:model.live.debounce.300ms="search"
                    class="block w-full p-2 pl-10 text-sm border rounded-lg text-slate-900 border-slate-300 bg-slate-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-blue-600 dark:focus:border-blue-600"
                    placeholder="Search" required="" />
            </div>
        </div>
        <div class="flex flex-col items-center w-full gap-3 lg:w-auto md:flex-row">
            <div class="w-full">
                <select wire:model.live="category"
                    class="block w-full p-2 text-sm bg-white border rounded-lg lg:w-auto border-slate-300 text-slate-600 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:border-slate-600 dark:placeholder-slate-400 dark:text-slate-400 dark:focus:ring-blue-600 dark:focus:border-blue-600">
                    <option selected value="">Category</option>
                    @foreach ($this->categories as $category)
                        <option wire:key="{{ $category->id }}" value="{{ $category->name }}">{{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="w-full">
                <select wire:model.live="status"
                    class="block w-full p-2 text-sm bg-white border rounded-lg lg:w-auto border-slate-300 text-slate-600 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-800 dark:border-slate-600 dark:placeholder-slate-400 dark:text-slate-400 dark:focus:ring-blue-600 dark:focus:border-blue-600">
                    <option selected value="">Status</option>
                    @foreach ($this->listingStatuses as $status)
                        <option wire:key="{{ $status->id }}" value="{{ $status->name }}">{{ $status->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center w-full">
                <input type="checkbox" wire:model.live="is_featured"
                    class="w-4 h-4 text-blue-600 rounded bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 dark:focus:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                <label for="default-checkbox"
                    class="text-sm font-medium text-slate-600 ms-2 dark:text-slate-400">Featured</label>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto min-h-40">
        <table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
            <thead class="text-xs uppercase text-slate-700 bg-slate-50 dark:bg-slate-700 dark:text-slate-400">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        <input type="checkbox"
                            class="w-4 h-4 text-blue-600 rounded bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 dark:focus:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                    </th>
                    <th scope="col" class="px-4 py-3">Image</th>
                    <th scope="col">
                        <button type="button" wire:click="sort('title')"
                            class=
                                'flex items-center justify-between w-full px-4 py-3 text-xs uppercase text-slate-700 bg-slate-50 dark:bg-slate-700 dark:text-slate-400'>
                            Title
                            @if ($sortByCol !== 'title')
                                <x-lucide-arrow-up-down class="w-4 h-4" />
                            @elseif($sortDir === 'ASC')
                                <x-lucide-arrow-down class="w-4 h-4" />
                            @else
                                <x-lucide-arrow-up class="w-4 h-4" />
                            @endif
                        </button>
                    </th>
                    <th scope="col" class="px-4 py-3 text-center">Category</th>
                    <th scope="col">
                        <button type="button" wire:click="sort('price')"
                            class=
                                'flex items-center justify-between w-full px-4 py-3 text-xs uppercase text-slate-700 bg-slate-50 dark:bg-slate-700 dark:text-slate-400'>
                            Price
                            @if ($sortByCol !== 'price')
                                <x-lucide-arrow-up-down class="w-4 h-4" />
                            @elseif($sortDir === 'ASC')
                                <x-lucide-arrow-down class="w-4 h-4" />
                            @else
                                <x-lucide-arrow-up class="w-4 h-4" />
                            @endif
                        </button>
                    </th>
                    <th scope="col" class="px-4 py-3 text-center">Status</th>
                    <th scope="col" class="px-4 py-3 text-center">Featured</th>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($this->listings) == 0)
                    <tr class="border-b dark:border-slate-700">
                        <td colspan="8" class="px-4 py-3 text-center text-slate-400 dark:text-slate-400">No data
                            available at the moment.</td>
                    </tr>
                @else
                    @foreach ($this->listings as $listing)
                        <tr wire:key="{{ $listing->id }}" class="border-b dark:border-slate-700">
                            <td class="px-4 py-3">
                                <input type="checkbox"
                                    class="w-4 h-4 text-blue-600 rounded bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 dark:focus:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                            </td>
                            <td class="px-4 py-3">
                                <img src="{{ $listing->image }}"
                                    class="object-cover object-center w-12 h-12 rounded-md">
                            </td>
                            <td class="px-4 py-3">{{ $listing->title }}</td>
                            <td class="px-4 py-3 text-center">{{ $listing->category->name }}</td>
                            <td class="px-4 py-3 text-right">${{ $listing->price }}</td>
                            <td class="px-4 py-3 text-center">
                                @if ($listing->listing_status->name == 'Pending')
                                    <span
                                        class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-yellow-900 dark:text-yellow-300">Pending</span>
                                @elseif($listing->listing_status->name == 'Published')
                                    <span
                                        class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">Published</span>
                                @elseif($listing->listing_status->name == 'Rejected')
                                    <span
                                        class="bg-red-100 text-red-800 text-xs font-medium px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">Rejected</span>
                                @endif
                            </td>
                            <td class="px-4 py-3 text-center">
                                @if ($listing->is_featured)
                                    <span
                                        class="inline-block p-1 text-green-800 bg-green-100 rounded-full dark:bg-green-900 dark:text-green-300">
                                        <x-lucide-check class="w-3 h-3" /></span>
                                @else
                                    <span
                                        class="inline-block p-1 text-red-800 bg-red-100 rounded-full dark:bg-red-900 dark:text-red-300">
                                        <x-lucide-x class="w-3 h-3" />
                                    </span>
                                @endif
                            </td>
                            <td class="px-4 py-3">
                                <div>
                                    <button id="listing-dropdown-button-{{ $listing->id }}"
                                        data-dropdown-toggle="listing-dropdown-{{ $listing->id }}"
                                        class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                        type="button">
                                        <x-lucide-more-horizontal class="w-5 h-5" />
                                    </button>
                                    <div id="listing-dropdown-{{ $listing->id }}"
                                        class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                        <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                            aria-labelledby="listing-dropdown-button-{{ $listing->id }}">
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Show</a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="block px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Edit</a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <button wire:click="delete({{ $listing->id }})"
                                                class="block w-full px-4 py-2 text-sm text-left text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-200 dark:hover:text-white">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif

            </tbody>
        </table>
    </div>

    {{-- Per Page --}}
    <div class="flex items-center gap-2 p-4 mt-4">
        <label for="per-page-select" class="block text-sm font-medium text-slate-600 dark:text-slate-400">Per
            Page:</label>
        <select id="per-page-select" wire:model.live="perPage"
            class="block p-2 text-sm border rounded-lg bg-slate-50 border-slate-300 text-slate-600 focus:ring-blue-500 focus:border-blue-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-slate-400 dark:focus:ring-blue-600 dark:focus:border-blue-600">
            <option selected value="10">10</option>
            <option value="20">20</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
    </div>

    {{-- pagination --}}
    <div class="px-4 pb-4">
        {{-- {{ $listings->links() }} --}}
        {{-- to avoid scroll to top --}}
        {{ $this->listings->links(data: ['scrollTo' => false]) }}
    </div>
</div>
