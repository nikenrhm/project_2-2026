<div class="dc-request-page">

    <style>
        .dc-request-page {
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

        .dc-hero {
            padding: 86px 0 76px;
            background:
                radial-gradient(circle at 82% 18%, rgba(197, 139, 22, 0.10), transparent 34%),
                linear-gradient(135deg, #ffffff 0%, #f8f4ec 56%, #f2e6d4 100%);
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
            font-family: 'Inter', Arial, sans-serif;
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
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 28px;
            padding: 34px;
            box-shadow: 0 22px 60px rgba(36, 41, 50, 0.08);
        }

        .dc-panel-title {
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

        .dc-request-grid {
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

        .dc-alert {
            margin-bottom: 22px;
            padding: 16px 18px;
            border-radius: 14px;
            font-size: 14px;
            line-height: 1.6;
            font-weight: 700;
        }

        .dc-alert-success {
            background: #ecfdf5;
            border: 1px solid #bbf7d0;
            color: #166534;
        }

        .dc-alert-warning {
            background: #fff7e8;
            border: 1px solid rgba(197, 139, 22, 0.25);
            color: #7c4a03;
        }

        .dc-alert-warning a {
            color: #a8710d;
            text-decoration: underline;
            font-weight: 900;
        }

        .dc-error-list {
            margin-bottom: 22px;
            padding: 16px 18px;
            border-radius: 14px;
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            font-size: 14px;
            line-height: 1.6;
        }

        .dc-error-list ul {
            margin: 8px 0 0;
            padding-left: 20px;
        }

        .dc-form-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
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
            box-sizing: border-box;
        }

        .dc-field textarea {
            min-height: 140px;
            padding-top: 15px;
            resize: vertical;
        }

        .dc-field input:focus,
        .dc-field select:focus,
        .dc-field textarea:focus {
            border-color: rgba(197, 139, 22, 0.75);
            box-shadow: 0 0 0 4px rgba(197, 139, 22, 0.10);
        }

        .dc-field-error {
            margin-top: 7px;
            color: #dc2626;
            font-size: 13px;
            font-weight: 700;
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
            max-width: 430px;
        }

        .dc-section-head {
            max-width: 760px;
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

        .dc-process-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 18px;
        }

        .dc-process-card {
            background: rgba(255, 255, 255, 0.90);
            border: 1px solid rgba(197, 139, 22, 0.12);
            border-radius: 22px;
            padding: 26px;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.05);
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

        .dc-benefit-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .dc-benefit-card {
            background: rgba(255, 255, 255, 0.90);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.05);
        }

        .dc-benefit-card strong {
            color: #c58b16;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 0.22em;
            text-transform: uppercase;
        }

        .dc-benefit-card h3 {
            margin: 14px 0 0;
            font-family: 'Playfair Display', Georgia, serif;
            color: #242932;
            font-size: 26px;
            font-weight: 400;
        }

        .dc-benefit-card p {
            margin: 12px 0 0;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.7;
        }

        @media (max-width: 1024px) {
            .dc-hero-grid,
            .dc-request-grid {
                grid-template-columns: 1fr;
            }

            .dc-process-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .dc-benefit-grid {
                grid-template-columns: 1fr;
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

            .dc-form-grid,
            .dc-process-grid {
                grid-template-columns: 1fr;
            }

            .dc-info-panel,
            .dc-form-panel,
            .dc-process-card,
            .dc-benefit-card {
                padding: 24px;
            }

            .dc-info-row {
                flex-direction: column;
                gap: 6px;
            }

            .dc-info-row strong {
                text-align: left;
            }
        }
    </style>

    {{-- HERO --}}
    <section class="dc-hero">
        <div class="dc-container">
            <div class="dc-hero-grid">

                <div>
                    <span class="dc-eyebrow">Special Request</span>

                    <h1 class="dc-title">
                        Find the Car You
                        <span>Really Want.</span>
                    </h1>

                    <p class="dc-subtitle">
                        Tidak menemukan mobil yang dicari? Kirim kebutuhan Anda kepada kami.
                        Tim Dream Culture akan membantu mencari unit sesuai brand, model, tahun,
                        budget, dan preferensi Anda.
                    </p>

                    <div class="dc-actions">
                        <a href="#request-form" class="dc-btn dc-btn-primary">
                            Submit Request
                        </a>

                        <a href="https://wa.me/6289612733775" class="dc-btn dc-btn-secondary">
                            Ask Advisor
                        </a>
                    </div>
                </div>

                <div class="dc-hero-panel">
                    <h3 class="dc-panel-title">
                        Personal Car Sourcing
                    </h3>

                    <div class="dc-mini-list">
                        <div class="dc-mini-item">
                            <div class="dc-icon">01</div>
                            <div>
                                <h4>Tell Us Your Criteria</h4>
                                <p>Brand, model, tahun, warna, budget, dan kondisi yang Anda inginkan.</p>
                            </div>
                        </div>

                        <div class="dc-mini-item">
                            <div class="dc-icon">02</div>
                            <div>
                                <h4>We Search & Curate</h4>
                                <p>Tim kami membantu mencari opsi unit yang paling sesuai.</p>
                            </div>
                        </div>

                        <div class="dc-mini-item">
                            <div class="dc-icon">03</div>
                            <div>
                                <h4>You Review Options</h4>
                                <p>Kami kirimkan kandidat unit untuk Anda pertimbangkan.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- REQUEST FORM --}}
    <section id="request-form" class="dc-section-soft">
        <div class="dc-container">

            <div class="dc-request-grid">

                <div class="dc-info-panel">
                    <span class="dc-eyebrow">Request Detail</span>

                    <h3>
                        How It Works
                    </h3>

                    <p>
                        Isi form permintaan khusus. Semakin detail kebutuhan Anda,
                        semakin mudah advisor kami membantu menemukan unit yang cocok.
                    </p>

                    <div class="dc-info-list">
                        <div class="dc-info-row">
                            <span>Response Time</span>
                            <strong>1–2 Hours</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Search Type</span>
                            <strong>New / Used Cars</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Advisor Support</span>
                            <strong>Personal Assistance</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Consultation</span>
                            <strong>Free</strong>
                        </div>
                    </div>
                </div>

                <div class="dc-form-panel">
                    <h3>
                        Special Request Form
                    </h3>

                    <p>
                        Masukkan informasi kendaraan yang Anda cari.
                    </p>

                    @if (session('success'))
                        <div class="dc-alert dc-alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @guest
                        <div class="dc-alert dc-alert-warning">
                            Anda harus login terlebih dahulu sebelum mengirim special request.
                            <a href="{{ route('login') }}">Login sekarang</a>
                            atau
                            <a href="{{ route('register') }}">daftar akun</a>.
                        </div>
                    @endguest

                    @if ($errors->any())
                        <div class="dc-error-list">
                            <strong>Form belum bisa dikirim.</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="dc-form" method="POST" action="{{ route('special-request.store') }}">
                        @csrf

                        <div class="dc-form-grid">
                            <div class="dc-field">
                                <label for="full_name">Full Name</label>
                                <input
                                    id="full_name"
                                    type="text"
                                    name="full_name"
                                    value="{{ old('full_name', auth()->user()?->name ?? '') }}"
                                    placeholder="Your full name"
                                    required
                                >

                                @error('full_name')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="dc-field">
                                <label for="email">Email</label>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email', auth()->user()?->email ?? '') }}"
                                    placeholder="you@example.com"
                                >

                                @error('email')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="dc-field">
                                <label for="phone">Phone Number</label>
                                <input
                                    id="phone"
                                    type="text"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="08xx-xxxx-xxxx"
                                >

                                @error('phone')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="dc-field">
                                <label for="brand">Preferred Brand</label>
                                <input
                                    id="brand"
                                    type="text"
                                    name="brand"
                                    value="{{ old('brand') }}"
                                    placeholder="BMW, Mercedes-Benz, Audi..."
                                >

                                @error('brand')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="dc-field">
                                <label for="model">Preferred Model</label>
                                <input
                                    id="model"
                                    type="text"
                                    name="model"
                                    value="{{ old('model') }}"
                                    placeholder="Example: BMW 7 Series"
                                >

                                @error('model')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="dc-field">
                                <label for="year">Preferred Year</label>
                                <input
                                    id="year"
                                    type="text"
                                    name="year"
                                    value="{{ old('year') }}"
                                    placeholder="Example: 2021 - 2024"
                                >

                                @error('year')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="dc-field">
                                <label for="budget">Budget Range</label>
                                <input
                                    id="budget"
                                    type="text"
                                    name="budget"
                                    value="{{ old('budget') }}"
                                    placeholder="Example: Rp 800jt - Rp 1.5M"
                                >

                                @error('budget')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="dc-field dc-field-full">
                                <label for="description">Additional Notes</label>
                                <textarea
                                    id="description"
                                    name="description"
                                    placeholder="Color preference, mileage, transmission, features, or any specific requirements..."
                                >{{ old('description') }}</textarea>

                                @error('description')
                                    <div class="dc-field-error">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="dc-form-footer">
                            <button type="submit" class="dc-btn dc-btn-primary">
                                Send Request
                            </button>

                            <p class="dc-note">
                                Advisor kami akan menghubungi Anda untuk konfirmasi kebutuhan dan rekomendasi unit.
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
                    Simple Request Flow
                </h2>

                <p class="dc-section-desc">
                    Proses permintaan khusus dibuat ringkas supaya Anda tidak perlu mencari sendiri dari banyak sumber.
                </p>
            </div>

            <div class="dc-process-grid">
                <div class="dc-process-card">
                    <div class="dc-step">01</div>
                    <h4>Submit Criteria</h4>
                    <p>Kirim detail kendaraan yang Anda cari melalui form request.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">02</div>
                    <h4>Advisor Review</h4>
                    <p>Advisor kami meninjau kebutuhan, budget, dan preferensi Anda.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">03</div>
                    <h4>Curated Options</h4>
                    <p>Kami bantu kurasi opsi unit yang paling sesuai dengan kebutuhan.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">04</div>
                    <h4>Decision Support</h4>
                    <p>Anda mendapatkan bantuan dalam memilih opsi terbaik.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- BENEFITS --}}
    <section class="dc-section-soft">
        <div class="dc-container">

            <div class="dc-section-head">
                <span class="dc-eyebrow">Why Request With Us</span>

                <h2 class="dc-section-title">
                    Built for Premium Buyers
                </h2>

                <p class="dc-section-desc">
                    Special Request cocok untuk pembeli yang punya kebutuhan spesifik dan ingin proses pencarian lebih terarah.
                </p>
            </div>

            <div class="dc-benefit-grid">
                <div class="dc-benefit-card">
                    <strong>01</strong>
                    <h3>Personalized Search</h3>
                    <p>
                        Kami mencari berdasarkan kebutuhan spesifik, bukan sekadar unit yang tersedia.
                    </p>
                </div>

                <div class="dc-benefit-card">
                    <strong>02</strong>
                    <h3>Time Efficient</h3>
                    <p>
                        Anda tidak perlu membandingkan terlalu banyak opsi sendiri dari berbagai sumber.
                    </p>
                </div>

                <div class="dc-benefit-card">
                    <strong>03</strong>
                    <h3>Better Match</h3>
                    <p>
                        Opsi yang dikirim lebih sesuai dengan brand, model, budget, dan preferensi Anda.
                    </p>
                </div>
            </div>

        </div>
    </section>

</div>