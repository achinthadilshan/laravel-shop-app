<aside
    class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-white border-r border-slate-200 pt-14 md:translate-x-0 dark:bg-slate-800 dark:border-slate-700"
    aria-label="Sidenav" id="drawer-navigation">
    <div class="h-full px-3 py-5 overflow-y-auto bg-white dark:bg-slate-800">
        <ul class="space-y-2">
            <li>
                <a href="{{ route('dashboard') }}"
                    class="flex items-center p-2 text-base font-medium rounded-lg text-slate-900 dark:text-white hover:bg-slate-100 dark:hover:bg-slate-700 group"
                    wire:navigate>
                    <x-lucide-pie-chart
                        class="w-5 h-5 transition duration-75 text-slate-500 dark:text-slate-400 group-hover:text-slate-900 dark:group-hover:text-white" />
                    <span class="ml-3">Overview</span>
                </a>
            </li>
            <li>
                <button type="button"
                    class="flex items-center w-full p-2 text-base font-medium transition duration-75 rounded-lg text-slate-900 group hover:bg-slate-100 dark:text-white dark:hover:bg-slate-700"
                    aria-controls="dropdown-pages" data-collapse-toggle="dropdown-pages">
                    <i class=""></i>
                    <x-lucide-file-text
                        class="flex-shrink-0 w-5 h-5 transition duration-75 text-slate-500 group-hover:text-slate-900 dark:text-slate-400 dark:group-hover:text-white" />
                    <span class="flex-1 ml-3 text-left whitespace-nowrap">Pages</span>
                    <x-lucide-chevron-down class="w-5 h-5" />
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
