<div class="dc-contact-page">

    <style>
        .dc-contact-page {
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
            position: relative;
            padding: 86px 0 72px;
            border-bottom: 1px solid rgba(197, 139, 22, 0.16);
            background:
                radial-gradient(circle at 85% 20%, rgba(197, 139, 22, 0.09), transparent 34%),
                linear-gradient(135deg, #ffffff 0%, #f8f4ec 55%, #f5ecdd 100%);
        }

        .dc-hero-inner {
            max-width: 760px;
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
            color: #242932;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 68px;
            line-height: 1.05;
            font-weight: 400;
            letter-spacing: -0.02em;
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
            max-width: 720px;
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

        .dc-section {
            padding: 56px 0;
            background: #f8f4ec;
        }

        .dc-section-soft {
            padding: 56px 0;
            background: #fbf7ef;
            border-top: 1px solid rgba(197, 139, 22, 0.12);
            border-bottom: 1px solid rgba(197, 139, 22, 0.12);
        }

        .dc-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 24px;
        }

        .dc-card {
            background: rgba(255, 255, 255, 0.92);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 24px;
            padding: 34px;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.06);
            transition: 0.25s ease;
        }

        .dc-card:hover {
            transform: translateY(-4px);
            border-color: rgba(197, 139, 22, 0.35);
            box-shadow: 0 22px 55px rgba(36, 41, 50, 0.09);
        }

        .dc-card-row {
            display: flex;
            align-items: flex-start;
            gap: 22px;
        }

        .dc-icon {
            width: 52px;
            height: 52px;
            flex: 0 0 52px;
            border-radius: 999px;
            background: #fff7e8;
            color: #c58b16;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 17px;
            font-weight: 900;
            line-height: 1;
            border: 1px solid rgba(197, 139, 22, 0.12);
        }

        .dc-card h3 {
            margin: 0;
            color: #242932;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 34px;
            font-weight: 400;
            line-height: 1.2;
        }

        .dc-card p {
            margin: 14px 0 0;
            color: #4b5563;
            font-size: 15px;
            line-height: 1.75;
        }

        .dc-card a,
        .dc-card .dc-strong-text {
            display: inline-block;
            margin-top: 18px;
            color: #c58b16;
            font-size: 19px;
            font-weight: 800;
            text-decoration: none;
            line-height: 1.55;
        }

        .dc-info-title {
            margin: 0 0 26px;
            color: #242932;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 34px;
            font-weight: 400;
        }

        .dc-info-card {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 24px;
            padding: 34px;
            box-shadow: 0 18px 45px rgba(36, 41, 50, 0.05);
        }

        .dc-hours {
            display: flex;
            flex-direction: column;
            gap: 0;
        }

        .dc-hour-item {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 24px;
            padding: 15px 0;
            border-bottom: 1px solid rgba(197, 139, 22, 0.12);
            color: #4b5563;
            font-size: 15px;
        }

        .dc-hour-item:last-child {
            border-bottom: none;
        }

        .dc-hour-item strong {
            color: #242932;
        }

        .dc-help-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 16px;
        }

        .dc-help-box {
            background: rgba(255, 255, 255, 0.78);
            border: 1px solid rgba(197, 139, 22, 0.12);
            border-radius: 16px;
            padding: 18px;
        }

        .dc-help-box h4 {
            margin: 0 0 8px;
            color: #242932;
            font-size: 16px;
            font-weight: 800;
        }

        .dc-help-box p {
            margin: 0;
            color: #4b5563;
            font-size: 14px;
            line-height: 1.65;
        }

        .dc-cta {
            padding: 60px 0 76px;
            background: #f8f4ec;
        }

        .dc-cta-panel {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.94), rgba(248, 244, 236, 0.96));
            border: 1px solid rgba(197, 139, 22, 0.14);
            border-radius: 28px;
            padding: 42px;
            box-shadow: 0 20px 55px rgba(36, 41, 50, 0.06);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
        }

        .dc-cta h3 {
            margin: 0;
            color: #242932;
            font-family: 'Playfair Display', Georgia, serif;
            font-size: 46px;
            line-height: 1.15;
            font-weight: 400;
        }

        .dc-cta h3 span {
            color: #c58b16;
            font-style: italic;
        }

        .dc-cta p {
            margin: 16px 0 0;
            color: #4b5563;
            font-size: 16px;
            line-height: 1.7;
        }

        @media (max-width: 900px) {
            .dc-grid,
            .dc-help-grid {
                grid-template-columns: 1fr;
            }

            .dc-title {
                font-size: 52px;
            }

            .dc-cta-panel {
                flex-direction: column;
                align-items: flex-start;
            }
        }

        @media (max-width: 640px) {
            .dc-container {
                padding-left: 20px;
                padding-right: 20px;
            }

            .dc-hero {
                padding: 62px 0 50px;
            }

            .dc-title {
                font-size: 42px;
            }

            .dc-card-row {
                flex-direction: column;
            }

            .dc-card,
            .dc-info-card,
            .dc-cta-panel {
                padding: 26px;
            }
        }
    </style>

    <section class="dc-hero">
        <div class="dc-container">
            <div class="dc-hero-inner">
                <span class="dc-eyebrow">Contact</span>

                <h1 class="dc-title">
                    Get In <span>Touch</span>
                </h1>

                <p class="dc-subtitle">
                    Hubungi tim Dream Culture untuk konsultasi kendaraan premium, informasi unit,
                    jadwal test drive, atau kunjungan showroom.
                </p>

                <div class="dc-actions">
                    <a href="https://wa.me/6289612733775" class="dc-btn dc-btn-primary">
                        Chat WhatsApp
                    </a>

                    <a href="mailto:info@dreamculture.com" class="dc-btn dc-btn-secondary">
                        Send Email
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="dc-section">
        <div class="dc-container">
            <div class="dc-grid">

                <div class="dc-card">
                    <div class="dc-card-row">
                        <div class="dc-icon">WA</div>
                        <div>
                            <h3>WhatsApp</h3>
                            <p>
                                Cara tercepat untuk bertanya tentang ketersediaan mobil, harga,
                                dan jadwal kunjungan.
                            </p>
                            <a href="https://wa.me/6289612733775">0896-1273-3775</a>
                        </div>
                    </div>
                </div>

                <div class="dc-card">
                    <div class="dc-card-row">
                        <div class="dc-icon">IG</div>
                        <div>
                            <h3>Instagram</h3>
                            <p>
                                Lihat koleksi terbaru, update showroom, dan konten kendaraan premium kami.
                            </p>
                            <a href="https://instagram.com/dreamculture.id">@dreamculture.id</a>
                        </div>
                    </div>
                </div>

                <div class="dc-card">
                    <div class="dc-card-row">
                        <div class="dc-icon">@</div>
                        <div>
                            <h3>Email</h3>
                            <p>
                                Untuk pertanyaan resmi, kerja sama, atau permintaan detail kendaraan.
                            </p>
                            <a href="mailto:info@dreamculture.com">info@dreamculture.com</a>
                        </div>
                    </div>
                </div>

                <div class="dc-card">
                    <div class="dc-card-row">
                        <div class="dc-icon">PIN</div>
                        <div>
                            <h3>Address</h3>
                            <p>
                                Kunjungi showroom kami untuk melihat langsung koleksi kendaraan premium.
                            </p>
                            <span class="dc-strong-text">
                                Jl. Dream Culture No. 88<br>
                                Medan, Sumatera Utara<br>
                                Indonesia
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="dc-section-soft">
        <div class="dc-container">
            <div class="dc-grid">

                <div class="dc-info-card">
                    <span class="dc-eyebrow">Availability</span>

                    <h3 class="dc-info-title">Business Hours</h3>

                    <div class="dc-hours">
                        <div class="dc-hour-item">
                            <span>Monday – Friday</span>
                            <strong>09:00 – 19:00</strong>
                        </div>

                        <div class="dc-hour-item">
                            <span>Saturday</span>
                            <strong>10:00 – 18:00</strong>
                        </div>

                        <div class="dc-hour-item">
                            <span>Sunday</span>
                            <strong>By Appointment</strong>
                        </div>

                        <div class="dc-hour-item">
                            <span>Response Time</span>
                            <strong>1–2 Hours</strong>
                        </div>
                    </div>
                </div>

                <div class="dc-info-card">
                    <span class="dc-eyebrow">Assistance</span>

                    <h3 class="dc-info-title">How We Can Help</h3>

                    <div class="dc-help-grid">
                        <div class="dc-help-box">
                            <h4>Vehicle Inquiry</h4>
                            <p>Tanya stok, spesifikasi, harga, dan ketersediaan unit.</p>
                        </div>

                        <div class="dc-help-box">
                            <h4>Test Drive</h4>
                            <p>Jadwalkan kunjungan untuk mencoba kendaraan langsung.</p>
                        </div>

                        <div class="dc-help-box">
                            <h4>Financing</h4>
                            <p>Konsultasi opsi pembayaran dan pembelian kendaraan.</p>
                        </div>

                        <div class="dc-help-box">
                            <h4>After Sales</h4>
                            <p>Bantuan layanan dan informasi perawatan kendaraan.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="dc-cta">
        <div class="dc-container">
            <div class="dc-cta-panel">
                <div>
                    <span class="dc-eyebrow">Let’s Connect</span>

                    <h3>
                        Ready to find your next
                        <span>luxury car?</span>
                    </h3>

                    <p>
                        Contact Dream Culture today and let our team guide you to the perfect premium vehicle.
                    </p>
                </div>

                <div class="dc-actions">
                    <a href="https://wa.me/6289612733775" class="dc-btn dc-btn-primary">
                        Contact Now
                    </a>

                    <a href="/cars/used" class="dc-btn dc-btn-secondary">
                        View Cars
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>