<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dream Culture</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>
<body class="bg-black text-white min-h-screen">

    @include('partials.navbar')

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    <footer class="bg-black border-t border-yellow-500 mt-20">
        <div class="max-w-7xl mx-auto px-6 py-12">

            <div class="grid md:grid-cols-3 gap-10">

                <div>
                    <h3 class="text-2xl font-bold mb-4">
                        Dream <span class="text-yellow-500">Culture</span>
                    </h3>

                    <p class="text-gray-400">
                        Premium luxury car dealer dengan koleksi kendaraan
                        pilihan dan layanan profesional.
                    </p>
                </div>

                <div>
                    <h4 class="text-yellow-500 font-semibold mb-4">
                        Quick Links
                    </h4>

                    <div class="space-y-2">
                        <a href="/" class="block hover:text-yellow-500">Home</a>
                        <a href="/cars/new" class="block hover:text-yellow-500">New Cars</a>
                        <a href="/cars/used" class="block hover:text-yellow-500">Used Cars</a>
                        <a href="/service-center" class="block hover:text-yellow-500">Service Center</a>
                    </div>
                </div>

                <div>
                    <h4 class="text-yellow-500 font-semibold mb-4">
                        Contact
                    </h4>

                    <p class="text-gray-400">
                        WhatsApp: 0812-3456-7890
                    </p>

                    <p class="text-gray-400">
                        info@dreamculture.com
                    </p>
                </div>

            </div>

            <div class="border-t border-zinc-800 mt-10 pt-6 text-center text-gray-500">
                © {{ date('Y') }} Dream Culture. All rights reserved.
            </div>

        </div>
    </footer>

    @livewireScripts

</body>
</html>