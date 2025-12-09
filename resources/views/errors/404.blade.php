<x-layouts.layout :showSidebar="false">
    <x-slot:title>
        404 Not Found
    </x-slot:title>

    <section class="min-h-screen flex flex-col items-center justify-center px-6 text-center">
        <h1 class="text-6xl md:text-8xl font-extrabold text-orange-500 mb-4">
            404
        </h1>

        <h2 class="text-2xl md:text-3xl font-semibold text-gray-100 mb-6">
            Page Not Found
        </h2>

        <p class="text-gray-300 mb-8">
            Oops! The page you are looking for does not exist or has been moved.
        </p>

        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="/"
                class="px-6 py-3 bg-[#FD6F00] text-gray-100 rounded-lg shadow hover:bg-orange-600 transition">
                Go to Home
            </a>
            <a href="/dashboard"
                class="px-6 py-3 border border-gray-400 text-gray-100 rounded-lg shadow hover:bg-gray-800 transition">
                Go to Dashboard
            </a>
        </div>
    </section>
</x-layouts.layout>
