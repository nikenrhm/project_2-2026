<div>

    {{-- HEADER --}}
    <section class="bg-slate-950 text-white py-20">

        <div class="max-w-7xl mx-auto px-6">

            <p class="text-amber-500 uppercase tracking-[4px]">
                {{ $car->brand->name ?? '-' }}
            </p>

            <h1 class="text-5xl font-bold mt-4">
                {{ $car->name }}
            </h1>

        </div>

    </section>

    {{-- DETAIL --}}
    <section class="py-16">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-2 gap-12">

                <div>

                    <img
                        src="{{ asset('storage/' . $car->thumbnail) }}"
                        alt="{{ $car->name }}"
                        class="w-full rounded-xl shadow"
                    >

                </div>

                <div>

                    <h2 class="text-4xl font-bold mb-6">
                        Rp {{ number_format($car->price,0,',','.') }}
                    </h2>

                    <div class="space-y-4">

                        <div>
                            <strong>Brand:</strong>
                            {{ $car->brand->name ?? '-' }}
                        </div>

                        <div>
                            <strong>Year:</strong>
                            {{ $car->year }}
                        </div>

                        <div>
                            <strong>Transmission:</strong>
                            {{ $car->transmission }}
                        </div>

                        <div>
                            <strong>Fuel Type:</strong>
                            {{ $car->fuel_type }}
                        </div>

                        <div>
                            <strong>Color:</strong>
                            {{ $car->color }}
                        </div>

                        <div>
                            <strong>Mileage:</strong>
                            {{ number_format($car->mileage) }}
                        </div>

                    </div>

                    <a
                        href="https://wa.me/6281234567890"
                        target="_blank"
                        class="inline-block mt-8 px-8 py-4 bg-green-600 text-white rounded-lg"
                    >
                        Contact via WhatsApp
                    </a>

                </div>

            </div>

        </div>

    </section>

    {{-- DESCRIPTION --}}
    <section class="pb-20">

        <div class="max-w-7xl mx-auto px-6">

            <h2 class="text-3xl font-bold mb-6">
                Description
            </h2>

            <div class="prose max-w-none">

                {!! $car->description !!}

            </div>

        </div>

    </section>

</div>