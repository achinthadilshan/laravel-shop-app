<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="font-sans antialiased bg-slate-50 dark:bg-slate-900">
    <!-- Top Nav -->
    <nav
        class="bg-white border-b border-slate-200 px-4 py-2.5 dark:bg-slate-800 dark:border-slate-700 fixed left-0 right-0 top-0 z-50">
        <div class="flex flex-wrap items-center justify-between">
            <div class="flex items-center justify-start">
                <button data-drawer-target="drawer-navigation" data-drawer-toggle="drawer-navigation"
                    aria-controls="drawer-navigation"
                    class="p-2 mr-2 rounded-lg cursor-pointer text-slate-600 md:hidden hover:text-slate-900 hover:bg-slate-100 dark:text-slate-400 dark:hover:bg-slate-700 dark:hover:text-white">
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <svg aria-hidden="true" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Toggle sidebar</span>
                </button>
                <a href="#" class="flex items-center justify-between mr-4">
                    <img src="https://flowbite.s3.amazonaws.com/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
                    <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Shop App</span>
                </a>
            </div>
            <div class="flex items-center lg:order-2">
                <!-- Dark Mode Switch -->
                <button id="theme-toggle" type="button"
                    class="text-slate-500 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-slate-700  rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <!-- Notifications -->
                <button type="button" data-dropdown-toggle="notification-dropdown"
                    class="p-2 mr-1 rounded-lg text-slate-500 hover:text-slate-900 hover:bg-slate-100 dark:text-slate-400 dark:hover:text-white dark:hover:bg-slate-700">
                    <span class="sr-only">View notifications</span>
                    <!-- Bell icon -->
                    <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                        </path>
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden max-w-sm my-4 overflow-hidden text-base list-none bg-white divide-y shadow-lg divide-slate-100 dark:divide-slate-600 dark:bg-slate-700 rounded-xl"
                    id="notification-dropdown">
                    <div
                        class="block px-4 py-2 text-base font-medium text-center text-slate-700 bg-slate-50 dark:bg-slate-600 dark:text-slate-300">
                        Notifications
                    </div>
                    <div>
                        <a href="#"
                            class="flex px-4 py-3 border-b hover:bg-slate-100 dark:hover:bg-slate-600 dark:border-slate-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png"
                                    alt="Bonnie Green avatar" />
                                <div
                                    class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-blue-700 border border-white rounded-full dark:border-slate-700">
                                    <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                        </path>
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full pl-3">
                                <div class="text-slate-500 font-normal text-sm mb-1.5 dark:text-slate-400">
                                    New message from
                                    <span class="font-semibold text-slate-900 dark:text-white">Bonnie Green</span>:
                                    "Hey,
                                    what's up? All set for the presentation?"
                                </div>
                                <div class="text-xs font-medium text-blue-600 dark:text-blue-500">
                                    a few moments ago
                                </div>
                            </div>
                        </a>
                        <a href="#"
                            class="flex px-4 py-3 border-b hover:bg-slate-100 dark:hover:bg-slate-600 dark:border-slate-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                    alt="Jese Leos avatar" />
                                <div
                                    class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 border border-white rounded-full bg-slate-900 dark:border-slate-700">
                                    <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full pl-3">
                                <div class="text-slate-500 font-normal text-sm mb-1.5 dark:text-slate-400">
                                    <span class="font-semibold text-slate-900 dark:text-white">Jese leos</span>
                                    and
                                    <span class="font-medium text-slate-900 dark:text-white">5 others</span>
                                    started following you.
                                </div>
                                <div class="text-xs font-medium text-blue-600 dark:text-blue-500">
                                    10 minutes ago
                                </div>
                            </div>
                        </a>
                        <a href="#"
                            class="flex px-4 py-3 border-b hover:bg-slate-100 dark:hover:bg-slate-600 dark:border-slate-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png"
                                    alt="Joseph McFall avatar" />
                                <div
                                    class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-red-600 border border-white rounded-full dark:border-slate-700">
                                    <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full pl-3">
                                <div class="text-slate-500 font-normal text-sm mb-1.5 dark:text-slate-400">
                                    <span class="font-semibold text-slate-900 dark:text-white">Joseph Mcfall</span>
                                    and
                                    <span class="font-medium text-slate-900 dark:text-white">141 others</span>
                                    love your story. See it and view more stories.
                                </div>
                                <div class="text-xs font-medium text-blue-600 dark:text-blue-500">
                                    44 minutes ago
                                </div>
                            </div>
                        </a>
                        <a href="#"
                            class="flex px-4 py-3 border-b hover:bg-slate-100 dark:hover:bg-slate-600 dark:border-slate-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/roberta-casas.png"
                                    alt="Roberta Casas image" />
                                <div
                                    class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-green-400 border border-white rounded-full dark:border-slate-700">
                                    <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M18 13V5a2 2 0 00-2-2H4a2 2 0 00-2 2v8a2 2 0 002 2h3l3 3 3-3h3a2 2 0 002-2zM5 7a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1zm1 3a1 1 0 100 2h3a1 1 0 100-2H6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full pl-3">
                                <div class="text-slate-500 font-normal text-sm mb-1.5 dark:text-slate-400">
                                    <span class="font-semibold text-slate-900 dark:text-white">Leslie Livingston</span>
                                    mentioned you in a comment:
                                    <span class="font-medium text-blue-600 dark:text-blue-500">@bonnie.green</span>
                                    what do you say?
                                </div>
                                <div class="text-xs font-medium text-blue-600 dark:text-blue-500">
                                    1 hour ago
                                </div>
                            </div>
                        </a>
                        <a href="#" class="flex px-4 py-3 hover:bg-slate-100 dark:hover:bg-slate-600">
                            <div class="flex-shrink-0">
                                <img class="rounded-full w-11 h-11"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/robert-brown.png"
                                    alt="Robert image" />
                                <div
                                    class="absolute flex items-center justify-center w-5 h-5 ml-6 -mt-5 bg-purple-500 border border-white rounded-full dark:border-slate-700">
                                    <svg aria-hidden="true" class="w-3 h-3 text-white" fill="currentColor"
                                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z">
                                        </path>
                                    </svg>
                                </div>
                            </div>
                            <div class="w-full pl-3">
                                <div class="text-slate-500 font-normal text-sm mb-1.5 dark:text-slate-400">
                                    <span class="font-semibold text-slate-900 dark:text-white">Robert Brown</span>
                                    posted a new video: Glassmorphism - learn how to implement
                                    the new design trend.
                                </div>
                                <div class="text-xs font-medium text-blue-600 dark:text-blue-500">
                                    3 hours ago
                                </div>
                            </div>
                        </a>
                    </div>
                    <a href="#"
                        class="block py-2 font-medium text-center text-slate-900 text-md bg-slate-50 hover:bg-slate-100 dark:bg-slate-600 dark:text-white dark:hover:underline">
                        <div class="inline-flex items-center">
                            <svg aria-hidden="true" class="w-4 h-4 mr-2 text-slate-500 dark:text-slate-400"
                                fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                <path fill-rule="evenodd"
                                    d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            View all
                        </div>
                    </a>
                </div>
                <button type="button" class="flex mx-3 text-sm rounded-full bg-slate-800 md:mr-0"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="dropdown">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gough.png"
                        alt="user photo" />
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden w-56 my-4 text-base list-none bg-white divide-y shadow divide-slate-100 dark:bg-slate-700 dark:divide-slate-600 rounded-xl"
                    id="dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm font-semibold text-slate-900 dark:text-white">Neil Sims</span>
                        <span class="block text-sm truncate text-slate-900 dark:text-white">name@flowbite.com</span>
                    </div>
                    <ul class="py-1 text-slate-700 dark:text-slate-300" aria-labelledby="dropdown">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hover:text-white">My
                                profile</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-slate-100 dark:hover:bg-slate-600 dark:text-slate-400 dark:hover:text-white">Account
                                settings</a>
                        </li>
                    </ul>
                    <ul class="py-1 text-slate-700 dark:text-slate-300" aria-labelledby="dropdown">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white border-r border-slate-200 pt-14 md:translate-x-0 dark:bg-slate-800 dark:border-slate-700"
        aria-label="Sidenav" id="drawer-navigation">
        <div class="h-full px-3 py-5 overflow-y-auto bg-white dark:bg-slate-800">
            <ul class="space-y-2">
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-base font-medium rounded-lg text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-700 group">
                        <svg aria-hidden="true"
                            class="w-6 h-6 transition duration-75 text-slate-500 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                        <span class="ml-3">Overview</span>
                    </a>
                </li>
                <li>
                    <button type="button"
                        class="flex items-center w-full p-2 text-base font-medium transition duration-75 rounded-lg text-slate-900 group hover:bg-slate-100 dark:text-white dark:hover:bg-slate-700"
                        aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                        <svg aria-hidden="true"
                            class="flex-shrink-0 w-6 h-6 transition duration-75 text-slate-500 group-hover:text-slate-900 dark:text-slate-400 dark:group-hover:text-white"
                            fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-pages" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-medium transition duration-75 rounded-lg text-slate-900 pl-11 group hover:bg-slate-100 dark:text-white dark:hover:bg-slate-700">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-medium transition duration-75 rounded-lg text-slate-900 pl-11 group hover:bg-slate-100 dark:text-white dark:hover:bg-slate-700">Kanban</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center w-full p-2 text-base font-medium transition duration-75 rounded-lg text-slate-900 pl-11 group hover:bg-slate-100 dark:text-white dark:hover:bg-slate-700">Calendar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </aside>

    <main class="h-auto p-4 pt-20 md:ml-64">
        {{ $slot }}
    </main>
</body>

</html>
