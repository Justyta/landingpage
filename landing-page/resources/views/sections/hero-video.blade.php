{{-- HERO VIDEO SECTION --}}
<section id="hero-video" class="bg-brand-white">
    <div class="container mx-auto px-4 py-10">
        <div class="max-w-5xl mx-auto">
            <div class="aspect-video w-full">
                <iframe
                    src="https://www.youtube.com/embed/9nVEfjmDlVk?autoplay=1&mute=1&loop=1&playlist=9nVEfjmDlVk&controls=0&showinfo=0&rel=0&modestbranding=1"
                    title="justyta hero video"
                    class="w-full h-full rounded-2xl shadow-2xl"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
            {{-- Book-Now Component --}}
            <x-book-now />
            {{-- or with custom route: <x-book-now route="/some-other-url" /> --}}
        </div>
    </div>
</section>