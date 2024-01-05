<x-dashboard-layout>
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

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-slate-500 dark:text-slate-400">
                <thead class="text-xs uppercase text-slate-700 bg-slate-50 dark:bg-slate-700 dark:text-slate-400">
                    <tr>
                        <th scope="col" class="px-4 py-3">
                            <div class="flex items-center">
                                <input id="checkbox-all-search" type="checkbox"
                                    class="w-4 h-4 text-blue-600 rounded bg-slate-100 border-slate-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 dark:focus:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600">
                                <label for="checkbox-all-search" class="sr-only">checkbox</label>
                            </div>
                        </th>
                        <th scope="col" class="px-4 py-3">Image</th>
                        <th scope="col" class="px-4 py-3">Title</th>
                        <th scope="col" class="px-4 py-3">Category</th>
                        <th scope="col" class="px-4 py-3">Price</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3">Featured</th>
                        <th scope="col" class="px-4 py-3">
                            <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">Apple
                            iMac 27&#34;</th>
                        <td class="px-4 py-3">PC</td>
                        <td class="px-4 py-3">Apple</td>
                        <td class="px-4 py-3">300</td>
                        <td class="px-4 py-3">$2999</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="apple-imac-27-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <x-lucide-more-horizontal class="w-5 h-5" />
                            </button>
                            <div id="apple-imac-27-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="apple-imac-27-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">Apple
                            iMac 20&#34;</th>
                        <td class="px-4 py-3">PC</td>
                        <td class="px-4 py-3">Apple</td>
                        <td class="px-4 py-3">200</td>
                        <td class="px-4 py-3">$1499</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="apple-imac-20-dropdown-button" data-dropdown-toggle="apple-imac-20-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="apple-imac-20-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="apple-imac-20-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">Apple
                            iPhone 14</th>
                        <td class="px-4 py-3">Phone</td>
                        <td class="px-4 py-3">Apple</td>
                        <td class="px-4 py-3">1237</td>
                        <td class="px-4 py-3">$999</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="apple-iphone-14-dropdown-button" data-dropdown-toggle="apple-iphone-14-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="apple-iphone-14-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="apple-iphone-14-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">Apple
                            iPad Air</th>
                        <td class="px-4 py-3">Tablet</td>
                        <td class="px-4 py-3">Apple</td>
                        <td class="px-4 py-3">4578</td>
                        <td class="px-4 py-3">$1199</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="apple-ipad-air-dropdown-button" data-dropdown-toggle="apple-ipad-air-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="apple-ipad-air-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="apple-ipad-air-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">Xbox
                            Series S</th>
                        <td class="px-4 py-3">Gaming/Console</td>
                        <td class="px-4 py-3">Microsoft</td>
                        <td class="px-4 py-3">56</td>
                        <td class="px-4 py-3">$299</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="xbox-series-s-dropdown-button" data-dropdown-toggle="xbox-series-s-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="xbox-series-s-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="xbox-series-s-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">
                            PlayStation 5</th>
                        <td class="px-4 py-3">Gaming/Console</td>
                        <td class="px-4 py-3">Sony</td>
                        <td class="px-4 py-3">78</td>
                        <td class="px-4 py-3">$799</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="playstation-5-dropdown-button" data-dropdown-toggle="playstation-5-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="playstation-5-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="playstation-5-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">Xbox
                            Series X</th>
                        <td class="px-4 py-3">Gaming/Console</td>
                        <td class="px-4 py-3">Microsoft</td>
                        <td class="px-4 py-3">200</td>
                        <td class="px-4 py-3">$699</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="xbox-series-x-dropdown-button" data-dropdown-toggle="xbox-series-x-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="xbox-series-x-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="xbox-series-x-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">Apple
                            Watch SE</th>
                        <td class="px-4 py-3">Watch</td>
                        <td class="px-4 py-3">Apple</td>
                        <td class="px-4 py-3">657</td>
                        <td class="px-4 py-3">$399</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="apple-watch-se-dropdown-button" data-dropdown-toggle="apple-watch-se-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="apple-watch-se-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="apple-watch-se-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">NIKON
                            D850</th>
                        <td class="px-4 py-3">Photo</td>
                        <td class="px-4 py-3">Nikon</td>
                        <td class="px-4 py-3">465</td>
                        <td class="px-4 py-3">$599</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="nikon-d850-dropdown-button" data-dropdown-toggle="nikon-d850-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="nikon-d850-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="nikon-d850-dropdown-button">
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
                        </td>
                    </tr>
                    <tr class="border-b dark:border-slate-700">
                        <th scope="row"
                            class="px-4 py-3 font-medium text-slate-900 whitespace-nowrap dark:text-white">
                            Monitor BenQ EX2710Q</th>
                        <td class="px-4 py-3">TV/Monitor</td>
                        <td class="px-4 py-3">BenQ</td>
                        <td class="px-4 py-3">354</td>
                        <td class="px-4 py-3">$499</td>
                        <td class="flex items-center justify-end px-4 py-3">
                            <button id="benq-ex2710q-dropdown-button" data-dropdown-toggle="benq-ex2710q-dropdown"
                                class="inline-flex items-center p-0.5 text-sm font-medium text-center text-slate-500 hover:text-slate-800 rounded-lg focus:outline-none dark:text-slate-400 dark:hover:text-slate-100"
                                type="button">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                </svg>
                            </button>
                            <div id="benq-ex2710q-dropdown"
                                class="z-10 hidden bg-white divide-y rounded shadow divide-slate-100 w-44 dark:bg-slate-700 dark:divide-slate-600">
                                <ul class="py-1 text-sm text-slate-700 dark:text-slate-200"
                                    aria-labelledby="benq-ex2710q-dropdown-button">
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
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <nav class="flex flex-col items-start justify-between p-4 space-y-3 md:flex-row md:items-center md:space-y-0"
            aria-label="Table navigation">
            <span class="text-sm font-normal text-slate-500 dark:text-slate-400">
                Showing
                <span class="font-semibold text-slate-900 dark:text-white">1-10</span>
                of
                <span class="font-semibold text-slate-900 dark:text-white">1000</span>
            </span>
            <ul class="inline-flex items-stretch -space-x-px">
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-full py-1.5 px-3 ml-0 text-slate-500 bg-white rounded-l-lg border border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">
                        <span class="sr-only">Previous</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 py-2 text-sm leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 py-2 text-sm leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" aria-current="page"
                        class="z-10 flex items-center justify-center px-3 py-2 text-sm leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-slate-700 dark:bg-slate-700 dark:text-white">3</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 py-2 text-sm leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">...</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center px-3 py-2 text-sm leading-tight bg-white border text-slate-500 border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">100</a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center justify-center h-full py-1.5 px-3 leading-tight text-slate-500 bg-white rounded-r-lg border border-slate-300 hover:bg-slate-100 hover:text-slate-700 dark:bg-slate-800 dark:border-slate-700 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">
                        <span class="sr-only">Next</span>
                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</x-dashboard-layout>
