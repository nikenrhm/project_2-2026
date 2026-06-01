<nav class="bg-black border-b border-yellow-500 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6">

        <div class="flex justify-between items-center h-24">

            <a href="/" class="text-4xl font-bold text-white">
                Dream <span class="text-yellow-500">Culture</span>
            </a>

            <div class="flex items-center gap-10 font-medium text-white">

                <a href="/"
                   class="hover:text-yellow-500 transition">
                    Home
                </a>

                {{-- DROPDOWN CARS --}}
                <div x-data="{ open: false }" class="relative">

                    <button
                        type="button"
                        @click="open = !open"
                        class="flex items-center gap-2 hover:text-yellow-500 transition"
                    >
                        Cars

                        <svg xmlns="http://www.w3.org/2000/svg"
                             class="w-4 h-4"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M19 9l-7 7-7-7"
                            />
                        </svg>
                    </button>

                    <div
                        x-show="open"
                        @click.outside="open = false"
                        x-transition
                        class="absolute left-0 mt-3 w-64 bg-zinc-900 border border-yellow-500 rounded-xl shadow-2xl overflow-hidden z-50"
                        style="display:none;"
                    >

                        <a href="/cars/new"
                           class="block px-5 py-3 hover:bg-yellow-500 hover:text-black transition">
                            New Cars
                        </a>

                        <a href="/cars/used"
                           class="block px-5 py-3 hover:bg-yellow-500 hover:text-black transition">
                            Used Cars
                        </a>

                        <a href="/special-request"
                           class="block px-5 py-3 hover:bg-yellow-500 hover:text-black transition">
                            Special Request
                        </a>

                        <a href="/sell-your-car"
                           class="block px-5 py-3 hover:bg-yellow-500 hover:text-black transition">
                            Sell Your Car
                        </a>

                    </div>

                </div>

                <a href="/service-center"
                   class="hover:text-yellow-500 transition">
                    Service Center
                </a>

                <a href="#contact"
                   class="hover:text-yellow-500 transition">
                    Contact
                </a>

            </div>

        </div>

    </div>
</nav>