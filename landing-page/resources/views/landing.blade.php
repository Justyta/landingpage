<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>justyta</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&display=swap" rel="stylesheet" />

  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-brand-white text-brand-maroon font-sans leading-normal tracking-normal relative">

  <!-- Google Translate Widget Fixed Top-Right -->
  <div
    id="google_translate_element"
    class="fixed top-4 right-4 z-50 bg-white rounded-lg shadow-md p-2 text-sm font-semibold font-serif text-[#421111] cursor-pointer"
  ></div>

  @include('sections.header.header')

  {{-- HERO YOUTUBE VIDE (larger) --}}
  <section class="bg-brand-white">
    <div class="container mx-auto px-4 py-10">
      <div class="max-w-5xl mx-auto">
        <div class="aspect-video w-full">
          <iframe
            src="https://www.youtube.com/embed/9nVEfjmDlVk?autoplay=1&mute=1&loop=1&playlist=9nVEfjmDlVk&controls=0&showinfo=0&rel=0&modestbranding=1"
            title="justyta hero video"
            class="w-full h-full rounded-2xl shadow-2xl"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
          ></iframe>
        </div>
      </div>
    </div>
  </section>

  {{-- MAIN SECTIONS --}}
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

  <!-- Google Translate Script -->
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {
          pageLanguage: "en",
          includedLanguages: "en,ar",
          layout: google.translate.TranslateElement.InlineLayout.SIMPLE,
        },
        "google_translate_element"
      );
    }
  </script>
  <script
    type="text/javascript"
    src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"
  ></script>

  <style>
    /* Optional: hide “Powered by Google” logo and icon */
    .goog-logo-link,
    .goog-te-gadget-icon {
      display: none !important;
    }

    /* Tailwind-style override for select dropdown inside Google Translate */
    #google_translate_element select.goog-te-combo {
      @apply border border-gray-300 rounded-md p-1 bg-white font-serif text-[#421111] text-base cursor-pointer;
      outline: none;
    }
  </style>
</body>
</html>
