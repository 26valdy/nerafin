<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tambah Kategori - Keuangan LSP</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            background: #f4f7fa;
            color: #1c2940;
            font-family:
                Inter,
                ui-sans-serif,
                system-ui,
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .page {
            min-height: 100vh;
            display: flex;
        }

        .sidebar {
            width: 240px;
            min-width: 240px;
            background: #0b2341;
            color: white;
            padding: 24px 16px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 0 8px;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            background: #0f9188;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-icon svg {
            width: 21px;
            height: 21px;
            stroke: white;
        }

        .brand-title {
            font-size: 16px;
            font-weight: 600;
        }

        .brand-subtitle {
            margin-top: 3px;
            font-size: 10px;
            color: #91a5be;
        }

        .sidebar-label {
            margin: 35px 8px 10px;
            color: #91a5be;
            font-size: 10px;
            font-weight: 700;
        }

        .nav-item {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 12px;
            margin-bottom: 6px;
            border: 1px solid #1c4767;
            border-radius: 10px;
            color: #9db0c6;
            font-size: 13px;
        }

        .nav-item.active {
            background: #173f5d;
            color: white;
        }

        .nav-item svg {
            width: 17px;
            height: 17px;
            stroke: currentColor;
        }

        .main {
            flex: 1;
        }

        .topbar {
            height: 72px;
            background: white;
            border-bottom: 1px solid #d6e0ea;
            border-radius: 0 0 16px 16px;
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .company {
            font-size: 14px;
        }

        .year {
            margin-left: 10px;
            padding: 6px 10px;
            border-radius: 999px;
            background: #edf4fb;
            color: #21669e;
            font-size: 10px;
            font-weight: 600;
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 35px;
            height: 35px;
            border-radius: 50%;
            background: #e5f6f3;
            color: #0f9188;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 600;
        }

        .profile-name {
            font-size: 11px;
        }

        .profile-role {
            margin-top: 2px;
            color: #8c9bb0;
            font-size: 10px;
        }

        .content {
            padding: 34px 32px;
        }

        .breadcrumb {
            margin-bottom: 12px;
            font-size: 11px;
            color: #78879c;
        }

        .breadcrumb a {
            color: #0f9188;
        }

        .title {
            font-size: 27px;
            font-weight: 450;
        }

        .subtitle {
            margin-top: 5px;
            color: #63728a;
            font-size: 13px;
        }

        .card {
            max-width: 650px;
            margin-top: 25px;
            padding: 25px;
            border: 1px solid #d2dce7;
            border-radius: 14px;
            background: white;
            box-shadow: 0 5px 20px rgba(13, 37, 61, .05);
        }

        .field {
            margin-bottom: 19px;
        }

        .field label {
            display: block;
            margin-bottom: 7px;
            font-size: 11px;
            font-weight: 600;
        }

        .input {
            width: 100%;
            height: 42px;
            padding: 0 12px;
            border: 1px solid #cbd7e3;
            border-radius: 9px;
            background: #fff;
            outline: none;
            font-size: 12px;
            color: #1c2940;
        }

        .input:focus {
            border-color: #0f9188;
            box-shadow: 0 0 0 3px rgba(15, 145, 136, .08);
        }

        .error {
            margin-top: 6px;
            color: #d94141;
            font-size: 10px;
        }

        .actions {
            display: flex;
            gap: 9px;
            justify-content: flex-end;
            padding-top: 7px;
        }

        .button {
            min-height: 40px;
            padding: 0 16px;
            border-radius: 9px;
            border: 1px solid #cbd7e3;
            background: white;
            font-size: 12px;
            cursor: pointer;
        }

        .button.primary {
            border-color: #0f9188;
            background: #0f9188;
            color: white;
        }

        @media (max-width: 760px) {
            .page {
                display: block;
            }

            .sidebar {
                width: 100%;
            }

            .topbar {
                padding: 0 16px;
            }

            .content {
                padding: 22px 16px;
            }

            .card {
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<div class="page">

    <aside class="sidebar">

        <div class="brand">

            <div class="brand-icon">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
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
                <div class="brand-title">Keuangan LSP</div>
                <div class="brand-subtitle">Administrasi Terpadu</div>
            </div>

        </div>

        <div class="sidebar-label">MENU BENDAHARA</div>

        <a href="{{ route('home') }}" class="nav-item">
            Dashboard
        </a>

        <a
            href="{{ route('categories.index') }}"
            class="nav-item active"
        >
            Master
        </a>

    </aside>


    <main class="main">

        <header class="topbar">

            <div>
                <span class="company">
                    LSP Kompetensi Nusantara
                </span>

                <span class="year">
                    • Tahun Buku 2026
                </span>
            </div>

            <div class="profile">

                <div class="avatar">
                    DS
                </div>

                <div>
                    <div class="profile-name">
                        Dewi Sartika
                    </div>

                    <div class="profile-role">
                        Bendahara
                    </div>
                </div>

            </div>

        </header>


        <section class="content">

            <div class="breadcrumb">
                <a href="{{ route('categories.index') }}">
                    Data Master Kategori
                </a>
                / Tambah Kategori
            </div>

            <h1 class="title">
                Tambah Kategori
            </h1>

            <p class="subtitle">
                Tambahkan kategori penerimaan atau pengeluaran.
            </p>


            <div class="card">

                <form
                    method="POST"
                    action="{{ route('categories.store') }}"
                >

                    @include('categories._form')


                    <div class="actions">

                        <a
                            href="{{ route('categories.index') }}"
                            class="button"
                        >
                            Kembali
                        </a>

                        <button
                            type="submit"
                            class="button primary"
                        >
                            Simpan Kategori
                        </button>

                    </div>

                </form>

            </div>

        </section>

    </main>

</div>

</body>
</html>