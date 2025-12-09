<x-layouts.layout :showSidebar="false">
    <x-slot:title>
        Welcome
    </x-slot:title>

    <section class="min-h-screen flex items-center justify-center px-6">
        <div class="text-center max-w-2xl">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-100 mb-4">
                Welcome to Laravel Tailwind Template
            </h1>

            <p class="text-lg md:text-xl text-gray-300 mb-8">
                A clean and ready-to-use template built with Laravel, Tailwind CSS,
                and SweetAlert. Start building your web application quickly with
                a well-organized structure and beautiful alert notifications.
            </p>

            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/dashboard"
                    class="px-6 py-3 bg-[#FD6F00] text-gray-100 rounded-lg shadow hover:bg-orange-600 transition">
                    Go to Dashboard
                </a>

                <a href="https://github.com/SimplyMon/laravel-temp.git" target="_blank"
                    class="px-6 py-3 border border-gray-400 text-gray-100 rounded-lg shadow hover:bg-gray-800 transition">
                    View on GitHub
                </a>
            </div>
        </div>
    </section>
</x-layouts.layout>
