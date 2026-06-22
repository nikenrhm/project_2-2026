<nav class="bg-white border-b border-[#d6a447]/45 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="flex justify-between items-center h-24">

            <a href="/" class="text-4xl font-bold tracking-tight text-[#242932]">
                Dream <span class="text-[#c58b16]">Culture</span>
            </a>

            <div class="flex items-center gap-10 font-semibold text-[#242932]">

                <a href="/"
                   class="text-[#c58b16] border-b-2 border-[#c58b16] pb-2 hover:text-[#a8710d] transition">
                    Home
                </a>

                {{-- DROPDOWN CARS --}}
                <div x-data="{ open: false }" class="relative">

                    <button
                        type="button"
                        @click="open = !open"
                        class="flex items-center gap-2 hover:text-[#c58b16] transition"
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
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div
                        x-show="open"
                        @click.outside="open = false"
                        x-transition
                        class="absolute left-0 mt-3 w-64 bg-white border border-[#c58b16]/20 rounded-xl shadow-[0_18px_45px_rgba(36,41,50,0.12)] overflow-hidden z-50"
                        style="display:none;"
                    >
                        <a href="/cars/new"
                           class="block px-5 py-3 text-[#242932] hover:bg-[#fff7e8] hover:text-[#c58b16] transition">
                            New Cars
                        </a>

                        <a href="/cars/used"
                           class="block px-5 py-3 text-[#242932] hover:bg-[#fff7e8] hover:text-[#c58b16] transition">
                            Used Cars
                        </a>

                        <a href="/special-request"
                           class="block px-5 py-3 text-[#242932] hover:bg-[#fff7e8] hover:text-[#c58b16] transition">
                            Special Request
                        </a>

                        <a href="/sell-your-car"
                           class="block px-5 py-3 text-[#242932] hover:bg-[#fff7e8] hover:text-[#c58b16] transition">
                            Sell Your Car
                        </a>
                    </div>
                </div>

                <a href="/service-center"
                   class="hover:text-[#c58b16] transition">
                    Service Center
                </a>

                <a href="{{ route('contact') }}"
                   class="hover:text-[#c58b16] transition">
                    Contact
                </a>
                
                @auth
    <div class="flex items-center gap-3">
        <span class="text-sm font-semibold text-[#242932]">
            {{ auth()->user()->name }}
        </span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button
                type="submit"
                class="text-sm font-bold text-[#c58b16] hover:text-[#a8710d] transition"
            >
                Logout
            </button>
        </form>
    </div>
@else
    <a href="{{ route('login') }}"
       class="hover:text-[#c58b16] transition">
        Login
    </a>

    <a href="{{ route('register') }}"
       class="px-4 py-2 rounded-lg bg-[#c58b16] text-white hover:bg-[#a8710d] transition">
        Register
    </a>
@endauth
            </div>
        </div>
    </div>
</nav>