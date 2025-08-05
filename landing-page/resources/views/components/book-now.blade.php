@props(['route' => route('booking')])

<div {{ $attributes->merge(['class' => 'mt-8 flex flex-col items-center gap-y-6']) }}>
    {{-- Button --}}
    <a
        href="{{ $route }}"
        class="group relative inline-flex items-center justify-center
               px-14 py-4 min-w-[280px] text-lg font-bold text-white rounded-xl
               bg-gradient-to-r from-brand-green to-emerald-500
               shadow-[0_8px_20px_rgba(6,78,59,0.35)]
               hover:shadow-[0_12px_30px_rgba(6,78,59,0.55)]
               hover:scale-105 transition-all duration-300 ease-out"
    >
        <span class="relative z-10">{{ __('hero.book_now') }}</span>
        <span
            class="absolute inset-0 w-full h-full transition duration-200
                   transform scale-x-0 group-hover:scale-x-100 origin-left
                   bg-white/20 rounded-xl"
        ></span>
    </a>

    {{-- 5-Star Rating --}}
    <div class="flex items-center space-x-3  text-yellow-400 text-2xl">
        @for ($i = 0; $i < 5; $i++)
            <svg class="w-10 h-10 fill-current" viewBox="0 0 24 24">
                <path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z"/>
            </svg>
        @endfor
    </div>
</div>