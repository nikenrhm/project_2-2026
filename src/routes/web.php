<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

use App\Livewire\HomePage;
use App\Livewire\NewCarsPage;
use App\Livewire\UsedCarsPage;
use App\Livewire\CarDetailPage;
use App\Livewire\SpecialRequestPage;
use App\Livewire\SellYourCarPage;
use App\Livewire\ServiceCenterPage;

use App\Models\User;
use App\Models\ServiceAppointment;
use App\Models\SpecialRequest;
use App\Models\SellCarRequest;

/*
|--------------------------------------------------------------------------
| Livewire Asset Handling
|--------------------------------------------------------------------------
*/

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

/*
|--------------------------------------------------------------------------
| Auth Pages
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', function (Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        $remember = $request->boolean('remember');

        if (! Auth::attempt($credentials, $remember)) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password tidak sesuai.',
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        return redirect()->intended(route('home'));
    })->name('login.store');

    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');

    Route::post('/register', function (Request $request) {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        Auth::login($user);

        $request->session()->regenerate();

        return redirect()->route('home');
    })->name('register.store');
});

Route::post('/logout', function (Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()->route('home');
})->middleware('auth')->name('logout');

/*
|--------------------------------------------------------------------------
| Public Pages
|--------------------------------------------------------------------------
*/

Route::get('/', HomePage::class)->name('home');

Route::get('/cars/new', NewCarsPage::class)->name('cars.new');

Route::get('/cars/used', UsedCarsPage::class)->name('cars.used');

Route::get('/cars/{slug}', CarDetailPage::class)->name('cars.show');

Route::get('/special-request', SpecialRequestPage::class)->name('special-request');

Route::get('/sell-your-car', SellYourCarPage::class)->name('sell-your-car');

Route::get('/service-center', ServiceCenterPage::class)->name('service-center');

Route::view('/contact', 'livewire.contact')->name('contact');

/*
|--------------------------------------------------------------------------
| Protected Form Submissions
|--------------------------------------------------------------------------
| Tiga form ini hanya bisa disubmit oleh user yang sudah login.
*/

Route::middleware('auth')->group(function () {
    Route::post('/service-center', function (Request $request) {
        $validated = $request->validate([
            'service_type_id' => ['required', 'exists:service_types,id'],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'brand' => ['nullable', 'string', 'max:255'],
            'appointment_date' => ['nullable', 'date'],
            'notes' => ['nullable', 'string'],
        ]);

        ServiceAppointment::create([
            'service_type_id' => $validated['service_type_id'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'] ?? auth()->user()->email,
            'phone' => $validated['phone'] ?? null,
            'brand' => $validated['brand'] ?? null,
            'appointment_date' => $validated['appointment_date'] ?? null,
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Booking service berhasil dikirim. Tim kami akan segera menghubungi Anda.');
    })->name('service-center.store');

    Route::post('/special-request', function (Request $request) {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'brand' => ['nullable', 'string', 'max:255'],
            'model' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'string', 'max:50'],
            'budget' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        SpecialRequest::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'] ?? auth()->user()->email,
            'phone' => $validated['phone'] ?? null,
            'brand' => $validated['brand'] ?? null,
            'model' => $validated['model'] ?? null,
            'year' => $validated['year'] ?? null,
            'budget' => $validated['budget'] ?? null,
            'description' => $validated['description'] ?? null,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Special request berhasil dikirim. Advisor kami akan segera menghubungi Anda.');
    })->name('special-request.store');

    Route::post('/sell-your-car', function (Request $request) {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
            'brand' => ['nullable', 'string', 'max:255'],
            'model' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'string', 'max:50'],
            'mileage' => ['nullable', 'string', 'max:255'],
            'expected_price' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],

            'photos' => ['nullable', 'array'],
            'photos.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
        ]);

        $uploadedPhotos = [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $uploadedPhotos[] = $photo->store('sell-car-requests', 'public');
            }
        }

        SellCarRequest::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'] ?? auth()->user()->email,
            'phone' => $validated['phone'] ?? null,
            'brand' => $validated['brand'] ?? null,
            'model' => $validated['model'] ?? null,
            'year' => $validated['year'] ?? null,
            'mileage' => $validated['mileage'] ?? null,
            'expected_price' => $validated['expected_price'] ?? null,
            'photos' => $uploadedPhotos,
            'description' => $validated['description'] ?? null,
            'status' => 'pending',
        ]);

        return back()->with('success', 'Data mobil berhasil dikirim. Tim kami akan segera melakukan evaluasi awal.');
    })->name('sell-your-car.store');
});