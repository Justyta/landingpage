<section id="contact" class="bg-blue-500 text-white py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">Get in Touch</h2>
        <p class="text-xl text-center mb-16">Ready to take your business to the next level? Contact us today!</p>
        <form method="POST" action="{{ route('contact.store') }}" class="bg-white shadow-md rounded-lg p-6">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                <input type="text" id="name" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                <input type="email" id="email" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
                <textarea id="message" name="message" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" rows="4" required></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Submit</button>
            </div>
        </form>
    </div>
</section>