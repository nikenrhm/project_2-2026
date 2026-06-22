<div class="dc-sell-page">

    <style>
        .dc-sell-page {
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

        .dc-sell-grid {
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

        .dc-upload-box {
            width: 100%;
            min-height: 160px;
            padding: 24px;
            background: #ffffff;
            border: 1.5px dashed rgba(197, 139, 22, 0.35);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: 0.2s ease;
            cursor: pointer;
            box-sizing: border-box;
        }

        .dc-upload-box:hover {
            border-color: rgba(197, 139, 22, 0.75);
            background: #fffaf0;
        }

        .dc-upload-box input {
            display: none;
        }

        .dc-upload-content {
            color: #4b5563;
        }

        .dc-upload-icon {
            width: 56px;
            height: 56px;
            margin: 0 auto 14px;
            border-radius: 999px;
            background: #fff7e8;
            color: #c58b16;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 13px;
            border: 1px solid rgba(197, 139, 22, 0.14);
        }

        .dc-upload-title {
            display: block;
            color: #242932;
            font-weight: 800;
            font-size: 15px;
        }

        .dc-upload-desc {
            display: block;
            margin-top: 8px;
            color: #6b7280;
            font-size: 13px;
            line-height: 1.6;
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
            .dc-sell-grid {
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
                    <span class="dc-eyebrow">Sell Your Car</span>

                    <h1 class="dc-title">
                        Sell Your Car with
                        <span>Confidence.</span>
                    </h1>

                    <p class="dc-subtitle">
                        Jual mobil Anda dengan proses yang lebih cepat, aman, dan transparan.
                        Dream Culture membantu melakukan evaluasi awal, konsultasi harga,
                        dan proses penawaran secara profesional.
                    </p>

                    <div class="dc-actions">
                        <a href="#sell-form" class="dc-btn dc-btn-primary">
                            Submit Car
                        </a>

                        <a href="https://wa.me/6289612733775" class="dc-btn dc-btn-secondary">
                            Ask Valuation
                        </a>
                    </div>
                </div>

                <div class="dc-hero-panel">
                    <h3 class="dc-panel-title">
                        Why Sell With Us?
                    </h3>

                    <div class="dc-mini-list">
                        <div class="dc-mini-item">
                            <div class="dc-icon">01</div>
                            <div>
                                <h4>Professional Valuation</h4>
                                <p>Estimasi harga dibantu berdasarkan kondisi, tahun, brand, dan pasar.</p>
                            </div>
                        </div>

                        <div class="dc-mini-item">
                            <div class="dc-icon">02</div>
                            <div>
                                <h4>Simple Submission</h4>
                                <p>Kirim data mobil Anda, lalu advisor kami akan melakukan review awal.</p>
                            </div>
                        </div>

                        <div class="dc-mini-item">
                            <div class="dc-icon">03</div>
                            <div>
                                <h4>Safe Process</h4>
                                <p>Proses komunikasi dan transaksi dilakukan lebih jelas dan terarah.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- SELL FORM --}}
    <section id="sell-form" class="dc-section-soft">
        <div class="dc-container">

            <div class="dc-sell-grid">

                <div class="dc-info-panel">
                    <span class="dc-eyebrow">Valuation</span>

                    <h3>
                        Start With Car Details
                    </h3>

                    <p>
                        Isi data mobil yang ingin Anda jual. Semakin lengkap informasi kendaraan,
                        semakin mudah tim kami memberikan evaluasi awal yang akurat.
                    </p>

                    <div class="dc-info-list">
                        <div class="dc-info-row">
                            <span>Review Time</span>
                            <strong>1–2 Hours</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Car Type</span>
                            <strong>Premium / Luxury</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Consultation</span>
                            <strong>Free</strong>
                        </div>

                        <div class="dc-info-row">
                            <span>Process</span>
                            <strong>Online / Showroom</strong>
                        </div>
                    </div>
                </div>

                <div class="dc-form-panel">
                    <h3>
                        Sell Your Car Form
                    </h3>

                    <p>
                        Masukkan informasi dasar kendaraan, kontak, dan foto mobil Anda.
                    </p>

                    <form class="dc-form" method="POST" action="#" enctype="multipart/form-data">
                        @csrf

                        <div class="dc-form-grid">
                            <div class="dc-field">
                                <label for="name">Full Name</label>
                                <input id="name" type="text" name="name" placeholder="Your full name">
                            </div>

                            <div class="dc-field">
                                <label for="email">Email</label>
                                <input id="email" type="email" name="email" placeholder="you@example.com">
                            </div>

                            <div class="dc-field">
                                <label for="phone">Phone</label>
                                <input id="phone" type="text" name="phone" placeholder="08xx-xxxx-xxxx">
                            </div>

                            <div class="dc-field">
                                <label for="brand">Car Brand</label>
                                <input id="brand" type="text" name="brand" placeholder="BMW, Mercedes-Benz, Audi...">
                            </div>

                            <div class="dc-field">
                                <label for="model">Car Model</label>
                                <input id="model" type="text" name="model" placeholder="Example: BMW 530i">
                            </div>

                            <div class="dc-field">
                                <label for="year">Year</label>
                                <input id="year" type="text" name="year" placeholder="Example: 2021">
                            </div>

                            <div class="dc-field">
                                <label for="mileage">Mileage</label>
                                <input id="mileage" type="text" name="mileage" placeholder="Example: 25.000 km">
                            </div>

                            <div class="dc-field">
                                <label for="expected_price">Expected Price</label>
                                <input id="expected_price" type="text" name="expected_price" placeholder="Example: Rp 900jt">
                            </div>

                            <div class="dc-field">
                                <label for="condition">Condition</label>
                                <select id="condition" name="condition">
                                    <option value="">Select condition</option>
                                    <option value="excellent">Excellent</option>
                                    <option value="good">Good</option>
                                    <option value="fair">Fair</option>
                                    <option value="needs-review">Needs Review</option>
                                </select>
                            </div>

                            <div class="dc-field">
                                <label for="ownership">Ownership</label>
                                <select id="ownership" name="ownership">
                                    <option value="">Select ownership</option>
                                    <option value="personal">Personal</option>
                                    <option value="company">Company</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>

                            <div class="dc-field dc-field-full">
                                <label for="car_photos">Car Photos</label>

                                <label class="dc-upload-box" for="car_photos">
                                    <input
                                        id="car_photos"
                                        type="file"
                                        name="car_photos[]"
                                        accept="image/*"
                                        multiple
                                    >

                                    <span class="dc-upload-content">
                                        <span class="dc-upload-icon">IMG</span>

                                        <span class="dc-upload-title">
                                            Upload car photos
                                        </span>

                                        <span class="dc-upload-desc">
                                            Tambahkan foto eksterior, interior, odometer, STNK/BPKB jika diperlukan,
                                            dan detail kondisi mobil. Format JPG, PNG, atau WEBP.
                                        </span>
                                    </span>
                                </label>
                            </div>

                            <div class="dc-field dc-field-full">
                                <label for="notes">Additional Notes</label>
                                <textarea id="notes" name="notes" placeholder="Tell us about service history, accident record, modifications, documents, or other important details..."></textarea>
                            </div>
                        </div>

                        <div class="dc-form-footer">
                            <button type="submit" class="dc-btn dc-btn-primary">
                                Submit Car
                            </button>

                            <p class="dc-note">
                                Setelah data dan foto dikirim, advisor kami akan menghubungi Anda untuk evaluasi awal.
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
                    Simple Selling Flow
                </h2>

                <p class="dc-section-desc">
                    Proses dibuat ringkas supaya Anda bisa menjual mobil dengan lebih nyaman dan terarah.
                </p>
            </div>

            <div class="dc-process-grid">
                <div class="dc-process-card">
                    <div class="dc-step">01</div>
                    <h4>Submit Vehicle</h4>
                    <p>Kirim data kendaraan, kondisi, mileage, tahun, harga yang diharapkan, dan foto mobil.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">02</div>
                    <h4>Initial Review</h4>
                    <p>Advisor kami melakukan pengecekan awal berdasarkan informasi dan foto yang Anda kirim.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">03</div>
                    <h4>Valuation Discussion</h4>
                    <p>Kami bantu diskusikan estimasi harga dan opsi proses penjualan.</p>
                </div>

                <div class="dc-process-card">
                    <div class="dc-step">04</div>
                    <h4>Proceed Safely</h4>
                    <p>Proses lanjut dilakukan dengan komunikasi yang jelas dan profesional.</p>
                </div>
            </div>

        </div>
    </section>

    {{-- BENEFITS --}}
    <section class="dc-section-soft">
        <div class="dc-container">

            <div class="dc-section-head">
                <span class="dc-eyebrow">Seller Benefits</span>

                <h2 class="dc-section-title">
                    Designed for Premium Sellers
                </h2>

                <p class="dc-section-desc">
                    Kami bantu Anda menjual kendaraan premium dengan pendekatan yang lebih rapi,
                    aman, dan tidak membuang waktu.
                </p>
            </div>

            <div class="dc-benefit-grid">
                <div class="dc-benefit-card">
                    <strong>01</strong>
                    <h3>Clear Valuation</h3>
                    <p>
                        Anda mendapat gambaran nilai kendaraan berdasarkan informasi, kondisi unit, dan foto mobil.
                    </p>
                </div>

                <div class="dc-benefit-card">
                    <strong>02</strong>
                    <h3>Efficient Process</h3>
                    <p>
                        Proses awal cukup dari form online sebelum lanjut ke diskusi lebih detail.
                    </p>
                </div>

                <div class="dc-benefit-card">
                    <strong>03</strong>
                    <h3>Trusted Assistance</h3>
                    <p>
                        Tim kami membantu komunikasi dan proses agar lebih aman dan profesional.
                    </p>
                </div>
            </div>

        </div>
    </section>

</div>