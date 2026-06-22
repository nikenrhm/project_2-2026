<div class="dc-service-page">

    <style>
        .dc-service-page {
            background: #f8f4ec;
            color: #242932;
            min-height: 100vh;
            font-family: 'Inter', Arial, sans-serif;
            overflow: hidden;
        }

        .dc-container {
            max-width: 1280px;
            margin: 0 auto;
            padding-left: 32px;
            padding-right: 32px;
        }

        .dc-serif {
            font-family: 'Playfair Display', Georgia, serif;
        }

        .dc-gold {
            color: #c58b16;
        }

        .dc-hero {
            padding: 86px 0 76px;
            background:
                radial-gradient(circle at 85% 20%, rgba(197, 139, 22, 0.10), transparent 34%),
                linear-gradient(135deg, #ffffff 0%, #f8f4ec 55%, #f3e8d7 100%);
            border-bottom: 1px solid rgba(197, 139, 22, 0.14);
        }

        .dc-hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 56px;
            align-items: center;
        }

        .dc-eyebrow {
            display: block;
            margin-bottom: 18px;
            color: #c58b16;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: 0.38em;
            text-transform: uppercase;
        }

        .dc-title {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 68px;
            line-height: 1.05;
            font-weight: 400;
            letter-spacing: -0.02em;
            color: #242932;
        }

        .dc-title span {
            color: #c58b16;
            font-style: italic;
        }

        .dc-subtitle {
            margin-top: 24px;
            color: #4b5563;
            font-size: 18px;
            line-height: 1.75;
            max-width: 680px;
        }

        .dc-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 34px;
        }

        .dc-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 28px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            text-decoration: none;
            transition: 0.25s ease;
            border: none;
            cursor: pointer;
        }

        .dc-btn-primary {
            background: linear-gradient(135deg, #d8a23a 0%, #c58b16 50%, #a8710d 100%);
            color: #ffffff;
            box-shadow: 0 10px 24px rgba(197, 139, 22, 0.22);
        }

        .dc-btn-secondary {
            background: rgba(255, 255, 255, 0.78);
            color: #b77b10;
            border: 1px solid rgba(197, 139, 22, 0.55);
        }

        .dc-btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.04);
        }

        .dc-hero-panel {
            background: rgba(255, 255, 255, 0.86);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 28px;
            padding: 34px;
            box-shadow: 0 22px 60px rgba(36, 41, 50, 0.08);
        }

        .dc-hero-panel-title {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 32px;
            font-weight: 400;
            color: #242932;
        }

        .dc-mini-list {
            display: grid;
            gap: 16px;
            margin-top: 26px;
        }

        .dc-mini-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            padding: 16px;
            background: #fbf7ef;
            border: 1px solid rgba(197, 139, 22, 0.12);
            border-radius: 18px;
        }

        .dc-icon {
            width: 42px;
            height: 42px;
            border-radius: 999px;
            background: #fff7e8;
            color: #c58b16;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 900;
            flex-shrink: 0;
            border: 1px solid rgba(197, 139, 22, 0.13);
        }

        .dc-mini-item h4 {
            margin: 0;
            color: #242932;
            font-size: 15px;
            font-weight: 800;
        }

        .dc-mini-item p {
            margin: 5px 0 0;
            color: #4b5563;
            font-size: 13px;
            line-height: 1.6;
        }

        .dc-section {
            padding: 70px 0;
            background: #f8f4ec;
        }

        .dc-section-soft {
            padding: 70px 0;
            background: #fbf7ef;
            border-top: 1px solid rgba(197, 139, 22, 0.12);
            border-bottom: 1px solid rgba(197, 139, 22, 0.12);
        }

        .dc-section-head {
            max-width: 720px;
            margin-bottom: 36px;
        }

        .dc-section-title {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            color: #242932;
            font-size: 42px;
            font-weight: 400;
            line-height: 1.15;
        }

        .dc-section-desc {
            margin-top: 14px;
            color: #4b5563;
            font-size: 16px;
            line-height: 1.75;
        }

        .dc-service-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 22px;
        }

        .dc-card {
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.06);
            transition: 0.25s ease;
        }

        .dc-card:hover {
            transform: translateY(-4px);
            border-color: rgba(197, 139, 22, 0.35);
            box-shadow: 0 22px 55px rgba(36, 41, 50, 0.09);
        }

        .dc-card h3 {
            margin: 18px 0 0;
            color: #242932;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 24px;
            font-weight: 400;
            line-height: 1.25;
        }

        .dc-card p {
            margin: 12px 0 0;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.7;
        }

        .dc-booking-grid {
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            gap: 32px;
            align-items: start;
        }

        .dc-info-panel,
        .dc-form-panel {
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 28px;
            padding: 34px;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.06);
        }

        .dc-info-panel h3,
        .dc-form-panel h3 {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 34px;
            font-weight: 400;
            color: #242932;
        }

        .dc-info-panel p,
        .dc-form-panel p {
            margin-top: 14px;
            color: #4b5563;
            line-height: 1.7;
            font-size: 15px;
        }

        .dc-info-list {
            margin-top: 28px;
            display: grid;
            gap: 16px;
        }

        .dc-info-row {
            display: flex;
            justify-content: space-between;
            gap: 24px;
            padding-bottom: 14px;
            border-bottom: 1px solid rgba(197, 139, 22, 0.12);
            color: #4b5563;
            font-size: 14px;
        }

        .dc-info-row strong {
            color: #242932;
            text-align: right;
        }

        .dc-form {
            margin-top: 28px;
        }

        .dc-form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .dc-field {
            width: 100%;
        }

        .dc-field-full {
            grid-column: 1 / -1;
        }

        .dc-field label {
            display: block;
            margin-bottom: 8px;
            color: #242932;
            font-size: 13px;
            font-weight: 800;
        }

        .dc-field input,
        .dc-field select,
        .dc-field textarea {
            width: 100%;
            min-height: 52px;
            padding: 0 16px;
            background: #ffffff;
            border: 1px solid rgba(75, 85, 99, 0.22);
            border-radius: 12px;
            color: #242932;
            font-size: 15px;
            outline: none;
            transition: 0.2s ease;
            font-family: 'Inter', Arial, sans-serif;
        }

        .dc-field textarea {
            min-height: 130px;
            padding-top: 15px;
            resize: vertical;
        }

        .dc-field input:focus,
        .dc-field select:focus,
        .dc-field textarea:focus {
            border-color: rgba(197, 139, 22, 0.75);
            box-shadow: 0 0 0 4px rgba(197, 139, 22, 0.10);
        }

        .dc-form-footer {
            margin-top: 24px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px;
            flex-wrap: wrap;
        }

        .dc-note {
            color: #6b7280;
            font-size: 13px;
            line-height: 1.6;
            max-width: 420px;
        }

        .dc-process-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .dc-process-card {
            position: relative;
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(197, 139, 22, 0.12);
            border-radius: 22px;
            padding: 26px;
        }

        .dc-step {
            width: 38px;
            height: 38px;
            border-radius: 999px;
            background: #fff7e8;
            color: #c58b16;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 13px;
            border: 1px solid rgba(197, 139, 22, 0.16);
        }

        .dc-process-card h4 {
            margin: 18px 0 0;
            color: #242932;
            font-size: 17px;
            font-weight: 800;
        }

        .dc-process-card p {
            margin: 10px 0 0;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.65;
        }

        @media (max-width: 1024px) {
            .dc-hero-grid,
            .dc-booking-grid {
                grid-template-columns: 1fr;
            }

            .dc-service-grid,
            .dc-process-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .dc-title {
                font-size: 56px;
            }
        }

        @media (max-width: 640px) {
            .dc-container {
                padding-left: 20px;
                padding-right: 20px;
            }

            .dc-hero {
                padding: 62px 0 54px;
            }

            .dc-title {
                font-size: 42px;
            }

            .dc-service-grid,
            .dc-process-grid,
            .dc-form-grid {
                grid-template-columns: 1fr;
            }

            .dc-info-panel,
            .dc-form-panel,
            .dc-card,
            .dc-process-card {
                padding: 24px;
            }
        }
    </style>

    {{-- HERO --}}
    <section class="dc-hero">
        <div class="dc-container">
            <div class="dc-hero-grid">

                <div>
                    <span class="dc-eyebrow">Service Center</span>

                    <h1 class="dc-title">
                        Premium Care for Your
                        <span>Luxury Car.</span>
                    </h1>

                    <p class="dc-subtitle">
                        Booking service kendaraan Anda dengan mudah. Tim profesional Dream Culture siap membantu
                        perawatan berkala, inspeksi, dan konsultasi kebutuhan kendaraan premium Anda.
                    </p>

                    <div class="dc-actions">
                        <a href="#booking" class="dc-btn dc-btn-primary">
                            Book Service
                        </a>

                        <a href="https://wa.me/6289612733775" class="dc-btn dc-btn-secondary">
                            Ask Advisor
                        </a>
                    </div>
                </div>

                <div class="dc-hero-panel">
                    <h3 class="dc-hero-panel-title">
                        Why Service With Us?
                    </h3>

                    <div class="dc-mini-list">
                        <div class="dc-mini-item">
                            <div class="dc-icon">01</div>
                            <div>
                                <h4>Certified Inspection</h4>
                                <p>Pemeriksaan kendaraan dilakukan dengan standar premium dan detail.</p>
                            </div>
                        </div>

                        <div class="dc-mini-item">
                            <div class="dc-icon">02</div>
                            <div>
                                <h4>Transparent Process</h4>
                                <p>Estimasi, jadwal, dan kebutuhan service dijelaskan dengan jelas.</p>
                            </div>
                        </div>

                        <div class="dc-mini-item">
                            <div class="dc-icon">03</div>
                            <div>
                                <h4>Professional Advisor</h4>
                                <p>Advisor siap membantu memilih jenis service sesuai kondisi kendaraan.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SERVICE TYPES --}}
    <section class="dc-section">
        <div class="dc-container">

            <div class="dc-section-head">
                <span class="dc-eyebrow">Our Services</span>

                <h2 class="dc-section-title">
                    Complete Service Support
                </h2>

                <p class="dc-section-desc">
                    Pilih layanan yang sesuai dengan kebutuhan kendaraan Anda. Kami bantu dari pengecekan ringan
                    sampai konsultasi maintenance premium.
                </p>
            </div>

            <div class="dc-service-grid">
                <div class="dc-card">
                    <div class="dc-icon">IN</div>
                    <h3>General Inspection</h3>
                    <p>Pemeriksaan kondisi kendaraan secara menyeluruh untuk memastikan performa tetap optimal.</p>
                </div>

                <div class="dc-card">
                    <div class="dc-icon">MT</div>
                    <h3>Maintenance</h3>
                    <p>Perawatan berkala untuk menjaga kenyamanan, keamanan, dan usia pakai kendaraan.</p>
                </div>

                <div class="dc-card">
                    <div class="dc-icon">DI</div>
                    <h3>Diagnostics</h3>
                    <p>Pengecekan masalah kendaraan dan konsultasi awal berdasarkan keluhan pengguna.</p>
                </div>

                <div class="dc-card">
                    <div class="dc-icon">CS</div>
                    <h3>Consultation</h3>
                    <p>Konsultasi service, upgrade, dan kebutuhan after-sales untuk kendaraan premium.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- BOOKING --}}
    <section id="booking" class="dc-section-soft">
        <div class="dc-container">

            <div class="dc-booking-grid">

                <div class="dc-info-panel">
                    <span class="dc-eyebrow">Booking</span>

                    <h3>
                        Schedule Your Visit
                    </h3>

                    <p>
                        Isi form booking service di samping. Tim kami akan menghubungi Anda untuk konfirmasi jadwal,
                        jenis layanan, dan estimasi kebutuhan kendaraan.
                    </p>

                    <div class="dc-info-list">
                        <div class="dc-info-row">
                            <span>Working Hours</span>
                            <strong>09:00 – 19:00</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Response Time</span>
                            <strong>1–2 Hours</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Booking Method</span>
                            <strong>Online / WhatsApp</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Location</span>
                            <strong>Dream Culture Showroom</strong>
                        </div>
                    </div>
                </div>

                <div class="dc-form-panel">
                    <h3>
                        Service Booking Form
                    </h3>

                    <p>
                        Masukkan data kendaraan dan jadwal yang diinginkan.
                    </p>

 <form class="dc-form" method="POST" action="{{ route('service-center.store') }}">
    @csrf

    @if(session('success'))
        <div style="
            margin-bottom: 20px;
            padding: 14px 16px;
            border-radius: 12px;
            background: #ecfdf5;
            color: #047857;
            border: 1px solid #a7f3d0;
            font-weight: 700;
            font-size: 14px;
        ">
            {{ session('success') }}
        </div>
    @endif

    <div class="dc-form-grid">
        <div class="dc-field">
            <label for="full_name">Full Name</label>
            <input
                id="full_name"
                type="text"
                name="full_name"
                placeholder="Your full name"
                value="{{ old('full_name') }}"
            >

            @error('full_name')
                <small style="color:#dc2626; display:block; margin-top:6px;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="dc-field">
            <label for="email">Email</label>
            <input
                id="email"
                type="email"
                name="email"
                placeholder="you@example.com"
                value="{{ old('email') }}"
            >

            @error('email')
                <small style="color:#dc2626; display:block; margin-top:6px;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="dc-field">
            <label for="phone">Phone</label>
            <input
                id="phone"
                type="text"
                name="phone"
                placeholder="08xx-xxxx-xxxx"
                value="{{ old('phone') }}"
            >

            @error('phone')
                <small style="color:#dc2626; display:block; margin-top:6px;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="dc-field">
            <label for="brand">Car Brand</label>
            <input
                id="brand"
                type="text"
                name="brand"
                placeholder="BMW, Mercedes-Benz, Audi..."
                value="{{ old('brand') }}"
            >

            @error('brand')
                <small style="color:#dc2626; display:block; margin-top:6px;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="dc-field">
            <label for="appointment_date">Preferred Date</label>
            <input
                id="appointment_date"
                type="date"
                name="appointment_date"
                value="{{ old('appointment_date') }}"
            >

            @error('appointment_date')
                <small style="color:#dc2626; display:block; margin-top:6px;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="dc-field">
            <label for="service_type_id">Service Type</label>
            <select id="service_type_id" name="service_type_id">
                <option value="">Select service type</option>

                @foreach(\App\Models\ServiceType::orderBy('name')->get() as $serviceType)
                    <option
                        value="{{ $serviceType->id }}"
                        @selected(old('service_type_id') == $serviceType->id)
                    >
                        {{ $serviceType->name }}
                    </option>
                @endforeach
            </select>

            @error('service_type_id')
                <small style="color:#dc2626; display:block; margin-top:6px;">
                    {{ $message }}
                </small>
            @enderror
        </div>

        <div class="dc-field dc-field-full">
            <label for="notes">Notes</label>
            <textarea
                id="notes"
                name="notes"
                placeholder="Tell us about your vehicle condition or service request..."
            >{{ old('notes') }}</textarea>

            @error('notes')
                <small style="color:#dc2626; display:block; margin-top:6px;">
                    {{ $message }}
                </small>
            @enderror
        </div>
    </div>

    <div class="dc-form-footer">
        <button type="submit" class="dc-btn dc-btn-primary">
            Book Service
        </button>

        <p class="dc-note">
            Setelah form dikirim, advisor kami akan menghubungi Anda untuk konfirmasi.
        </p>
    </div>
</form>
                </div>

            </div>

        </div>
    </section>

    {{-- PROCESS --}}
    <section class="dc-section">
        <div class="dc-container">

            <div class="dc-section-head">
                <span class="dc-eyebrow">Process</span>

                <h2 class="dc-section-title">
                    Simple Booking Flow
                </h2>

                <p class="dc-section-desc">
                    Proses dibuat sederhana agar Anda bisa booking service tanpa ribet.
                </p>
            </div>

            <div class="dc-process-grid">
                <div class="dc-process-card">
                    <div class="dc-step">01</div>
                    <h4>Submit Booking</h4>
                    <p>Isi data diri, kendaraan, jadwal, dan jenis service yang dibutuhkan.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">02</div>
                    <h4>Advisor Confirmation</h4>
                    <p>Tim kami menghubungi Anda untuk memastikan detail booking.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">03</div>
                    <h4>Vehicle Inspection</h4>
                    <p>Kendaraan dicek sesuai kebutuhan dan keluhan yang disampaikan.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">04</div>
                    <h4>Service Complete</h4>
                    <p>Anda menerima update dan rekomendasi perawatan berikutnya.</p>
                </div>
            </div>

        </div>
    </section>

</div>