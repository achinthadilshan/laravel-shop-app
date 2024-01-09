<div class="relative overflow-hidden bg-white shadow-md dark:bg-slate-800 sm:rounded-lg">
    <div class="flex-row items-center justify-between p-4 space-y-3 sm:flex sm:space-y-0 sm:space-x-4">
        <div>
            <h5 class="mr-3 font-semibold dark:text-white">Your Listings</h5>
            <p class="text-slate-500 dark:text-slate-400">Manage all your existing listings or add a new one</p>
        </div>
        <button type="button"
            class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700">
            <x-lucide-plus class="w-4 h-4 mr-2" />
            Add product
        </button>
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
                    <th scope="col" class="px-4 py-3">Title</th>
                    <th scope="col" class="px-4 py-3 text-center">Category</th>
                    <th scope="col" class="px-4 py-3 text-right">Price</th>
                    <th scope="col" class="px-4 py-3 text-center">Status</th>
                    <th scope="col" class="px-4 py-3 text-center">Featured</th>
                    <th scope="col" class="px-4 py-3">
                        <span class="sr-only">Actions</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($listings as $listing)
                    <tr class="border-b dark:border-slate-700">
                        <td class="px-4 py-3">
                            <input type="checkbox"
                                class="w-4 h-4 text-blue-600 rounded bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 dark:focus:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                        </td>
                        <td class="px-4 py-3">
                            <img src="{{ $listing->image }}" class="object-cover object-center w-12 h-12 rounded-md">
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
                            {{-- add wire:ignore to avoide js issues --}}
                            <div wire:ignore>
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
                                        <a href="#"
                                            class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-200 dark:hover:text-white">Delete</a>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Per Page --}}
    <div class="flex items-center gap-2 p-4 mt-4">
        <label for="per-page-select" class="block text-sm font-medium text-slate-600 dark:text-slate-400">Per
            Page:</label>
        <select id="per-page-select" wire:model.live="perPage"
            class="block p-2 text-sm border rounded-lg bg-slate-50 border-slate-300 text-slate-900 focus:ring-slate-500 focus:border-slate-500 dark:bg-slate-700 dark:border-slate-600 dark:placeholder-slate-400 dark:text-white dark:focus:ring-slate-500 dark:focus:border-slate-500">
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
        {{ $listings->links(data: ['scrollTo' => false]) }}
    </div>
</div>
