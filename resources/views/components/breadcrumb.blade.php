<div class="mb-8 bg-white rounded-lg shadow-sm dark:bg-slate-800">
    <div class="flex flex-col gap-2 px-6 py-4 md:justify-between md:flex-row ">

        <h5 class="text-xl text-slate-900 dark:text-slate-100">{{ ucfirst(last(request()->segments())) }}</h5>

        <ul class="flex flex-wrap items-center gap-2">
            @foreach (request()->segments() as $segment)
                @if (!$loop->last)
                    <li class="flex items-center gap-2 text-slate-600 dark:text-slate-400">
                        <a wire:navigate
                            href="{{ url(implode('/', array_slice(request()->segments(), 0, $loop->iteration))) }}">{{ ucfirst($segment) }}</a>
                        <x-lucide-chevron-right class="w-4 h-4" />
                    </li>
                @else
                    <li class="text-slate-400 dark:text-slate-600">
                        <a href="#" class="pointer-events-none">{{ ucfirst($segment) }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
</div>
