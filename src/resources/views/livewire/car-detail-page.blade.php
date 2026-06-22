@php
    $brandName = $car->brand->name ?? 'Dream Culture';

    $imageUrl = $car->thumbnail
        ? asset('storage/' . $car->thumbnail)
        : asset('images/hero-car.png');

    $price = 'Rp ' . number_format((float) $car->price, 0, ',', '.');

    $statusLabel = match ($car->status) {
        'available' => 'Available',
        'sold' => 'Sold',
        default => ucfirst($car->status ?? 'Available'),
    };

    $typeLabel = match ($car->type) {
        'new' => 'New Car',
        'used' => 'Used Car',
        default => ucfirst($car->type ?? 'Premium Car'),
    };

    $backUrl = $car->type === 'used'
        ? url('/cars/used')
        : url('/cars/new');
@endphp

<div class="dc-detail-page">
    <style>
        .dc-detail-page {
            background: #f8f4ec;
            color: #242932;
            font-family: 'Inter', sans-serif;
            overflow: hidden;
        }

        .dc-container {
            width: min(1440px, calc(100% - 80px));
            margin: 0 auto;
        }

        .dc-hero {
            position: relative;
            min-height: 620px;
            display: flex;
            align-items: center;
            background:
                radial-gradient(circle at 75% 20%, rgba(216, 162, 58, 0.16), transparent 30%),
                linear-gradient(135deg, #ffffff 0%, #f8f4ec 52%, #f2eadf 100%);
            border-top: 1px solid rgba(197, 139, 22, 0.10);
            border-bottom: 1px solid rgba(197, 139, 22, 0.16);
        }

        .dc-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background:
                linear-gradient(90deg, rgba(248, 244, 236, 0.96) 0%, rgba(248, 244, 236, 0.84) 42%, rgba(248, 244, 236, 0.26) 100%);
            pointer-events: none;
            z-index: 1;
        }

        .dc-hero-grid {
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: minmax(0, 0.92fr) minmax(480px, 1.08fr);
            align-items: center;
            gap: 54px;
            padding: 86px 0;
        }

        .dc-kicker {
            display: flex;
            align-items: center;
            gap: 18px;
            color: #c58b16;
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 0.34em;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .dc-kicker::after {
            content: "";
            width: 82px;
            height: 1px;
            background: rgba(197, 139, 22, 0.38);
        }

        .dc-title {
            font-family: 'Playfair Display', serif;
            font-size: clamp(58px, 6vw, 104px);
            line-height: 0.92;
            letter-spacing: -0.055em;
            color: #242932;
            font-weight: 600;
            margin: 0;
            max-width: 760px;
        }

        .dc-hero-desc {
            max-width: 620px;
            margin: 26px 0 0;
            color: #475569;
            font-size: 18px;
            line-height: 1.75;
        }

        .dc-hero-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 34px;
        }

        .dc-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 46px;
            padding: 0 18px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.72);
            border: 1px solid rgba(197, 139, 22, 0.18);
            color: #242932;
            font-size: 13px;
            font-weight: 900;
            box-shadow: 0 16px 34px rgba(36, 41, 50, 0.06);
            backdrop-filter: blur(12px);
        }

        .dc-pill.gold {
            background: linear-gradient(135deg, #d8a23a 0%, #c58b16 55%, #a8710d 100%);
            border-color: transparent;
            color: #ffffff;
        }

        .dc-hero-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            margin-top: 38px;
        }

        .dc-btn {
            min-height: 56px;
            padding: 0 28px;
            border-radius: 14px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            transition: 0.22s ease;
        }

        .dc-btn-primary {
            background: linear-gradient(135deg, #d8a23a 0%, #c58b16 55%, #a8710d 100%);
            color: #ffffff;
            box-shadow: 0 18px 38px rgba(197, 139, 22, 0.24);
        }

        .dc-btn-secondary {
            background: rgba(255, 255, 255, 0.70);
            border: 1px solid rgba(197, 139, 22, 0.35);
            color: #a8710d;
        }

        .dc-btn:hover {
            transform: translateY(-2px);
        }

        .dc-hero-image-card {
            position: relative;
            background: rgba(255, 255, 255, 0.70);
            border: 1px solid rgba(197, 139, 22, 0.16);
            border-radius: 34px;
            padding: 16px;
            box-shadow: 0 34px 90px rgba(36, 41, 50, 0.12);
            backdrop-filter: blur(18px);
        }

        .dc-hero-image-card::before {
            content: "";
            position: absolute;
            inset: 24px;
            border-radius: 28px;
            background: rgba(197, 139, 22, 0.08);
            filter: blur(34px);
            z-index: -1;
        }

        .dc-hero-image-wrap {
            border-radius: 26px;
            overflow: hidden;
            aspect-ratio: 16 / 10;
            background: #f2eadf;
        }

        .dc-hero-image-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .dc-main {
            padding: 76px 0 96px;
            background:
                linear-gradient(180deg, #f8f4ec 0%, #ffffff 44%, #f8f4ec 100%);
        }

        .dc-detail-grid {
            display: grid;
            grid-template-columns: minmax(0, 1fr) minmax(380px, 0.52fr);
            gap: 38px;
            align-items: start;
        }

        .dc-back {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 30px;
            color: #a8710d;
            font-weight: 900;
            text-decoration: none;
            letter-spacing: 0.10em;
            text-transform: uppercase;
            font-size: 12px;
        }

        .dc-section {
            background: rgba(255, 255, 255, 0.86);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 28px;
            padding: 34px;
            box-shadow: 0 22px 70px rgba(36, 41, 50, 0.07);
        }

        .dc-section + .dc-section {
            margin-top: 24px;
        }

        .dc-section-title {
            font-family: 'Playfair Display', serif;
            font-size: 38px;
            line-height: 1.1;
            margin: 0 0 16px;
            color: #242932;
            font-weight: 500;
            letter-spacing: -0.035em;
        }

        .dc-desc {
            color: #475569;
            font-size: 17px;
            line-height: 1.85;
        }

        .dc-desc p {
            margin: 0 0 14px;
        }

        .dc-feature-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-top: 24px;
        }

        .dc-feature {
            border-radius: 22px;
            padding: 24px;
            background: #f8f4ec;
            border: 1px solid rgba(197, 139, 22, 0.13);
        }

        .dc-feature-icon {
            width: 42px;
            height: 42px;
            border-radius: 999px;
            background: rgba(197, 139, 22, 0.10);
            color: #c58b16;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            margin-bottom: 18px;
        }

        .dc-feature strong {
            display: block;
            color: #242932;
            font-size: 16px;
            margin-bottom: 8px;
        }

        .dc-feature p {
            color: #64748b;
            font-size: 14px;
            line-height: 1.65;
            margin: 0;
        }

        .dc-info-card {
            position: sticky;
            top: 118px;
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(197, 139, 22, 0.16);
            border-radius: 28px;
            padding: 32px;
            box-shadow: 0 28px 80px rgba(36, 41, 50, 0.10);
            backdrop-filter: blur(18px);
        }

        .dc-price-label {
            color: #c58b16;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.22em;
            font-weight: 900;
            margin-bottom: 12px;
        }

        .dc-price {
            font-size: clamp(34px, 3vw, 52px);
            line-height: 1;
            letter-spacing: -0.055em;
            font-weight: 900;
            color: #242932;
            margin-bottom: 30px;
        }

        .dc-spec-list {
            display: grid;
            gap: 0;
            margin-bottom: 30px;
        }

        .dc-spec {
            display: flex;
            justify-content: space-between;
            gap: 24px;
            padding: 16px 0;
            border-bottom: 1px solid rgba(15, 23, 42, 0.08);
        }

        .dc-spec span:first-child {
            color: #64748b;
            font-weight: 700;
        }

        .dc-spec span:last-child {
            color: #111827;
            font-weight: 900;
            text-align: right;
        }

        .dc-note {
            margin-top: 20px;
            padding: 18px;
            border-radius: 20px;
            background: #f8f4ec;
            border: 1px solid rgba(197, 139, 22, 0.14);
            color: #64748b;
            font-size: 14px;
            line-height: 1.7;
        }

        @media (max-width: 1100px) {
            .dc-container {
                width: min(100% - 40px, 960px);
            }

            .dc-hero-grid,
            .dc-detail-grid {
                grid-template-columns: 1fr;
            }

            .dc-info-card {
                position: static;
            }

            .dc-feature-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .dc-container {
                width: min(100% - 28px, 520px);
            }

            .dc-hero {
                min-height: auto;
            }

            .dc-hero-grid {
                padding: 56px 0;
            }

            .dc-title {
                font-size: 48px;
            }

            .dc-section,
            .dc-info-card {
                padding: 24px;
                border-radius: 22px;
            }

            .dc-btn {
                width: 100%;
            }
        }
    </style>

    <section class="dc-hero">
        <div class="dc-container">
            <div class="dc-hero-grid">
                <div>
                    <div class="dc-kicker">
                        {{ $brandName }}
                    </div>

                    <h1 class="dc-title">
                        {{ $car->name }}
                    </h1>

                    <p class="dc-hero-desc">
                        Koleksi kendaraan premium Dream Culture yang dipilih berdasarkan kualitas,
                        performa, tampilan, dan pengalaman berkendara.
                    </p>

                    <div class="dc-hero-meta">
                    <span class="dc-pill gold">{{ $statusLabel }}</span>
                    <span class="dc-pill">{{ $typeLabel }}</span>
                    </div>
                    <div class="dc-hero-actions">
                        <a href="{{ url('/contact') }}" class="dc-btn dc-btn-primary">
                            Contact Advisor →
                        </a>

                        <a href="{{ $backUrl }}" class="dc-btn dc-btn-secondary">
                            Back to Inventory
                        </a>
                    </div>
                </div>

                <div class="dc-hero-image-card">
                    <div class="dc-hero-image-wrap">
                        <img src="{{ $imageUrl }}" alt="{{ $car->name }}">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="dc-main">
        <div class="dc-container">
            <a href="{{ $backUrl }}" class="dc-back">
                ← Back to Inventory
            </a>

            <div class="dc-detail-grid">
                <div>
                    <section class="dc-section">
                        <h2 class="dc-section-title">
                            Vehicle Overview
                        </h2>

                        <div class="dc-desc">
                            @if ($car->description)
                                {!! $car->description !!}
                            @else
                                <p>
                                    {{ $car->name }} merupakan bagian dari koleksi kendaraan premium Dream Culture.
                                    Setiap unit dipilih untuk memberikan pengalaman berkendara yang eksklusif,
                                    aman, dan bernilai tinggi.
                                </p>
                            @endif
                        </div>
                    </section>

                    <section class="dc-section">
                        <h2 class="dc-section-title">
                            Why Choose This Vehicle?
                        </h2>

                        <div class="dc-feature-grid">
                            <div class="dc-feature">
                                <div class="dc-feature-icon">✓</div>
                                <strong>Verified Quality</strong>
                                <p>
                                    Unit dipilih dan diperiksa agar informasi kendaraan lebih aman dan terpercaya.
                                </p>
                            </div>

                            <div class="dc-feature">
                                <div class="dc-feature-icon">Rp</div>
                                <strong>Transparent Deal</strong>
                                <p>
                                    Detail harga, tahun, spesifikasi, dan status kendaraan ditampilkan secara jelas.
                                </p>
                            </div>

                            <div class="dc-feature">
                                <div class="dc-feature-icon">★</div>
                                <strong>Premium Assistance</strong>
                                <p>
                                    Tim Dream Culture siap membantu konsultasi, inquiry, hingga proses pembelian.
                                </p>
                            </div>
                        </div>
                    </section>
                </div>

                <aside class="dc-info-card">
                    <div class="dc-price-label">
                        Vehicle Price
                    </div>

                    <div class="dc-price">
                        {{ $price }}
                    </div>

                    <div class="dc-spec-list">
                        <div class="dc-spec">
                            <span>Brand</span>
                            <span>{{ $brandName }}</span>
                        </div>

                        <div class="dc-spec">
                            <span>Year</span>
                            <span>{{ $car->year ?? '-' }}</span>
                        </div>

                        <div class="dc-spec">
                            <span>Type</span>
                            <span>{{ $typeLabel }}</span>
                        </div>

                        <div class="dc-spec">
                            <span>Transmission</span>
                            <span>{{ $car->transmission ?? '-' }}</span>
                        </div>

                        <div class="dc-spec">
                            <span>Fuel Type</span>
                            <span>{{ $car->fuel_type ?? '-' }}</span>
                        </div>

                        <div class="dc-spec">
                            <span>Color</span>
                            <span>{{ $car->color ?? '-' }}</span>
                        </div>

                        <div class="dc-spec">
                            <span>Mileage</span>
                            <span>{{ number_format((float) ($car->mileage ?? 0), 0, ',', '.') }} KM</span>
                        </div>

                        <div class="dc-spec">
                            <span>Status</span>
                            <span>{{ $statusLabel }}</span>
                        </div>
                    </div>

                    <div class="dc-hero-actions" style="margin-top: 0;">
                        <a href="{{ url('/contact') }}" class="dc-btn dc-btn-primary">
                            Contact Advisor →
                        </a>

                        <a href="{{ url('/special-request') }}" class="dc-btn dc-btn-secondary">
                            Request Similar Car →
                        </a>
                    </div>

                    <div class="dc-note">
                        Harga dan ketersediaan kendaraan dapat berubah sewaktu-waktu.
                        Hubungi advisor untuk konfirmasi detail terbaru.
                    </div>
                </aside>
            </div>
        </div>
    </main>
</div>