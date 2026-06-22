<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Dream Culture</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background: #f8f4ec;
            color: #242932;
            font-family: 'Inter', Arial, sans-serif;
            overflow-x: hidden;
        }

        .auth-wrapper {
            min-height: calc(100vh - 96px);
            background:
                radial-gradient(circle at top left, rgba(197, 139, 22, 0.08), transparent 34%),
                linear-gradient(135deg, #f8f4ec 0%, #ffffff 48%, #f4ede2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 70px 24px;
        }

        .auth-card {
            width: 100%;
            max-width: 520px;
            background: rgba(255, 255, 255, 0.94);
            border: 1px solid rgba(197, 139, 22, 0.16);
            border-radius: 24px;
            padding: 38px;
            box-shadow: 0 24px 70px rgba(36, 41, 50, 0.10);
            backdrop-filter: blur(18px);
        }

        .auth-kicker {
            color: #c58b16;
            font-size: 11px;
            font-weight: 900;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .auth-title {
            margin: 0;
            font-size: 42px;
            line-height: 1.1;
            font-weight: 900;
            letter-spacing: -0.03em;
            color: #242932;
        }

        .auth-desc {
            margin: 14px 0 30px;
            color: #64748b;
            font-size: 15px;
            line-height: 1.7;
        }

        .auth-field {
            margin-bottom: 18px;
        }

        .auth-field label {
            display: block;
            color: #111827;
            font-weight: 800;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .auth-field input {
            width: 100%;
            height: 52px;
            border: 1px solid #d8dee8;
            border-radius: 14px;
            padding: 0 16px;
            font-size: 15px;
            color: #242932;
            background: #ffffff;
            outline: none;
            transition: 0.2s ease;
        }

        .auth-field input:focus {
            border-color: #c58b16;
            box-shadow: 0 0 0 4px rgba(197, 139, 22, 0.12);
        }

        .auth-error {
            margin-top: 7px;
            color: #dc2626;
            font-size: 13px;
            font-weight: 600;
        }

        .auth-btn {
            width: 100%;
            height: 54px;
            border: none;
            border-radius: 14px;
            background: linear-gradient(135deg, #d8a23a 0%, #c58b16 55%, #a8710d 100%);
            color: #ffffff;
            font-size: 13px;
            font-weight: 900;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            cursor: pointer;
            margin-top: 8px;
            box-shadow: 0 16px 34px rgba(197, 139, 22, 0.22);
            transition: 0.2s ease;
        }

        .auth-btn:hover {
            transform: translateY(-2px);
        }

        .auth-footer {
            margin-top: 24px;
            text-align: center;
            color: #64748b;
            font-size: 14px;
        }

        .auth-footer a {
            color: #a8710d;
            font-weight: 900;
            text-decoration: none;
        }

        @media (max-width: 640px) {
            .auth-wrapper {
                padding: 40px 16px;
            }

            .auth-card {
                padding: 28px;
                border-radius: 20px;
            }

            .auth-title {
                font-size: 34px;
            }
        }
    </style>
</head>
<body>

    @include('partials.navbar')

    <main class="auth-wrapper">
        <section class="auth-card">
            <div class="auth-kicker">
                Dream Culture
            </div>

            <h1 class="auth-title">
                Create Account
            </h1>

            <p class="auth-desc">
                Buat akun untuk mengirim permintaan kendaraan, booking service, atau menjual mobil Anda.
            </p>

            <form method="POST" action="{{ route('register.store') }}">
                @csrf

                <div class="auth-field">
                    <label for="name">Full Name</label>
                    <input
                        id="name"
                        type="text"
                        name="name"
                        value="{{ old('name') }}"
                        placeholder="Your full name"
                        required
                        autofocus
                    >

                    @error('name')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="auth-field">
                    <label for="email">Email</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="you@example.com"
                        required
                    >

                    @error('email')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="auth-field">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="Minimal 8 karakter"
                        required
                    >

                    @error('password')
                        <div class="auth-error">{{ $message }}</div>
                    @enderror
                </div>

                <div class="auth-field">
                    <label for="password_confirmation">Confirm Password</label>
                    <input
                        id="password_confirmation"
                        type="password"
                        name="password_confirmation"
                        placeholder="Ulangi password"
                        required
                    >
                </div>

                <button type="submit" class="auth-btn">
                    Register
                </button>
            </form>

            <div class="auth-footer">
                Sudah punya akun?
                <a href="{{ route('login') }}">Login</a>
            </div>
        </section>
    </main>

</body>
</html>