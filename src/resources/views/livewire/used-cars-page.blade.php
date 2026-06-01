<div>

    {{-- HEADER --}}
    <section class="bg-slate-950 text-white py-20">
        <div class="max-w-7xl mx-auto px-6">

            <p class="text-amber-500 uppercase tracking-[4px]">
                Dream Culture
            </p>

            <h1 class="text-5xl font-bold mt-4">
                Used Cars
            </h1>

        </div>
    </section>

    {{-- FILTER --}}
    <section class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-6 py-6">

            <div class="max-w-sm">

                <select
                    wire:model.live="brand"
                    class="w-full border rounded-lg p-3"
                >
                    <option value="">
                        Semua Brand
                    </option>

                    @foreach($brands as $brand)

                        <option value="{{ $brand->id }}">
                            {{ $brand->name }}
                        </option>

                    @endforeach

                </select>

            </div>

        </div>
    </section>

    {{-- LIST MOBIL --}}
    <section class="py-16 bg-gray-100">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid md:grid-cols-4 gap-6">

                @forelse($cars as $car)

                    <div class="bg-white rounded-xl overflow-hidden shadow">

                        <img
                            src="{{ asset('storage/' . $car->thumbnail) }}"
                            class="w-full h-56 object-cover"
                            alt="{{ $car->name }}"
                        >

                        <div class="p-5">

                            <p class="text-sm text-gray-500">
                                {{ $car->brand->name ?? '-' }}
                            </p>

                            <h3 class="font-bold text-lg mt-1">
                                {{ $car->name }}
                            </h3>

                            <p class="text-sm text-gray-500 mt-2">
                                {{ $car->year }}
                            </p>

                            <p class="text-amber-600 font-bold text-xl mt-4">
                                Rp {{ number_format($car->price,0,',','.') }}
                            </p>

                            <a
                                href="/cars/{{ $car->slug }}"
                                class="inline-block mt-4 px-4 py-2 border rounded-lg"
                            >
                                View Details
                            </a>

                        </div>

                    </div>

                @empty

                    <div class="col-span-4 text-center py-20">
                        Belum ada mobil bekas tersedia.
                    </div>

                @endforelse

            </div>

        </div>

    </section>

</div>