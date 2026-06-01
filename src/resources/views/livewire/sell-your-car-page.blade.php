<div>

    <section class="bg-slate-950 text-white py-20">

        <div class="max-w-4xl mx-auto px-6">

            <h1 class="text-5xl font-bold">
                Sell Your Car
            </h1>

            <p class="mt-4 text-slate-300">
                Jual mobil Anda dengan proses cepat dan aman.
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
                    placeholder="Brand"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="text"
                    wire:model="model"
                    placeholder="Model"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="number"
                    wire:model="year"
                    placeholder="Year"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="number"
                    wire:model="mileage"
                    placeholder="Mileage"
                    class="w-full border rounded-lg p-4"
                >

                <input
                    type="number"
                    wire:model="expected_price"
                    placeholder="Expected Price"
                    class="w-full border rounded-lg p-4"
                >

                <textarea
                    wire:model="description"
                    rows="5"
                    placeholder="Description"
                    class="w-full border rounded-lg p-4"
                ></textarea>

                <input
                    type="file"
                    wire:model="photos"
                    multiple
                    class="w-full border rounded-lg p-4"
                >

                <button
                    type="submit"
                    class="bg-amber-500 px-8 py-4 rounded-lg font-semibold"
                >
                    Submit
                </button>

            </form>

        </div>

    </section>

</div>