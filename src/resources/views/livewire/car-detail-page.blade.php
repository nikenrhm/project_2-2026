@php
    $brandName = $car->brand->name ?? 'Dream Culture';

    $imageUrl = $car->thumbnail
        ? asset('storage/' . $car->thumbnail)
        : asset('images/hero-car.png');

    $price = 'Rp ' . number_format((float) $car->price, 0, ',', '.');

    $backUrl = $car->type === 'used'
        ? url('/cars/used')
        : url('/cars/new');

    $typeLabel = match ($car->type) {
        'new' => 'New Car',
        'used' => 'Used Car',
        default => 'Premium Car',
    };

    $statusLabel = match ($car->status) {
        'available' => 'Available',
        'sold' => 'Sold',
        default => ucfirst($car->status ?? 'Available'),
    };

    $whatsappMessage = rawurlencode(
        'Halo Dream Culture, saya tertarik dengan mobil ' . $car->name . '. Mohon informasi lebih lanjut.'
    );

    $rawDescription = $car->description ?? '';
    $isHtmlDescription = $rawDescription !== strip_tags($rawDescription);
@endphp

<div class="car-detail-page">
    <style>
        .car-detail-page {
            min-height: 100vh;
            background: #f8f4ec;
            color: #283142;
            font-family: Arial, sans-serif;
        }

        .detail-container {
            width: min(1160px, calc(100% - 60px));
            margin: 0 auto;
            padding: 42px 0 86px;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 24px;
            color: #b47a12;
            font-size: 14px;
            font-weight: 700;
            text-decoration: none;
        }

        .hero-card {
            display: grid;
            grid-template-columns: 1.08fr 0.92fr;
            gap: 36px;
            align-items: center;
            background: #ffffff;
            border: 1px solid #e6dfd4;
            border-radius: 22px;
            padding: 28px;
            box-shadow: 0 18px 50px rgba(36, 41, 50, 0.08);
        }

        .car-image {
            width: 100%;
            border-radius: 18px;
            overflow: hidden;
            background: #f1eadf;
        }

        .car-image img {
            width: 100%;
            height: 430px;
            object-fit: cover;
            display: block;
        }

        .car-info {
            padding: 8px 4px;
        }

        .brand-name {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-bottom: 14px;
            color: #c58b16;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 0.26em;
            text-transform: uppercase;
        }

        .brand-name::after {
            content: "";
            width: 58px;
            height: 1px;
            background: rgba(197, 139, 22, 0.45);
        }

        .car-title {
            margin: 0;
            font-family: Georgia, "Times New Roman", serif;
            font-size: 44px;
            line-height: 1.08;
            font-weight: 500;
            letter-spacing: -0.03em;
            color: #283142;
        }

        .car-price {
            margin-top: 18px;
            color: #283142;
            font-size: 28px;
            line-height: 1.1;
            font-weight: 900;
            letter-spacing: -0.02em;
        }

        .car-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 24px;
        }

        .meta-item {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 38px;
            padding: 0 15px;
            border-radius: 999px;
            background: #f8f4ec;
            border: 1px solid rgba(197, 139, 22, 0.18);
            color: #283142;
            font-size: 12px;
            font-weight: 800;
        }

        .meta-item.gold {
            background: linear-gradient(135deg, #d8a23a, #c58b16, #a8710d);
            border-color: transparent;
            color: #ffffff;
        }

        .contact-area {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 30px;
        }

        .contact-button,
        .secondary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            min-height: 50px;
            padding: 0 24px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 12px;
            font-weight: 900;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            transition: 0.22s ease;
        }

        .contact-button {
            background: #111827;
            color: #ffffff;
            box-shadow: 0 14px 28px rgba(17, 24, 39, 0.18);
        }

        .secondary-button {
            background: #ffffff;
            color: #a8710d;
            border: 1px solid rgba(197, 139, 22, 0.32);
        }

        .contact-button:hover,
        .secondary-button:hover {
            transform: translateY(-2px);
        }

        .section-card {
            margin-top: 34px;
            background: #ffffff;
            border: 1px solid #dedede;
            padding: 42px 34px;
        }

        .section-title {
            margin: 0 0 42px;
            text-align: center;
            color: #354052;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: 0.02em;
        }

        .spec-table {
            width: 100%;
            border-collapse: collapse;
        }

        .spec-table tr {
            border-bottom: 1px solid #d7dce3;
        }

        .spec-table td {
            padding: 18px 24px;
            color: #283142;
            font-size: 20px;
            letter-spacing: 0.12em;
        }

        .spec-table td:first-child {
            width: 50%;
            text-transform: uppercase;
            font-weight: 500;
        }

        .spec-table td:last-child {
            font-weight: 500;
        }

        .description-card {
            margin-top: 30px;
            background: #ffffff;
            border: 1px solid #dedede;
            padding: 46px 52px 54px;
        }

        .description-title {
            margin: 0 0 56px;
            text-align: center;
            color: #354052;
            font-size: 28px;
            font-weight: 800;
            letter-spacing: 0.02em;
        }

        .description-content {
            max-width: 860px;
            color: #283142;
            font-size: 19px;
            line-height: 1.55;
            letter-spacing: 0.08em;
        }

        .description-content p {
            margin: 0 0 18px;
        }

        .description-content strong,
        .description-content b {
            display: inline-block;
            margin-top: 18px;
            margin-bottom: 8px;
            font-size: 20px;
            letter-spacing: 0.02em;
        }

        .description-content ul,
        .description-content ol {
            margin: 14px 0;
            padding-left: 24px;
        }

        .description-content li {
            margin-bottom: 8px;
        }

        @media (max-width: 980px) {
            .detail-container {
                width: min(100% - 40px, 860px);
            }

            .hero-card {
                grid-template-columns: 1fr;
            }

            .car-image img {
                height: 360px;
            }
        }

        @media (max-width: 640px) {
            .detail-container {
                width: min(100% - 28px, 540px);
                padding: 30px 0 60px;
            }

            .hero-card {
                padding: 18px;
                border-radius: 18px;
            }

            .car-image img {
                height: 260px;
            }

            .car-title {
                font-size: 34px;
            }

            .car-price {
                font-size: 24px;
            }

            .section-card,
            .description-card {
                padding: 28px 20px;
            }

            .section-title,
            .description-title {
                margin-bottom: 28px;
                font-size: 24px;
            }

            .spec-table td {
                display: block;
                width: 100%;
                padding: 10px 0;
                font-size: 16px;
            }

            .spec-table td:first-child {
                width: 100%;
                padding-top: 18px;
                color: #6b7280;
            }

            .spec-table td:last-child {
                padding-bottom: 18px;
            }

            .description-content {
                font-size: 16px;
                letter-spacing: 0.04em;
            }

            .contact-button,
            .secondary-button {
                width: 100%;
            }
        }
    </style>

    <main class="detail-container">
        <a href="{{ $backUrl }}" class="back-link">
            ← Kembali ke Katalog
        </a>

        <section class="hero-card">
            <div class="car-image">
                <img src="{{ $imageUrl }}" alt="{{ $car->name }}">
            </div>

            <div class="car-info">
                <div class="brand-name">
                    {{ $brandName }}
                </div>

                <h1 class="car-title">
                    {{ $car->name }}
                </h1>

                <div class="car-price">
                    {{ $price }}
                </div>

                <div class="car-meta">
                    <span class="meta-item gold">
                        {{ $statusLabel }}
                    </span>

                    <span class="meta-item">
                        {{ $typeLabel }}
                    </span>

                    @if ($car->year)
                        <span class="meta-item">
                            {{ $car->year }}
                        </span>
                    @endif
                </div>

                <div class="contact-area">
                    <a
                        href="https://wa.me/6289612733775?text={{ $whatsappMessage }}"
                        target="_blank"
                        class="contact-button"
                    >
                        Hubungi Kontak
                    </a>

                    <a href="{{ url('/contact') }}" class="secondary-button">
                        Contact Page
                    </a>
                </div>
            </div>
        </section>

        <section class="section-card">
            <h2 class="section-title">
                Specifications
            </h2>

            <table class="spec-table">
                <tr>
                    <td>Year</td>
                    <td>{{ $car->year ?? '-' }}</td>
                </tr>

                <tr>
                    <td>KM</td>
                    <td>{{ number_format((float) ($car->mileage ?? 0), 0, ',', '.') }}</td>
                </tr>

                <tr>
                    <td>Engine</td>
                    <td>{{ $car->fuel_type ?: '-' }}</td>
                </tr>

                <tr>
                    <td>Color</td>
                    <td>{{ $car->color ?: '-' }}</td>
                </tr>
            </table>
        </section>

        <section class="description-card">
            <h2 class="description-title">
                Descriptions
            </h2>

            <div class="description-content">
                @if ($rawDescription)
                    @if ($isHtmlDescription)
                        {!! $rawDescription !!}
                    @else
                        {!! nl2br(e($rawDescription)) !!}
                    @endif
                @else
                    <p><strong>{{ $car->name }}</strong></p>

                    <p>Year : {{ $car->year ?? '-' }}</p>
                    <p>Exterior : {{ $car->color ?: '-' }}</p>
                    <p>Kilometer : {{ number_format((float) ($car->mileage ?? 0), 0, ',', '.') }}</p>

                    <p><strong>Performance</strong></p>
                    <p>Engine : {{ $car->fuel_type ?: '-' }}</p>
                    <p>Transmission : {{ $car->transmission ?: '-' }}</p>

                    <p><strong>Information</strong></p>
                    <p>
                        {{ $car->name }} merupakan kendaraan premium pilihan Dream Culture
                        dengan tampilan elegan, kualitas terpercaya, dan pengalaman berkendara
                        yang lebih berkelas.
                    </p>
                @endif
            </div>
        </section>
    </main>
</div>