<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>justyta</title>
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet">
  
  <!-- Alpine.js -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Vite builds -->
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-brand-white text-brand-maroon font-sans leading-normal tracking-normal relative">

  <!-- Language Switcher -->
  <x-lang-switcher />

  <!-- 2️⃣  Header & Sections -->
  @include('sections.header.header')
  @include('sections.hero-video')

  {{-- HERO VIDEO SECTION --}}
  <main>
    @include('sections.problem.problem')
    @include('sections.services.services')
    @include('sections.portfolio.portfolio')
    @include('sections.testimonials.testimonials')
    @include('sections.about.about')
    @include('sections.faq.faq')
    @include('sections.cta.cta')
  </main>

  @include('sections.footer.footer')

</body>
</html>