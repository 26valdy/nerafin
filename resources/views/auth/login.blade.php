<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Keuangan LSP</title>

    <style>
        :root {
            --navy: #0b2341;
            --teal: #108b83;
            --teal-dark: #0d8179;
            --bg: #f4f7fa;
            --text: #1e2a3d;
            --text-soft: #607089;
            --text-muted: #91a0b5;
            --border: #c8d4e1;
            --danger: #d94343;
            --danger-bg: #fff1f1;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family:
                Inter,
                ui-sans-serif,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;

            background: var(--bg);
            color: var(--text);
        }

        .page {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 41.7% 58.3%;
        }

        /* =========================
           LEFT SIDE
        ========================= */

        .left {
            background: var(--navy);
            color: white;

            display: flex;
            flex-direction: column;

            padding: 56px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .brand-icon {
            width: 44px;
            height: 44px;

            border-radius: 9px;

            background: var(--teal);

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-icon svg {
            width: 23px;
            height: 23px;
            stroke: white;
        }

        .brand-title {
            font-size: 18px;
            font-weight: 500;
            line-height: 1.2;
        }

        .brand-subtitle {
            margin-top: 4px;

            color: #94a7bf;
            font-size: 12px;
        }

        .left-content {
            margin-top: auto;
            margin-bottom: auto;

            max-width: 470px;
        }

        .security-icon {
            width: 56px;
            height: 56px;

            border-radius: 12px;

            background: #123d61;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 24px;
        }

        .security-icon svg {
            width: 22px;
            height: 22px;

            stroke: #0ea69b;
        }

        .left-heading {
            font-size: 37px;
            line-height: 1.12;

            font-weight: 400;
            letter-spacing: -0.7px;
        }

        .left-description {
            margin-top: 22px;

            color: #a0b3c9;

            font-size: 15px;
            line-height: 1.7;
        }

        .benefits {
            margin-top: 20px;

            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .benefit {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 13px;
            color: #edf3f8;
        }

        .benefit-icon {
            width: 16px;
            height: 16px;

            border: 1px solid #0da296;
            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .benefit-icon svg {
            width: 9px;
            height: 9px;

            stroke: #0da296;
        }

        .copyright {
            color: #96a9bf;
            font-size: 11px;
        }

        /* =========================
           RIGHT SIDE
        ========================= */

        .right {
            min-width: 0;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 40px;
        }

        .login-card {
            width: 100%;
            max-width: 440px;

            padding: 34px 35px 30px;

            background: var(--white);

            border: 1px solid #d4dde8;
            border-radius: 17px;

            box-shadow:
                0 8px 28px rgba(17, 42, 69, 0.08);
        }

        .login-title {
            font-size: 29px;
            font-weight: 400;

            letter-spacing: -0.5px;
        }

        .login-description {
            margin-top: 8px;

            color: var(--text-soft);

            font-size: 13px;
            line-height: 1.55;
        }

        .form {
            margin-top: 24px;
        }

        .field {
            margin-bottom: 17px;
        }

        .label {
            display: block;

            margin-bottom: 7px;

            color: var(--text);
            font-size: 11px;
            font-weight: 500;
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;

            left: 12px;
            top: 50%;

            transform: translateY(-50%);

            width: 16px;
            height: 16px;

            stroke: #8d9db2;

            pointer-events: none;
        }

        .input {
            width: 100%;
            height: 43px;

            padding: 0 13px 0 35px;

            border: 1px solid var(--border);
            border-radius: 10px;

            background: #ffffff;

            outline: none;

            color: var(--text);

            font-size: 13px;

            transition: 0.15s ease;
        }

        .input::placeholder {
            color: #93a1b5;
        }

        .input:focus {
            border-color: var(--teal);
            box-shadow: 0 0 0 3px rgba(16, 139, 131, 0.08);
        }

        .input.error {
            border-color: var(--danger);
            background: #fffafa;
        }

        .error-message {
            margin-top: 6px;

            color: var(--danger);

            font-size: 11px;
        }

        .login-options {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-top: 2px;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 7px;

            color: var(--text-soft);
            font-size: 11px;
        }

        .remember input {
            width: 15px;
            height: 15px;
            accent-color: var(--teal);
        }

        .forgot {
            color: var(--teal);

            font-size: 11px;
            font-weight: 500;
        }

        .submit-button {
            width: 100%;
            height: 43px;

            margin-top: 17px;

            border: none;
            border-radius: 10px;

            background: var(--teal);
            color: white;

            display: flex;
            align-items: center;
            justify-content: center;
            gap: 9px;

            cursor: pointer;

            font-size: 13px;
            font-weight: 500;

            transition: 0.15s ease;
        }

        .submit-button:hover {
            background: var(--teal-dark);
        }

        .submit-button svg {
            width: 15px;
            height: 15px;

            stroke: white;
        }

        .access-note {
            margin-top: 25px;

            text-align: center;

            color: #91a0b5;

            font-size: 10px;
            line-height: 1.5;
        }

        @media (max-width: 900px) {
            .page {
                grid-template-columns: 1fr;
            }

            .left {
                min-height: 310px;
                padding: 30px;
            }

            .left-content {
                margin-top: 70px;
                margin-bottom: 30px;
            }

            .left-heading {
                font-size: 30px;
            }

            .right {
                padding: 30px 20px;
            }
        }

        @media (max-width: 520px) {
            .left {
                padding: 24px;
            }

            .login-card {
                padding: 27px 22px 24px;
            }

            .left-description,
            .benefits {
                display: none;
            }
        }
    </style>
</head>

<body>

<div class="page">

    {{-- LEFT --}}

    <section class="left">

        <div class="brand">

            <div class="brand-icon">
                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke-width="1.7"
                >
                    <path d="M3 10h18"></path>
                    <path d="M5 10v9"></path>
                    <path d="M9 10v9"></path>
                    <path d="M15 10v9"></path>
                    <path d="M19 10v9"></path>
                    <path d="M2 19h20"></path>
                    <path d="M4 10 12 4l8 6"></path>
                </svg>
            </div>

            <div>
                <div class="brand-title">
                    Keuangan LSP
                </div>

                <div class="brand-subtitle">
                    Sistem Pengelolaan Keuangan
                </div>
            </div>

        </div>


        <div class="left-content">

            <div class="security-icon">

                <svg
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke-width="1.7"
                >
                    <path d="M12 3 20 6v6c0 5-3.3 8-8 9-4.7-1-8-4-8-9V6z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>

            </div>

            <h1 class="left-heading">
                Administrasi keuangan yang tertib dan terpercaya.
            </h1>

            <p class="left-description">
                Kelola penerimaan, pengeluaran, tabungan asesor, buku kas,
                dan laporan dalam satu sistem terpadu.
            </p>


            <div class="benefits">

                <div class="benefit">

                    <span class="benefit-icon">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2"
                        >
                            <path d="m6 12 4 4 8-8"></path>
                        </svg>
                    </span>

                    <span>
                        Jejak persetujuan yang transparan
                    </span>

                </div>


                <div class="benefit">

                    <span class="benefit-icon">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2"
                        >
                            <path d="m6 12 4 4 8-8"></path>
                        </svg>
                    </span>

                    <span>
                        Perhitungan saldo berbasis transaksi Approved
                    </span>

                </div>


                <div class="benefit">

                    <span class="benefit-icon">
                        <svg
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="2"
                        >
                            <path d="m6 12 4 4 8-8"></path>
                        </svg>
                    </span>

                    <span>
                        Data keuangan tersimpan aman
                    </span>

                </div>

            </div>

        </div>


        <div class="copyright">
            © 2026 LSP Kompetensi Nusantara
        </div>

    </section>


    {{-- RIGHT --}}

    <section class="right">

        <div class="login-card">

            <h2 class="login-title">
                Selamat datang
            </h2>

            <p class="login-description">
                Masuk menggunakan akun resmi untuk mengakses
                Sistem Pengelolaan Keuangan LSP.
            </p>


            <form
                class="form"
                method="POST"
                action="{{ route('login') }}"
            >

                @csrf


                {{-- EMAIL --}}

                <div class="field">

                    <label
                        class="label"
                        for="email"
                    >
                        Alamat email *
                    </label>

                    <div class="input-wrapper">

                        <svg
                            class="input-icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="1.6"
                        >
                            <rect
                                x="3"
                                y="5"
                                width="18"
                                height="14"
                                rx="2"
                            ></rect>

                            <path d="m3 7 9 6 9-6"></path>
                        </svg>

                        <input
                            class="input @error('email') error @enderror"
                            type="email"
                            id="email"
                            name="email"
                            value="{{ old('email') }}"
                            placeholder="nama@lsp-nusantara.id"
                            autocomplete="email"
                            required
                            autofocus
                        >

                    </div>


                    @error('email')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                {{-- PASSWORD --}}

                <div class="field">

                    <label
                        class="label"
                        for="password"
                    >
                        Password *
                    </label>

                    <div class="input-wrapper">

                        <svg
                            class="input-icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="1.6"
                        >
                            <rect
                                x="5"
                                y="10"
                                width="14"
                                height="10"
                                rx="2"
                            ></rect>

                            <path d="M8 10V7a4 4 0 0 1 8 0v3"></path>

                            <circle
                                cx="12"
                                cy="15"
                                r="1"
                            ></circle>
                        </svg>

                        <input
                            class="input @error('password') error @enderror"
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                            autocomplete="current-password"
                            required
                        >

                    </div>


                    @error('password')
                        <div class="error-message">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="login-options">

                    <label class="remember">
                        <input
                            type="checkbox"
                            disabled
                        >

                        <span>Ingat saya</span>
                    </label>

                    <span class="forgot">
                        Lupa password?
                    </span>

                </div>


                <button
                    type="submit"
                    class="submit-button"
                >

                    <svg
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke-width="1.8"
                    >
                        <path d="M10 17l5-5-5-5"></path>
                        <path d="M15 12H3"></path>
                        <path d="M19 3h2v18h-2"></path>
                    </svg>

                    <span>
                        Masuk ke Sistem
                    </span>

                </button>


                <div class="access-note">
                    Akses dibatasi untuk Bendahara dan Ketua LSP yang berwenang.
                </div>

            </form>

        </div>

    </section>

</div>

</body>
</html>