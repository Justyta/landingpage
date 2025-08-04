<section id="faq" class="bg-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Frequently Asked Questions</h2>
        <p class="text-xl text-center mb-16">Find answers to common questions about our services.</p>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @foreach($faqs as $faq)
                <div class="bg-white shadow-md rounded-lg p-6">
                    <h3 class="text-2xl font-bold mb-4">{{ $faq['question'] }}</h3>
                    <p class="text-gray-700">{{ $faq['answer'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>