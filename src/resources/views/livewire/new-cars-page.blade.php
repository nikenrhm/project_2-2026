<div class="dc-cars-page">

    <style>
        .dc-cars-page {
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
            grid-template-columns: 1fr 0.75fr;
            gap: 48px;
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

        .dc-hero-panel {
            background: rgba(255, 255, 255, 0.86);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 28px;
            padding: 32px;
            box-shadow: 0 22px 60px rgba(36, 41, 50, 0.08);
        }

        .dc-hero-panel h3 {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 30px;
            font-weight: 400;
            color: #242932;
        }

        .dc-hero-panel p {
            margin: 12px 0 0;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.7;
        }

        .dc-stats {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 14px;
            margin-top: 24px;
        }

        .dc-stat {
            background: #fbf7ef;
            border: 1px solid rgba(197, 139, 22, 0.12);
            border-radius: 18px;
            padding: 18px;
        }

        .dc-stat strong {
            display: block;
            font-family: 'Playfair Display', Georgia, serif;
            color: #242932;
            font-size: 28px;
            font-weight: 400;
            line-height: 1;
        }

        .dc-stat span {
            display: block;
            margin-top: 8px;
            color: #6b7280;
            font-size: 10px;
            font-weight: 800;
            letter-spacing: 0.2em;
            text-transform: uppercase;
        }

        .dc-filter-section {
            background: #f8f4ec;
            padding: 34px 0;
            border-bottom: 1px solid rgba(197, 139, 22, 0.10);
        }

        .dc-filter-card {
            background: rgba(255, 255, 255, 0.90);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 22px;
            padding: 22px;
            box-shadow: 0 14px 34px rgba(36, 41, 50, 0.05);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }

        .dc-filter-title {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .dc-filter-title strong {
            color: #242932;
            font-size: 16px;
            font-weight: 800;
        }

        .dc-filter-title span {
            color: #6b7280;
            font-size: 13px;
        }

        .dc-select {
            min-width: 280px;
            height: 50px;
            padding: 0 16px;
            border-radius: 12px;
            border: 1px solid rgba(75, 85, 99, 0.22);
            background: #ffffff;
            color: #242932;
            font-size: 15px;
            outline: none;
            font-family: 'Inter', Arial, sans-serif;
            transition: 0.2s ease;
        }

        .dc-select:focus {
            border-color: rgba(197, 139, 22, 0.75);
            box-shadow: 0 0 0 4px rgba(197, 139, 22, 0.10);
        }

        .dc-cars-section {
            background: #fbf7ef;
            padding: 64px 0 84px;
        }

        .dc-section-head {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 24px;
            margin-bottom: 34px;
        }

        .dc-section-head h2 {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 42px;
            font-weight: 400;
            color: #242932;
        }

        .dc-section-head p {
            margin: 12px 0 0;
            color: #4b5563;
            font-size: 15px;
            line-height: 1.7;
            max-width: 560px;
        }

        .dc-view-link {
            color: #c58b16;
            text-decoration: none;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .dc-car-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 24px;
        }

        .dc-car-card {
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.07);
            transition: 0.25s ease;
        }

        .dc-car-card:hover {
            transform: translateY(-6px);
            border-color: rgba(197, 139, 22, 0.38);
            box-shadow: 0 24px 60px rgba(36, 41, 50, 0.10);
        }

        .dc-car-image {
            height: 210px;
            background: linear-gradient(135deg, #f5efe4, #ffffff);
            overflow: hidden;
            position: relative;
        }

        .dc-car-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: 0.5s ease;
        }

        .dc-car-card:hover .dc-car-image img {
            transform: scale(1.04);
        }

        .dc-badge {
            position: absolute;
            left: 14px;
            top: 14px;
            background: rgba(255, 255, 255, 0.88);
            border: 1px solid rgba(197, 139, 22, 0.18);
            color: #c58b16;
            border-radius: 999px;
            padding: 7px 11px;
            font-size: 10px;
            font-weight: 900;
            letter-spacing: 0.14em;
            text-transform: uppercase;
        }

        .dc-car-body {
            padding: 22px;
        }

        .dc-car-meta {
            color: #c58b16;
            font-size: 10px;
            font-weight: 900;
            letter-spacing: 0.16em;
            text-transform: uppercase;
        }

        .dc-car-title {
            margin: 10px 0 0;
            font-family: 'Playfair Display', Georgia, serif;
            color: #242932;
            font-size: 22px;
            font-weight: 400;
            line-height: 1.25;
        }

        .dc-car-price {
            margin-top: 14px;
            color: #242932;
            font-size: 16px;
            font-weight: 800;
        }

        .dc-car-footer {
            margin-top: 18px;
            padding-top: 16px;
            border-top: 1px solid rgba(197, 139, 22, 0.12);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .dc-detail-link {
            color: #6b7280;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            text-decoration: none;
            transition: 0.2s ease;
        }

        .dc-detail-link:hover {
            color: #c58b16;
        }

        .dc-empty {
            background: rgba(255, 255, 255, 0.92);
            border: 1px dashed rgba(197, 139, 22, 0.32);
            border-radius: 28px;
            padding: 70px 32px;
            text-align: center;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.05);
        }

        .dc-empty-icon {
            width: 72px;
            height: 72px;
            margin: 0 auto 24px;
            border-radius: 999px;
            background: #fff7e8;
            color: #c58b16;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 18px;
            border: 1px solid rgba(197, 139, 22, 0.14);
        }

        .dc-empty h3 {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 34px;
            font-weight: 400;
            color: #242932;
        }

        .dc-empty p {
            margin: 14px auto 0;
            max-width: 560px;
            color: #4b5563;
            line-height: 1.7;
            font-size: 15px;
        }

        .dc-empty-actions {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 28px;
        }

        .dc-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 48px;
            padding: 0 26px;
            border-radius: 8px;
            font-size: 13px;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            text-decoration: none;
            transition: 0.25s ease;
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

        .dc-why-section {
            padding: 70px 0;
            background: #f8f4ec;
        }

        .dc-why-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 22px;
        }

        .dc-why-card {
            background: rgba(255, 255, 255, 0.90);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 24px;
            padding: 28px;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.05);
        }

        .dc-why-card strong {
            color: #c58b16;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 0.22em;
            text-transform: uppercase;
        }

        .dc-why-card h3 {
            margin: 14px 0 0;
            font-family: 'Playfair Display', Georgia, serif;
            color: #242932;
            font-size: 26px;
            font-weight: 400;
        }

        .dc-why-card p {
            margin: 12px 0 0;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.7;
        }

        @media (max-width: 1024px) {
            .dc-hero-grid {
                grid-template-columns: 1fr;
            }

            .dc-car-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .dc-why-grid {
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

            .dc-car-grid {
                grid-template-columns: 1fr;
            }

            .dc-section-head {
                flex-direction: column;
                align-items: flex-start;
            }

            .dc-select {
                width: 100%;
                min-width: 0;
            }

            .dc-filter-card {
                align-items: stretch;
            }
        }
    </style>

    {{-- HERO --}}
    <section class="dc-hero">
        <div class="dc-container">
            <div class="dc-hero-grid">

                <div>
                    <span class="dc-eyebrow">Dream Culture</span>

                    <h1 class="dc-title">
                        New Cars for
                        <span>New Standards.</span>
                    </h1>

                    <p class="dc-subtitle">
                        Temukan koleksi mobil baru pilihan dengan standar premium, kondisi terbaik,
                        dan pengalaman pembelian yang transparan dari Dream Culture.
                    </p>

                    <div class="dc-actions">
                        <a href="#collection" class="dc-btn dc-btn-primary">
                            View Collection
                        </a>

                        <a href="/special-request" class="dc-btn dc-btn-secondary">
                            Special Request
                        </a>
                    </div>
                </div>

                <div class="dc-hero-panel">
                    <h3>Premium New Car Experience</h3>

                    <p>
                        Kami membantu Anda mendapatkan kendaraan baru dengan proses lebih mudah,
                        informasi jelas, dan layanan konsultasi yang profesional.
                    </p>

                    <div class="dc-stats">
                        <div class="dc-stat">
                            <strong>100%</strong>
                            <span>Verified Units</span>
                        </div>

                        <div class="dc-stat">
                            <strong>1:1</strong>
                            <span>Consultation</span>
                        </div>

                        <div class="dc-stat">
                            <strong>Fast</strong>
                            <span>Response</span>
                        </div>

                        <div class="dc-stat">
                            <strong>Easy</strong>
                            <span>Process</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FILTER --}}
    <section class="dc-filter-section">
        <div class="dc-container">
            <div class="dc-filter-card">
                <div class="dc-filter-title">
                    <strong>Find Your Preferred Brand</strong>
                    <span>Pilih brand untuk melihat koleksi mobil baru yang tersedia.</span>
                </div>

                <select class="dc-select" wire:model.live="brand">
                    <option value="">Semua Brand</option>

                    @if(isset($brands) && $brands->count())
                        @foreach($brands as $brand)
                            <option value="{{ $brand->id }}">
                                {{ $brand->name }}
                            </option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </section>

    {{-- CARS --}}
    <section id="collection" class="dc-cars-section">
        <div class="dc-container">

            <div class="dc-section-head">
                <div>
                    <span class="dc-eyebrow">Exclusive Collection</span>

                    <h2>
                        Available New Cars
                    </h2>

                    <p>
                        Setiap unit disajikan dengan informasi penting agar Anda bisa memilih kendaraan
                        yang paling sesuai dengan kebutuhan dan gaya hidup.
                    </p>
                </div>

                <a href="/contact" class="dc-view-link">
                    Ask Advisor →
                </a>
            </div>

            @if(isset($cars) && $cars->count())
                <div class="dc-car-grid">
                    @foreach($cars as $car)
                        <div class="dc-car-card">
                            <div class="dc-car-image">
                                <span class="dc-badge">New</span>

                                <img
                                    src="{{ asset('storage/' . $car->thumbnail) }}"
                                    alt="{{ $car->name }}"
                                >
                            </div>

                            <div class="dc-car-body">
                                <div class="dc-car-meta">
                                    {{ $car->brand->name ?? 'Premium' }}
                                    @if(isset($car->year))
                                        • {{ $car->year }}
                                    @endif
                                </div>

                                <h3 class="dc-car-title">
                                    {{ $car->name }}
                                </h3>

                                <div class="dc-car-price">
                                    Rp {{ number_format($car->price, 0, ',', '.') }}
                                </div>

                                <div class="dc-car-footer">
                                    <a href="/cars/{{ $car->slug }}" class="dc-detail-link">
                                        View Details →
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="dc-empty">
                    <div class="dc-empty-icon">
                        DC
                    </div>

                    <h3>
                        Belum ada mobil tersedia.
                    </h3>

                    <p>
                        Koleksi mobil baru sedang kami kurasi. Anda tetap bisa menghubungi advisor kami
                        untuk permintaan khusus berdasarkan brand, model, atau budget yang diinginkan.
                    </p>

                    <div class="dc-empty-actions">
                        <a href="/special-request" class="dc-btn dc-btn-primary">
                            Request a Car
                        </a>

                        <a href="/contact" class="dc-btn dc-btn-secondary">
                            Contact Advisor
                        </a>
                    </div>
                </div>
            @endif

        </div>
    </section>

    {{-- WHY --}}
    <section class="dc-why-section">
        <div class="dc-container">

            <div class="dc-section-head">
                <div>
                    <span class="dc-eyebrow">Why Choose Us</span>

                    <h2>
                        Premium Service, Clear Process
                    </h2>

                    <p>
                        Dream Culture tidak hanya menjual kendaraan, tapi memberikan pengalaman pembelian
                        yang lebih aman, rapi, dan profesional.
                    </p>
                </div>
            </div>

            <div class="dc-why-grid">
                <div class="dc-why-card">
                    <strong>01</strong>
                    <h3>Curated Selection</h3>
                    <p>
                        Unit dipilih berdasarkan kualitas, reputasi brand, dan kebutuhan pelanggan premium.
                    </p>
                </div>

                <div class="dc-why-card">
                    <strong>02</strong>
                    <h3>Transparent Information</h3>
                    <p>
                        Harga, spesifikasi, dan proses pembelian disampaikan dengan jelas sejak awal.
                    </p>
                </div>

                <div class="dc-why-card">
                    <strong>03</strong>
                    <h3>Personal Assistance</h3>
                    <p>
                        Advisor kami membantu Anda memilih unit yang sesuai dengan kebutuhan dan preferensi.
                    </p>
                </div>
            </div>

        </div>
    </section>

</div>