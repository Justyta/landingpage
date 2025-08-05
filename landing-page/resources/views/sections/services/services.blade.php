<section id="services" class="bg-brand-cream/50 py-24">
    <div class="container mx-auto px-4 max-w-6xl">

        {{-- Two-column layout --}}
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-10 items-center">

            {{-- LEFT (60 %) --}}
            <div class="lg:col-span-3 space-y-6">

                {{-- Badge --}}
              <span class="inline-block text-base md:text-lg font-bold tracking-widest uppercase
             bg-gradient-to-r from-brand-green to-brand-teal
             bg-clip-text text-transparent">
    {{ __('services.badge') }}
</span>
                {{-- Heading --}}
                <h2 class="text-4xl md:text-5xl font-bold leading-[1.3]
                           bg-gradient-to-r from-brand-maroon to-brand-charcoal
                           bg-clip-text text-transparent">
                    {!! nl2br(__('services.heading')) !!}
                </h2>

                {{-- Description --}}
                <p class="text-lg text-brand-charcoal/80 leading-relaxed">
                    {{ __('services.description') }}
                </p>

                {{-- Animated Statistics --}}
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-4">
    @php
        $stats = [
            ['key'=>'satisfaction', 'target'=>100, 'suffix'=>'%'],
            ['key'=>'cases',        'target'=>350, 'suffix'=>'+'],
            ['key'=>'advice',       'target'=>500, 'suffix'=>'+'],
            ['key'=>'branches',     'target'=>250, 'suffix'=>'+'],
        ];
    @endphp
    @foreach($stats as $stat)
        <div class="text-center"
             x-data="{ 
                 shown: false, 
                 count: 0,
                 target: {{ $stat['target'] }},
                 suffix: '{{ $stat['suffix'] }}',
                 startCounting() {
                     if (this.shown) return;
                     this.shown = true;
                     let duration = 2500; // 2.5 seconds duration
                     let startTime = null;
                     let step = (timestamp) => {
                         if (!startTime) startTime = timestamp;
                         let progress = Math.min((timestamp - startTime) / duration, 1);
                         this.count = Math.floor(progress * this.target);
                         if (progress < 1) {
                             requestAnimationFrame(step);
                         } else {
                             this.count = this.target;
                         }
                     };
                     requestAnimationFrame(step);
                 }
             }"
             x-init="
                 let observer = new IntersectionObserver((entries) => {
                     entries.forEach(entry => {
                         if (entry.isIntersecting) {
                             startCounting();
                         }
                     });
                 });
                 observer.observe($el);
             ">
            <div class="text-3xl font-bold text-brand-green" x-text="count + suffix"></div>
            <div class="text-sm text-brand-charcoal/70">{{ __('services.stats.'.$stat['key'].'.label') }}</div>
        </div>
    @endforeach
</div>

            </div>

            {{-- RIGHT (40 %) --}}
            <div class="lg:col-span-2 flex justify-center">
                <img src="{{ asset('assets/images/lady-justice-statue.png') }}"
                     alt="{{ __('services.image_alt') }}"
                     class="w-full max-w-xs md:max-w-sm rounded-2xl shadow-2xl">
            </div>

        </div>

        {{-- Divider --}}
        <div class="mt-16 mb-16 flex justify-center">
            <div class="w-20 h-px bg-brand-gold/40"></div>
        </div>

    </div>
</section>