<header class="bg-brand-cream/70 backdrop-blur-lg border-b border-brand-gold/30">
    <div class="container mx-auto px-4 py-10">
        {{-- Logo Row --}}
        <div class="flex justify-center items-center mb-8">
            <a href="/" class="flex items-center space-x-3">
                <img src="{{ asset('assets/images/JUSTYTA Logo transparent.png') }}" alt="justyta" class="h-14 w-auto">
                <span class="text-3xl md:text-4xl font-bold text-brand-maroon font-['Cinzel_Decorative']">
                    JUSTYTA
                </span>
            </a>
        </div>

        {{-- Hero Content --}}
        <div class="text-center">
            <h1 class="text-5xl md:text-6xl font-bold
                       bg-gradient-to-r from-brand-green via-brand-teal to-brand-lime
                       bg-clip-text text-transparent
                       font-['Cinzel_Decorative'] tracking-wide leading-tight">
                {{ __('hero.heading') }}
            </h1>

            <div class="mt-6 space-y-4 max-w-3xl mx-auto
                        text-xl md:text-2xl font-medium text-brand-charcoal/90">
                <p>{!! __('hero.sub1') !!}</p>
                <p>{!! __('hero.sub2') !!}</p>
                <p>{!! __('hero.sub3') !!}</p>
            </div>
        </div>
    </div>
</header>