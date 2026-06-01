<div>

<div>

    {{-- HERO --}}
    <section class="bg-slate-950 text-white">
        <div class="max-w-7xl mx-auto px-6 py-32">

            <span class="text-amber-500 uppercase tracking-[5px]">
                Premium Luxury Car Dealer
            </span>

            <h1 class="text-6xl font-bold mt-4 mb-6">
                Dream Culture
            </h1>

            <p class="text-xl text-slate-300 max-w-2xl leading-relaxed">
                Koleksi mobil premium pilihan dengan kualitas terbaik,
                unit terverifikasi, transaksi aman, dan layanan profesional.
            </p>

            <div class="flex gap-4 mt-10">
                <a
                    href="/cars/new"
                    class="px-8 py-4 bg-amber-500 text-black font-semibold rounded-lg"
                >
                    Explore Cars
                </a>

                <a
                    href="/contact"
                    class="px-8 py-4 border border-white rounded-lg"
                >
                    Contact Us
                </a>
            </div>

        </div>
    </section>

    <section class="bg-black text-white">
    <div class="max-w-7xl mx-auto px-6 py-10">

        <div class="grid md:grid-cols-4 gap-6 text-center">

            <div>
                <h3 class="text-4xl font-bold text-amber-500">120+</h3>
                <p>Premium Cars</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-amber-500">500+</h3>
                <p>Happy Customers</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-amber-500">10+</h3>
                <p>Years Experience</p>
            </div>

            <div>
                <h3 class="text-4xl font-bold text-amber-500">100%</h3>
                <p>Verified Unit</p>
            </div>

        </div>

    </div>
</section>

<section class="py-24 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <p class="uppercase tracking-[4px] text-amber-600 mb-2">
            Collection
        </p>

        <h2 class="text-5xl font-bold mb-12">
            Featured Cars
        </h2>
        @if($featuredCars->count())

<div class="grid md:grid-cols-4 gap-6">

    @foreach($featuredCars as $car)

        <div class="bg-white rounded-xl overflow-hidden shadow">

            <img
                src="{{ asset('storage/' . $car->thumbnail) }}"
                class="w-full h-56 object-cover"
                alt="{{ $car->name }}"
            >

            <div class="p-5">

                <h3 class="font-bold text-lg">
                    {{ $car->name }}
                </h3>

                <p class="text-gray-500 text-sm mt-2">
                    {{ $car->brand->name ?? '-' }}
                </p>

                <p class="text-gray-500 text-sm">
                    {{ $car->year }}
                </p>

                <p class="text-amber-600 font-bold text-xl mt-4">
                    Rp {{ number_format($car->price,0,',','.') }}
                </p>

            </div>

        </div>

    @endforeach

</div>

@else

<p>Belum ada mobil tersedia.</p>

@endif
    </div>
</section>

    {{-- FEATURED CARS --}}
    <section class="py-20 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">

            <div class="flex justify-between items-center mb-10">

                <div>

                    <p class="text-amber-600 uppercase text-sm">
                        Collection
                    </p>

                    <h2 class="text-4xl font-bold">
                        Featured Cars
                    </h2>

                </div>

            </div>

            <div class="grid md:grid-cols-4 gap-6">

                @forelse($featuredCars as $car)

                    <div class="bg-white rounded-xl shadow overflow-hidden">

                        <img
                            src="{{ asset('storage/'.$car->thumbnail) }}"
                            class="w-full h-56 object-cover"
                            alt="{{ $car->name }}"
                        >

                        <div class="p-4">

                            <h3 class="font-bold text-lg">
                                {{ $car->name }}
                            </h3>

                            <p class="text-sm text-gray-500 mt-2">
                                {{ $car->year }}
                                •
                                {{ $car->transmission }}
                            </p>

                            <p class="text-xl font-bold mt-4">
                                Rp {{ number_format($car->price,0,',','.') }}
                            </p>

                            <a
                                href="/cars/{{ $car->slug }}"
                                class="inline-block mt-4 text-amber-600 font-semibold"
                            >
                                View Detail →
                            </a>

                        </div>

                    </div>

                @empty

                    <p>Belum ada mobil featured.</p>

                @endforelse

            </div>

        </div>

    </section>

    <section class="bg-slate-950 text-white py-20">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl font-bold mb-10">
            Our Brands
        </h2>

        <div class="grid grid-cols-2 md:grid-cols-6 gap-6">
            @foreach($brands as $brand)

<div class="bg-white rounded-xl p-6 flex flex-col items-center">

    <img
        src="{{ asset('storage/' . $brand->logo) }}"
        class="h-16 object-contain"
        alt="{{ $brand->name }}"
    >

    <p class="mt-4 text-black font-medium">
        {{ $brand->name }}
    </p>

</div>

@endforeach
        </div>
    </div>
</section>

    {{-- BRANDS --}}
    <section class="py-20 bg-slate-950 text-white">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-4xl font-bold mb-10">
                Our Brands
            </h2>

            <div class="grid grid-cols-2 md:grid-cols-6 gap-6">

                @foreach($brands as $brand)

                    <div class="bg-white rounded-xl p-6">

                        <img
                            src="{{ asset('storage/'.$brand->logo) }}"
                            alt="{{ $brand->name }}"
                            class="h-16 mx-auto object-contain"
                        >

                    </div>

                @endforeach

            </div>

        </div>

    </section>

    {{-- WHY US --}}
    <section class="py-20">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-4xl font-bold mb-10">
                Why Choose Dream Culture?
            </h2>

            <div class="grid md:grid-cols-4 gap-6">

                <div class="border rounded-xl p-6">
                    Unit Terverifikasi
                </div>

                <div class="border rounded-xl p-6">
                    Dokumen Lengkap
                </div>

                <div class="border rounded-xl p-6">
                    Transaksi Aman
                </div>

                <div class="border rounded-xl p-6">
                    After Sales Support
                </div>

            </div>

        </div>

    </section>

</div>