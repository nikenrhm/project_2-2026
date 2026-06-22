{{-- UTAMA: SATU-SATUNYA ROOT ELEMENT UTAMA LIVEWIRE --}}
<div class="dc-home-page">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;1,400&display=swap');

        .dc-home-page {
            background: #f8f4ec;
            color: #242932;
            min-height: 100vh;
            overflow: hidden;
            font-family: 'Inter', Arial, sans-serif;
        }

        .font-serif-luxury {
            font-family: 'Playfair Display', Georgia, serif !important;
        }

        .dc-container {
            max-width: 1280px;
            margin: 0 auto;
            padding-left: 32px;
            padding-right: 32px;
        }

        /* HERO */
        .dc-hero {
            position: relative;
            min-height: 640px;
            background: #f8f4ec;
            border-bottom: 1px solid rgba(197, 139, 22, 0.12);
            overflow: hidden;
        }

        .dc-hero-bg {
            position: absolute;
            inset: 0;
            background-image: url('{{ asset('images/hero-car.png') }}?v=34');
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            opacity: 1;
        }

        .dc-hero-overlay-left {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    90deg,
                    rgba(248, 244, 236, 0.99) 0%,
                    rgba(248, 244, 236, 0.96) 29%,
                    rgba(248, 244, 236, 0.62) 48%,
                    rgba(248, 244, 236, 0.15) 68%,
                    rgba(248, 244, 236, 0.00) 100%
                );
        }

        .dc-hero-overlay-bottom {
            position: absolute;
            inset: 0;
            background:
                linear-gradient(
                    180deg,
                    rgba(255, 255, 255, 0.34) 0%,
                    rgba(255, 255, 255, 0.00) 42%,
                    rgba(248, 244, 236, 0.82) 100%
                );
        }

        .dc-hero-inner {
            position: relative;
            z-index: 5;
            min-height: 640px;
            display: grid;
            grid-template-columns: 0.48fr 0.52fr;
            align-items: center;
            gap: 40px;
            padding-top: 68px;
            padding-bottom: 50px;
        }

        .dc-eyebrow-row {
            display: flex;
            align-items: center;
            gap: 18px;
            margin-bottom: 22px;
        }

        .dc-eyebrow {
            color: #c58b16;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 0.22em;
            text-transform: uppercase;
        }

        .dc-eyebrow-line {
            width: 76px;
            height: 1px;
            background: rgba(197, 139, 22, 0.35);
        }

        .dc-hero-title {
            margin: 0;
            color: #242932;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 66px;
            line-height: 1.04;
            font-weight: 400;
            letter-spacing: -0.025em;
        }

        .dc-hero-title span {
            color: #c58b16;
            font-style: italic;
        }

        .dc-hero-desc {
            max-width: 560px;
            margin-top: 20px;
            color: #4b5563;
            font-size: 17px;
            line-height: 1.75;
        }

        .dc-hero-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 32px;
        }

        .dc-btn-primary,
        .dc-btn-outline {
            height: 52px;
            min-width: 178px;
            padding: 0 26px;
            border-radius: 6px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 0.11em;
            font-size: 12px;
            font-weight: 900;
            transition: 0.25s ease;
            white-space: nowrap;
        }

        .dc-btn-primary {
            background: linear-gradient(135deg, #d8a23a 0%, #c58b16 55%, #a8710d 100%);
            color: #ffffff;
            box-shadow: 0 14px 28px rgba(197, 139, 22, 0.22);
        }

        .dc-btn-outline {
            background: rgba(255, 255, 255, 0.50);
            border: 1px solid rgba(197, 139, 22, 0.50);
            color: #a8710d;
            backdrop-filter: blur(12px);
        }

        .dc-btn-primary:hover,
        .dc-btn-outline:hover {
            transform: translateY(-2px);
        }

        .dc-trust-card {
            width: fit-content;
            max-width: 100%;
            margin-top: 28px;
            padding: 14px 20px 14px 14px;
            border-radius: 999px;
            display: flex;
            align-items: center;
            gap: 18px;
            background: rgba(255, 255, 255, 0.66);
            border: 1px solid rgba(197, 139, 22, 0.14);
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.08);
            backdrop-filter: blur(16px);
        }

        .dc-avatar-group {
            display: flex;
            align-items: center;
            flex-shrink: 0;
        }

        .dc-avatar {
            width: 42px;
            height: 42px;
            border-radius: 999px;
            object-fit: cover;
            border: 3px solid #f8f4ec;
            box-shadow: 0 8px 18px rgba(36, 41, 50, 0.12);
        }

        .dc-avatar:not(:first-child) {
            margin-left: -12px;
        }

        .dc-trust-divider {
            width: 1px;
            height: 34px;
            background: rgba(197, 139, 22, 0.22);
        }

        .dc-stars {
            color: #d99a16;
            font-size: 14px;
            line-height: 1;
            letter-spacing: 2px;
            margin-bottom: 5px;
        }

        .dc-trust-content p {
            margin: 0;
            color: #475569;
            font-size: 14px;
            line-height: 1.3;
            white-space: nowrap;
        }

        .dc-trust-content strong {
            color: #111827;
            font-size: 17px;
            font-weight: 900;
        }

        /* FEATURE STRIP */
        .dc-feature-strip {
            position: relative;
            z-index: 10;
            margin-top: -42px;
            padding-bottom: 60px;
        }

        .dc-feature-panel {
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(197, 139, 22, 0.12);
            border-radius: 18px;
            box-shadow: 0 22px 60px rgba(36, 41, 50, 0.08);
            backdrop-filter: blur(18px);
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            overflow: hidden;
        }

        .dc-feature-item {
            min-height: 132px;
            padding: 28px 30px;
            border-right: 1px solid rgba(197, 139, 22, 0.14);
            display: flex;
            gap: 18px;
            align-items: flex-start;
        }

        .dc-feature-item:last-child {
            border-right: none;
        }

        .dc-feature-icon {
            width: 42px;
            height: 42px;
            border-radius: 999px;
            background: #fff7e8;
            border: 1px solid rgba(197, 139, 22, 0.16);
            color: #c58b16;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .dc-feature-icon svg {
            width: 20px;
            height: 20px;
            stroke-width: 1.6;
        }

        .dc-feature-title {
            margin: 0;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 20px;
            font-weight: 400;
            color: #242932;
        }

        .dc-feature-desc {
            margin: 8px 0 0;
            color: #4b5563;
            font-size: 13px;
            line-height: 1.55;
        }

        /* FLEET */
        .dc-fleet {
            background: #fbf7ef;
            padding: 76px 0 78px;
            border-top: 1px solid rgba(197, 139, 22, 0.10);
            border-bottom: 1px solid rgba(197, 139, 22, 0.10);
        }

        .dc-fleet-layout {
            display: grid;
            grid-template-columns: 0.32fr 0.68fr;
            gap: 36px;
            align-items: stretch;
        }

        .dc-section-kicker {
            display: flex;
            align-items: center;
            gap: 14px;
            color: #c58b16;
            font-size: 10px;
            font-weight: 900;
            letter-spacing: 0.22em;
            text-transform: uppercase;
            margin-bottom: 16px;
        }

        .dc-section-kicker::after {
            content: "";
            width: 48px;
            height: 1px;
            background: rgba(197, 139, 22, 0.40);
        }

        .dc-section-title {
            margin: 0;
            color: #242932;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 42px;
            line-height: 1.1;
            font-weight: 400;
            letter-spacing: -0.01em;
        }

        .dc-section-desc {
            margin-top: 18px;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.8;
            max-width: 330px;
        }

        .dc-view-all {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            margin-top: 34px;
            color: #a8710d;
            text-decoration: none;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 0.12em;
            text-transform: uppercase;
        }

        .dc-fleet-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 24px;
        }

        .dc-car-card {
            background: #ffffff;
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.08);
            transition: 0.25s ease;
        }

        .dc-car-card:hover {
            transform: translateY(-5px);
            border-color: rgba(197, 139, 22, 0.38);
            box-shadow: 0 24px 60px rgba(36, 41, 50, 0.10);
        }

        .dc-car-image {
            height: 170px;
            background: linear-gradient(135deg, #f4eadb, #ffffff);
            overflow: hidden;
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

        .dc-car-body {
            padding: 18px;
        }

        .dc-car-year {
            color: #8a94a3;
            font-size: 10px;
            font-weight: 700;
        }

        .dc-car-title-row {
            display: flex;
            align-items: start;
            justify-content: space-between;
            gap: 14px;
            margin-top: 4px;
        }

        .dc-car-title {
            margin: 0;
            color: #242932;
            font-size: 16px;
            font-weight: 800;
            line-height: 1.3;
        }

        .dc-car-price {
            color: #c58b16;
            font-size: 14px;
            font-weight: 900;
            white-space: nowrap;
        }

        .dc-car-link {
            margin-top: 18px;
            height: 38px;
            border: 1px solid rgba(197, 139, 22, 0.45);
            border-radius: 6px;
            color: #a8710d;
            text-decoration: none;
            font-size: 10px;
            font-weight: 900;
            letter-spacing: 0.10em;
            text-transform: uppercase;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        /* BRANDS */
        .dc-brands {
            background: #f8f4ec;
            padding: 38px 0 44px;
            border-bottom: 1px solid rgba(197, 139, 22, 0.10);
        }

        .dc-brand-row {
            display: flex;
            flex-wrap: wrap;
            gap: 14px;
            align-items: flex-start;
        }

        .dc-brand-card {
            width: 96px;
            height: 72px;
            background: #ffffff;
            border: 1px solid #e8dfcf;
            border-radius: 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 8px;
            overflow: hidden;
            box-sizing: border-box;
            box-shadow: 0 8px 18px rgba(36, 41, 50, 0.04);
            transition: 0.2s ease;
        }

        .dc-brand-card:hover {
            transform: translateY(-2px);
            border-color: rgba(197, 139, 22, 0.36);
            box-shadow: 0 12px 28px rgba(36, 41, 50, 0.08);
        }

        .dc-brand-logo-wrap {
            width: 58px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            flex-shrink: 0;
        }

        .dc-brand-logo {
            width: auto !important;
            height: auto !important;
            max-width: 52px !important;
            max-height: 32px !important;
            object-fit: contain !important;
            display: block !important;
        }

        .dc-brand-name {
            margin: 6px 0 0;
            max-width: 80px;
            color: #64748b;
            font-size: 7.5px;
            font-weight: 900;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            line-height: 1;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .dc-brand-fallback {
            color: #242932;
            font-size: 8px;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.06em;
            text-align: center;
            line-height: 1;
        }

        @media (max-width: 1024px) {
            .dc-hero-inner {
                grid-template-columns: 1fr;
                min-height: auto;
                padding-top: 72px;
                padding-bottom: 90px;
            }

            .dc-hero-title {
                font-size: 56px;
            }

            .dc-hero-bg {
                background-position: 65% center;
            }

            .dc-hero-overlay-left {
                background:
                    linear-gradient(
                        90deg,
                        rgba(248, 244, 236, 0.98) 0%,
                        rgba(248, 244, 236, 0.92) 48%,
                        rgba(248, 244, 236, 0.55) 100%
                    );
            }

            .dc-feature-panel {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .dc-feature-item {
                border-right: none;
                border-bottom: 1px solid rgba(197, 139, 22, 0.14);
            }

            .dc-fleet-layout {
                grid-template-columns: 1fr;
            }

            .dc-fleet-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 640px) {
            .dc-container {
                padding-left: 20px;
                padding-right: 20px;
            }

            .dc-hero-title {
                font-size: 42px;
            }

            .dc-hero-desc {
                font-size: 15px;
            }

            .dc-hero-actions {
                width: 100%;
            }

            .dc-btn-primary,
            .dc-btn-outline {
                width: 100%;
            }

            .dc-trust-card {
                width: 100%;
                border-radius: 18px;
            }

            .dc-trust-content p {
                white-space: normal;
            }

            .dc-feature-panel {
                grid-template-columns: 1fr;
            }

            .dc-fleet-grid {
                grid-template-columns: 1fr;
            }

            .dc-section-title {
                font-size: 34px;
            }
        }
    </style>

    {{-- HERO --}}
    <section class="dc-hero">
        <div class="dc-hero-bg"></div>
        <div class="dc-hero-overlay-left"></div>
        <div class="dc-hero-overlay-bottom"></div>

        <div class="dc-container">
            <div class="dc-hero-inner">

                <div>
                    <div class="dc-eyebrow-row">
                        <span class="dc-eyebrow">Premium Luxury Car Dealer</span>
                        <span class="dc-eyebrow-line"></span>
                    </div>

                    <h1 class="dc-hero-title">
                        Driven by Excellence.<br>
                        Defined by <span>Trust.</span>
                    </h1>

                    <p class="dc-hero-desc">
                        Discover a curated collection of premium vehicles, thoroughly inspected,
                        transparently priced, and delivered with exceptional service.
                    </p>

                    <div class="dc-hero-actions">
                        <a href="/cars/new" class="dc-btn-primary">
                            Explore Cars
                            <span>→</span>
                        </a>

                        <a href="{{ route('contact') }}" class="dc-btn-outline">
                            Contact Us
                            <span>→</span>
                        </a>
                    </div>

                    <div class="dc-trust-card">
                        <div class="dc-avatar-group">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=80&q=80" alt="Customer" class="dc-avatar">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=80&q=80" alt="Customer" class="dc-avatar">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=80&q=80" alt="Customer" class="dc-avatar">
                        </div>

                        <div class="dc-trust-divider"></div>

                        <div class="dc-trust-content">
                            <div class="dc-stars">★★★★★</div>

                            <p>
                                <strong>4.9/5</strong>
                                <span>from 1,200+ happy customers</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div></div>

            </div>
        </div>
    </section>

    {{-- FEATURE STRIP --}}
    <section class="dc-feature-strip">
        <div class="dc-container">
            <div class="dc-feature-panel">

                <div class="dc-feature-item">
                    <div class="dc-feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="dc-feature-title">Verified Quality</h3>
                        <p class="dc-feature-desc">
                            Every vehicle is thoroughly inspected for your peace of mind.
                        </p>
                    </div>
                </div>

                <div class="dc-feature-item">
                    <div class="dc-feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="dc-feature-title">Secure Transactions</h3>
                        <p class="dc-feature-desc">
                            Safe, transparent, and hassle-free from start to finish.
                        </p>
                    </div>
                </div>

                <div class="dc-feature-item">
                    <div class="dc-feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222 4 2.222V20"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="dc-feature-title">Premium Standards</h3>
                        <p class="dc-feature-desc">
                            Handpicked vehicles that meet our highest standards.
                        </p>
                    </div>
                </div>

                <div class="dc-feature-item">
                    <div class="dc-feature-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.94.725l.548 2.2a1 1 0 01-.321.988l-1.305.98a10.582 10.582 0 004.872 4.872l.98-1.305a1 1 0 01.988-.321l2.2.548a1 1 0 01.725.94V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                        </svg>
                    </div>

                    <div>
                        <h3 class="dc-feature-title">Professional Service</h3>
                        <p class="dc-feature-desc">
                            Dedicated support before, during, and after purchase.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- FEATURED FLEET --}}
    <section class="dc-fleet">
        <div class="dc-container">
            <div class="dc-fleet-layout">

                <div>
                    <div class="dc-section-kicker">Featured Collection</div>

                    <h2 class="dc-section-title">
                        Our Handpicked<br>
                        Luxury Vehicles
                    </h2>

                    <p class="dc-section-desc">
                        Explore an exclusive selection of exceptional vehicles, chosen for performance,
                        design, and unmatched quality.
                    </p>

                    <a href="/cars/new" class="dc-view-all">
                        View All Inventory
                        <span>→</span>
                    </a>
                </div>

                <div class="dc-fleet-grid">
                    @if(isset($featuredCars) && $featuredCars->count())
                        @foreach($featuredCars->take(3) as $car)
                            <div class="dc-car-card">
                                <div class="dc-car-image">
                                    @if($car->thumbnail)
                                        <img
                                            src="{{ asset('storage/' . $car->thumbnail) }}"
                                            alt="{{ $car->name }}"
                                        >
                                    @endif
                                </div>

                                <div class="dc-car-body">
                                    <div class="dc-car-year">
                                        {{ $car->year ?? 'Premium' }}
                                    </div>

                                    <div class="dc-car-title-row">
                                        <h3 class="dc-car-title">
                                            {{ $car->name }}
                                        </h3>

                                        <div class="dc-car-price">
                                            Rp {{ number_format($car->price, 0, ',', '.') }}
                                        </div>
                                    </div>

                                    <a href="/cars/{{ $car->slug }}" class="dc-car-link">
                                        View Details
                                        <span>→</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        @foreach([
                            ['title' => 'Elite Coupe', 'year' => '2022', 'price' => '$78,900'],
                            ['title' => 'Executive Sedan', 'year' => '2021', 'price' => '$64,500'],
                            ['title' => 'Prestige SUV', 'year' => '2023', 'price' => '$89,900'],
                        ] as $item)
                            <div class="dc-car-card">
                                <div class="dc-car-image"></div>

                                <div class="dc-car-body">
                                    <div class="dc-car-year">{{ $item['year'] }}</div>

                                    <div class="dc-car-title-row">
                                        <h3 class="dc-car-title">{{ $item['title'] }}</h3>
                                        <div class="dc-car-price">{{ $item['price'] }}</div>
                                    </div>

                                    <a href="/cars/new" class="dc-car-link">
                                        View Details
                                        <span>→</span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>

            </div>
        </div>
    </section>

    {{-- BRANDS --}}
    <section class="dc-brands">
        <div class="dc-container">

            <div class="dc-section-kicker">
                Authorized Brands
            </div>

            <div class="dc-brand-row">
                @if(isset($brands) && $brands->count())
                    @foreach($brands as $brand)
                        <div class="dc-brand-card">
                            <div class="dc-brand-logo-wrap">
                                @if($brand->logo)
                                    <img
                                        src="{{ asset('storage/' . $brand->logo) }}"
                                        alt="{{ $brand->name }}"
                                        class="dc-brand-logo"
                                    >
                                @else
                                    <span class="dc-brand-fallback">
                                        {{ $brand->name }}
                                    </span>
                                @endif
                            </div>

                            <p class="dc-brand-name">
                                {{ $brand->name }}
                            </p>
                        </div>
                    @endforeach
                @else
                    @foreach(['Ferrari', 'Porsche', 'BMW', 'Aston', 'McLaren', 'Audi', 'Lexus', 'Bentley', 'Lambo', 'Rolls'] as $brandName)
                        <div class="dc-brand-card">
                            <div class="dc-brand-logo-wrap">
                                <span class="dc-brand-fallback">
                                    {{ $brandName }}
                                </span>
                            </div>

                            <p class="dc-brand-name">
                                {{ $brandName }}
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </section>

</div>