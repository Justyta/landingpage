<section id="problem" class="bg-brand-cream/50 py-24">
    <div class="container mx-auto px-4">

        {{-- Heading --}}
        <h2 class="text-4xl md:text-5xl font-bold text-center
                   bg-gradient-to-r from-brand-green via-brand-teal to-brand-lime
                   bg-clip-text text-transparent mb-4">
            {{ __('problem.title') }}
        </h2>
        <p class="text-xl text-center mb-14 max-w-2xl mx-auto text-brand-charcoal/80">
            {{ __('problem.subtitle') }}
        </p>

        {{-- 4-COLUMN GRID (10 cards) --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 place-items-stretch">
            @foreach(range(1,10) as $i)
                <div
                    class="group flex flex-col items-center text-center
                           bg-white/70 backdrop-blur-md border border-brand-gold/30
                           rounded-3xl p-6 shadow-xl hover:shadow-brand-gold/30
                           transition-all duration-300 transform hover:-translate-y-2"
                >
                    <div class="mb-4 p-3 rounded-full bg-gradient-to-br from-brand-lime/20 to-brand-teal/20">
                        {{-- Heroicon placeholder; swap any SVG you like --}}
                        <svg class="w-12 h-12 text-brand-green" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                        </svg>
                    </div>

                    <h3 class="text-lg font-bold mb-2 text-brand-maroon">
                        {{ __('problem.card'.$i.'.title') }}
                    </h3>

                    <p class="text-sm text-brand-charcoal/80 leading-relaxed">
                        {{ __('problem.card'.$i.'.text') }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</section>