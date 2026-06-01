<div>

    <section class="bg-slate-950 text-white py-20">

        <div class="max-w-4xl mx-auto px-6">

            <h1 class="text-5xl font-bold">
                Service Center
            </h1>

            <p class="mt-4 text-slate-300">
                Booking service kendaraan Anda dengan mudah.
            </p>

        </div>

    </section>

    <section class="py-20">

        <div class="max-w-4xl mx-auto px-6">

            @if(session('success'))

                <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-6">
                    {{ session('success') }}
                </div>

            @endif

            <form wire:submit="submit" class="space-y-6">

                <input
                    type="text"
                    wire:model="full_name"
                    placeholder="Full Name"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="email"
                    wire:model="email"
                    placeholder="Email"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="text"
                    wire:model="phone"
                    placeholder="Phone"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="text"
                    wire:model="brand"
                    placeholder="Car Brand"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="date"
                    wire:model="appointment_date"
                    class="w-full border rounded-lg p-4"
                >

                <select
                    wire:model="service_type_id"
                    class="w-full border rounded-lg p-4"
                >

                    <option value="">
                        Select Service Type
                    </option>

                    @foreach($serviceTypes as $service)

                        <option value="{{ $service->id }}">
                            {{ $service->name }}
                        </option>

                    @endforeach

                </select>

                <textarea
                    wire:model="notes"
                    rows="5"
                    placeholder="Notes"
                    class="w-full border rounded-lg p-4"
                ></textarea>

                <button
                    type="submit"
                    class="bg-amber-500 px-8 py-4 rounded-lg font-semibold"
                >
                    Book Service
                </button>

            </form>

        </div>

    </section>

</div>