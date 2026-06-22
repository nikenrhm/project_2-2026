<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dream Culture</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-serif-luxury {
            font-family: 'Playfair Display', Georgia, serif !important;
        }
    </style>
</head>

<body class="bg-[#f8f4ec] text-[#242932] min-h-screen antialiased">

    @include('partials.navbar')

    <main class="min-h-screen bg-[#f8f4ec]">
        {{ $slot }}
    </main>

  <footer class="bg-[#f8f4ec] border-t border-[#c58b16]/15 mt-0">
    <div class="max-w-7xl mx-auto px-6 lg:px-8 pt-16 pb-10">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                {{-- BRAND --}}
                <div>
                    <a href="/" class="inline-block text-3xl font-bold tracking-tight text-[#242932]">
                        Dream <span class="text-[#c58b16]">Culture</span>
                    </a>

                    <p class="mt-5 text-[#4b5563] text-sm leading-relaxed max-w-sm">
                        Premium luxury car dealer dengan koleksi kendaraan pilihan dan layanan profesional untuk pengalaman pembelian yang aman, transparan, dan nyaman.
                    </p>
                </div>

                {{-- QUICK LINKS --}}
                <div>
                    <h4 class="font-serif-luxury text-xl font-normal text-[#242932]">
                        Quick Links
                    </h4>

                    <div class="w-12 h-[1px] bg-[#c58b16]/50 mt-3 mb-5"></div>

                    <div class="space-y-3 text-sm font-medium text-[#4b5563]">
                        <a href="/" class="block hover:text-[#c58b16] transition">
                            Home
                        </a>

                        <a href="/cars/new" class="block hover:text-[#c58b16] transition">
                            New Cars
                        </a>

                        <a href="/cars/used" class="block hover:text-[#c58b16] transition">
                            Used Cars
                        </a>

                        <a href="/service-center" class="block hover:text-[#c58b16] transition">
                            Service Center
                        </a>
                    </div>
                </div>

                {{-- CONTACT --}}
                <div>
                    <h4 class="font-serif-luxury text-xl font-normal text-[#242932]">
                        Contact
                    </h4>

                    <div class="w-12 h-[1px] bg-[#c58b16]/50 mt-3 mb-5"></div>

                    <div class="space-y-3 text-sm text-[#4b5563]">
                        <p>
                            <span class="font-semibold text-[#242932]">WhatsApp:</span>
                            <a href="https://wa.me/6281234567890" class="hover:text-[#c58b16] transition">
                                0812-3456-7890
                            </a>
                        </p>

                        <p>
                            <span class="font-semibold text-[#242932]">Email:</span>
                            <a href="mailto:info@dreamculture.com" class="hover:text-[#c58b16] transition">
                                info@dreamculture.com
                            </a>
                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-12 pt-6 border-t border-[#c58b16]/15 flex flex-col md:flex-row items-center justify-between gap-4">

                <p class="text-[#6b7280] text-sm">
                    © {{ date('Y') }} Dream Culture. All rights reserved.
                </p>

                <div class="flex items-center gap-6 text-sm text-[#6b7280]">
                    <a href="/" class="hover:text-[#c58b16] transition">
                        Privacy Policy
                    </a>

                    <a href="/" class="hover:text-[#c58b16] transition">
                        Terms
                    </a>
                </div>

            </div>

        </div>
    </footer>

    @livewireScripts

</body>
</html>