@php
    $segments = request()->segments();
    $route    = request()->path();
@endphp

<div class="fixed top-4 right-4 z-50 bg-white shadow-lg rounded-md p-2 text-sm">
    @foreach(['ar','en'] as $l)
        <a  href="{{ route('set-locale', $l) }}"
            class="px-2 py-1 rounded {{ app()->getLocale() === $l ? 'bg-brand-green text-white' : 'text-brand-maroon' }}">
            {{ strtoupper($l) }}
        </a>
    @endforeach
</div>