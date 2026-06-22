<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Culture | Premium Luxury Car Dealer</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;1,300;1,400&family=Plus+Jakarta+Sans:wght@200;300;400;500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* Setup class pembantu font serif khusus kemewahan */
        .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #000000;
        }
    </style>
</head>
<body class="bg-black text-neutral-300 antialiased overflow-x-hidden">

    {{-- NAVIGATION NAVBAR --}}
    <header class="border-b border-white/[0.04] bg-black/70 backdrop-blur-xl fixed top-0 left-0 right-0 z-50">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="h-20 flex items-center justify-between">

                <div class="flex flex-col">
                    <a href="#" class="text-xl font-serif tracking-[0.18em] uppercase">
                        <span class="text-white font-light">Dream</span>
                        <span class="text-amber-400 font-normal">Culture</span>
                    </a>
                    <span class="text-[8px] tracking-[0.25em] uppercase text-neutral-500 font-light -mt-0.5">Premium Luxury Car Dealer</span>
                </div>

                <nav>
                    <ul class="hidden md:flex items-center gap-10 text-[10px] tracking-[0.25em] uppercase font-light">
                        <li><a href="#" class="text-amber-400 transition-colors duration-300">Home</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors duration-300">Cars <i class="fa-solid fa-chevron-down text-[8px] ml-1 opacity-70"></i></a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors duration-300">Service Center</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors duration-300">About Us</a></li>
                        <li><a href="#" class="text-neutral-400 hover:text-white transition-colors duration-300">Contact</a></li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>