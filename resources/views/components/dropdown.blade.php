@props(['id' => '0'])

<button id="dropdown-button-{{ $id }}" data-dropdown-toggle="dropdown-{{ $id }}" type="button"
    {{ $trigger->attributes->merge(['class' => '']) }}>
    {{ $trigger }}
</button>
<div id="dropdown-{{ $id }}"
    {{ $content->attributes->merge(['class' => 'z-10 hidden bg-white divide-y rounded shadow divide-slate-100 min-w-40 dark:bg-slate-700 dark:divide-slate-600']) }}>
    {{ $content }}
</div>
