<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Data Master Kategori - Keuangan LSP</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --navy: #0b2341;
            --navy-soft: #173f5d;
            --teal: #0f9188;
            --teal-soft: #e7f7f4;
            --green: #159570;
            --green-soft: #e8f7f1;
            --red: #d94141;
            --red-soft: #fdeeee;
            --gray-soft: #f2f5f8;
            --bg: #f4f7fa;
            --white: #fff;
            --text: #1c2940;
            --text-soft: #63728a;
            --text-muted: #8c9bb0;
            --border: #d6e0ea;
        }

        body {
            min-height: 100vh;
            background: var(--bg);
            color: var(--text);
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
            text-decoration: none;
            color: inherit;
        }

        button,
        input,
        select {
            font: inherit;
        }

        .app {
            min-height: 100vh;
            display: flex;
        }

        /* SIDEBAR */

        .sidebar {
            width: 240px;
            min-width: 240px;
            min-height: 100vh;
            background: var(--navy);
            color: #fff;
            padding: 24px 16px;
            display: flex;
            flex-direction: column;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
            padding: 0 8px;
            margin-bottom: 32px;
        }

        .brand-icon {
            width: 38px;
            height: 38px;
            background: var(--teal);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-icon svg {
            width: 21px;
            height: 21px;
            stroke: #fff;
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

        .menu-label {
            margin: 0 8px 9px;
            color: #91a5be;
            font-size: 10px;
            font-weight: 700;
        }

        .nav {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .nav-item {
            padding: 11px 12px;
            border: 1px solid #1c4767;
            border-radius: 10px;
            display: flex;
            align-items: center;
            gap: 11px;
            color: #9db0c6;
            font-size: 13px;
        }

        .nav-item svg {
            width: 17px;
            height: 17px;
            stroke: currentColor;
            flex-shrink: 0;
        }

        .nav-item.active {
            background: var(--navy-soft);
            color: #fff;
            border-color: #1c4767;
        }

        .sidebar-note {
            margin-top: auto;
            padding: 14px 12px;
            border-radius: 10px;
            background: #123657;
        }

        .sidebar-note-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 12px;
        }

        .sidebar-note-title svg {
            width: 14px;
            height: 14px;
            stroke: #20b3a5;
        }

        .sidebar-note p {
            margin-top: 7px;
            color: #8fa5bb;
            font-size: 10px;
            line-height: 1.5;
        }

        /* MAIN */

        .main {
            flex: 1;
            min-width: 0;
        }

        .topbar {
            height: 72px;
            background: #fff;
            border-bottom: 1px solid var(--border);
            border-radius: 0 0 16px 16px;
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .top-left {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .company {
            display: flex;
            align-items: center;
            gap: 9px;
            font-size: 14px;
        }

        .company svg {
            width: 17px;
            height: 17px;
            stroke: var(--teal);
        }

        .year {
            padding: 6px 11px;
            border-radius: 999px;
            background: #edf4fb;
            color: #21669e;
            font-size: 10px;
            font-weight: 600;
        }

        .top-right {
            display: flex;
            align-items: center;
            gap: 13px;
        }

        .notification {
            width: 37px;
            height: 37px;
            border: 1px solid var(--border);
            border-radius: 10px;
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .notification svg {
            width: 17px;
            height: 17px;
            stroke: #62728a;
        }

        .divider {
            width: 1px;
            height: 28px;
            background: var(--border);
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
            color: var(--teal);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            font-weight: 600;
        }

        .profile-name {
            font-size: 11px;
            font-weight: 500;
        }

        .profile-role {
            margin-top: 2px;
            color: var(--text-muted);
            font-size: 10px;
        }

        .chevron {
            width: 15px;
            height: 15px;
            stroke: #6a788d;
        }

        /* CONTENT */

        .content {
            padding: 30px 32px 40px;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .page-title {
            font-size: 26px;
            font-weight: 450;
            letter-spacing: -0.5px;
        }

        .page-subtitle {
            margin-top: 5px;
            color: var(--text-soft);
            font-size: 13px;
        }

        .add-button {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 11px 17px;
            background: var(--teal);
            color: #fff;
            border-radius: 10px;
            font-size: 13px;
            font-weight: 500;
        }

        .add-button svg {
            width: 15px;
            height: 15px;
            stroke: currentColor;
        }

        .tabs {
            display: flex;
            gap: 8px;
            padding: 5px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 12px;
            margin-bottom: 24px;
        }

        .tab {
            padding: 9px 15px;
            border-radius: 8px;
            color: var(--text-soft);
            font-size: 11px;
            font-weight: 600;
        }

        .tab.active {
            background: var(--teal-soft);
            color: var(--teal);
        }

        /* ALERT */

        .alert {
            margin-bottom: 18px;
            padding: 11px 14px;
            border: 1px solid #bce5dc;
            border-radius: 10px;
            background: #edf9f6;
            color: #167662;
            font-size: 12px;
        }

        /* STATS */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;
            margin-bottom: 24px;
        }

        .stat {
            min-height: 74px;
            padding: 14px;
            background: #fff;
            border: 1px solid var(--border);
            border-radius: 13px;
        }

        .stat-label {
            color: var(--text-soft);
            font-size: 11px;
        }

        .stat-value {
            margin-top: 7px;
            font-size: 21px;
            font-weight: 450;
        }

        /* TABLE CARD */

        .table-card {
            min-height: 640px;
            background: #fff;
            border: 1px solid #cbd8e4;
            border-radius: 14px;
            padding: 18px;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 20px;
            margin-bottom: 15px;
        }

        .table-title {
            font-size: 15px;
            font-weight: 650;
        }

        .table-subtitle {
            margin-top: 4px;
            color: var(--text-soft);
            font-size: 11px;
        }

        .table-tools {
            display: flex;
            align-items: center;
            gap: 7px;
        }

        .filter-form {
            display: flex;
            gap: 7px;
        }

        .tool-select,
        .search-input,
        .tool-button {
            height: 35px;
            border: 1px solid #cad6e2;
            border-radius: 9px;
            background: #fff;
            color: var(--text);
            font-size: 11px;
        }

        .tool-select {
            padding: 0 10px;
        }

        .search-box {
            position: relative;
        }

        .search-box svg {
            position: absolute;
            width: 14px;
            height: 14px;
            left: 10px;
            top: 10px;
            stroke: #75849a;
            pointer-events: none;
        }

        .search-input {
            width: 180px;
            padding: 0 11px 0 31px;
            outline: none;
        }

        .search-input:focus,
        .tool-select:focus {
            border-color: var(--teal);
        }

        .tool-button {
            padding: 0 13px;
            cursor: pointer;
        }

        .table-wrapper {
            overflow-x: auto;
            border: 1px solid var(--border);
            border-radius: 11px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            padding: 11px 13px;
            background: #f3f6f9;
            color: #63748a;
            font-size: 10px;
            text-align: left;
            font-weight: 600;
            white-space: nowrap;
        }

        td {
            padding: 13px;
            border-top: 1px solid var(--border);
            font-size: 11px;
            white-space: nowrap;
        }

        .code {
            font-weight: 700;
        }

        .type-pill,
        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 5px 9px;
            border-radius: 999px;
            font-size: 10px;
            font-weight: 600;
        }

        .type-pill.income {
            color: var(--green);
            background: var(--green-soft);
        }

        .type-pill.expense {
            color: var(--red);
            background: var(--red-soft);
        }

        .status-pill.active {
            color: var(--green);
            background: var(--green-soft);
        }

        .status-pill.inactive {
            color: #62738a;
            background: #f0f3f6;
        }

        .dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: currentColor;
        }

        .actions {
            position: relative;
        }

        .actions summary {
            list-style: none;
            cursor: pointer;
            font-size: 18px;
            line-height: 1;
        }

        .actions summary::-webkit-details-marker {
            display: none;
        }

        .action-menu {
            position: absolute;
            z-index: 10;
            right: 0;
            top: 25px;
            min-width: 130px;
            padding: 6px;
            border: 1px solid var(--border);
            border-radius: 9px;
            background: #fff;
            box-shadow: 0 8px 20px rgba(13, 37, 61, .12);
        }

        .action-menu a,
        .action-menu button {
            width: 100%;
            padding: 8px 9px;
            border: none;
            background: transparent;
            border-radius: 6px;
            display: block;
            text-align: left;
            font-size: 11px;
            cursor: pointer;
            color: var(--text);
        }

        .action-menu a:hover,
        .action-menu button:hover {
            background: #f3f6f9;
        }

        .action-menu .danger {
            color: var(--red);
        }

        .pagination-row {
            margin-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pagination-info {
            color: var(--text-muted);
            font-size: 10px;
        }

        .pagination {
            display: flex;
            gap: 5px;
        }

        .page-link {
            min-width: 35px;
            height: 33px;
            padding: 0 10px;
            border: 1px solid #cad6e2;
            border-radius: 9px;
            background: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 11px;
            color: var(--text);
        }

        .page-link.current {
            color: #fff;
            background: var(--teal);
            border-color: var(--teal);
        }

        .page-link.disabled {
            color: #9aa6b5;
            pointer-events: none;
        }

        @media (max-width: 1050px) {
            .stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .table-header {
                flex-direction: column;
            }
        }

        @media (max-width: 760px) {
            .app {
                display: block;
            }

            .sidebar {
                width: 100%;
                min-width: 0;
                min-height: auto;
            }

            .topbar {
                padding: 0 16px;
            }

            .content {
                padding: 20px 16px 30px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
                gap: 15px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .table-tools,
            .filter-form {
                width: 100%;
                flex-direction: column;
            }

            .search-input {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="app">

    {{-- SIDEBAR --}}

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

        <div class="menu-label">MENU BENDAHARA</div>

        <nav class="nav">

            <a href="{{ route('home') }}" class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                    <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                    <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                    <rect x="14" y="14" width="7" height="7" rx="1"></rect>
                </svg>
                Dashboard
            </a>

            <a href="{{ route('categories.index') }}" class="nav-item active">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <ellipse cx="12" cy="5" rx="8" ry="3"></ellipse>
                    <path d="M4 5v7c0 1.7 3.6 3 8 3s8-1.3 8-3V5"></path>
                    <path d="M4 12v7c0 1.7 3.6 3 8 3s8-1.3 8-3v-7"></path>
                </svg>
                Master
            </a>

            <span class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M7 7h13"></path>
                    <path d="m17 3 4 4-4 4"></path>
                    <path d="M17 17H4"></path>
                    <path d="m7 13-4 4 4 4"></path>
                </svg>
                Transaksi
            </span>

            <span class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M7 7h10a4 4 0 0 1 4 4v1a4 4 0 0 1-4 4H9"></path>
                    <path d="M9 16 6 19"></path>
                    <path d="M6 19v-4"></path>
                    <circle cx="6" cy="7" r="3"></circle>
                </svg>
                Tabungan Asesor
            </span>

            <span class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M6 4h12"></path>
                    <path d="M6 8h12"></path>
                    <path d="M6 12h12"></path>
                    <path d="M6 16h12"></path>
                    <path d="M6 20h12"></path>
                    <path d="M4 4v16"></path>
                    <path d="M20 4v16"></path>
                </svg>
                Buku Kas
            </span>

            <span class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M5 3h10l4 4v14H5z"></path>
                    <path d="M15 3v5h5"></path>
                </svg>
                Laporan
            </span>

        </nav>

        <div class="sidebar-note">
            <div class="sidebar-note-title">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <path d="M12 3 20 6v6c0 5-3.3 8-8 9-4.7-1-8-4-8-9V6z"></path>
                    <path d="m9 12 2 2 4-4"></path>
                </svg>
                Data terkendali
            </div>

            <p>
                Hanya transaksi Approved yang memengaruhi saldo.
            </p>
        </div>

    </aside>


    {{-- MAIN --}}

    <main class="main">

        <header class="topbar">

            <div class="top-left">

                <div class="company">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M4 20V8"></path>
                        <path d="M9 20V4"></path>
                        <path d="M15 20v-8"></path>
                        <path d="M20 20V6"></path>
                        <path d="M3 20h18"></path>
                    </svg>

                    LSP Kompetensi Nusantara
                </div>

                <span class="year">
                    • Tahun Buku 2026
                </span>

            </div>

            <div class="top-right">

                <div class="notification">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"></path>
                        <path d="M10 21h4"></path>
                    </svg>
                </div>

                <div class="divider"></div>

                <div class="profile">
                    <div class="avatar">DS</div>

                    <div>
                        <div class="profile-name">Dewi Sartika</div>
                        <div class="profile-role">Bendahara</div>
                    </div>

                    <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="m7 10 5 5 5-5"></path>
                    </svg>
                </div>

            </div>

        </header>


        <section class="content">

            <div class="page-header">

                <div>
                    <h1 class="page-title">
                        Data Master Kategori
                    </h1>

                    <p class="page-subtitle">
                        Kelola kategori penerimaan dan pengeluaran transaksi.
                    </p>
                </div>

                <a
                    href="{{ route('categories.create') }}"
                    class="add-button"
                >
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M12 5v14"></path>
                        <path d="M5 12h14"></path>
                    </svg>

                    Tambah Kategori
                </a>

            </div>


            <div class="tabs">
                <div class="tab active">Kategori</div>
                <div class="tab">Asesor</div>
                <div class="tab">Alokasi Dana</div>
            </div>


            @if (session('success'))
                <div class="alert">
                    {{ session('success') }}
                </div>
            @endif


            <div class="stats">

                <div class="stat">
                    <div class="stat-label">Total kategori</div>
                    <div class="stat-value">{{ $totalCategories }}</div>
                </div>

                <div class="stat">
                    <div class="stat-label">Penerimaan aktif</div>
                    <div class="stat-value">{{ $activeIncome }}</div>
                </div>

                <div class="stat">
                    <div class="stat-label">Pengeluaran aktif</div>
                    <div class="stat-value">{{ $activeExpense }}</div>
                </div>

                <div class="stat">
                    <div class="stat-label">Kategori nonaktif</div>
                    <div class="stat-value">{{ $inactiveCategories }}</div>
                </div>

            </div>


            <div class="table-card">

                <div class="table-header">

                    <div>
                        <div class="table-title">
                            Daftar kategori
                        </div>

                        <div class="table-subtitle">
                            Kategori wajib sesuai dengan jenis transaksi yang dipilih.
                        </div>
                    </div>


                    <div class="table-tools">

                        <form
                            method="GET"
                            action="{{ route('categories.index') }}"
                            class="filter-form"
                        >

                            <select
                                name="type"
                                class="tool-select"
                                onchange="this.form.submit()"
                            >
                                <option value="">
                                    Semua Jenis
                                </option>

                                <option
                                    value="Penerimaan"
                                    @selected(request('type') === 'Penerimaan')
                                >
                                    Penerimaan
                                </option>

                                <option
                                    value="Pengeluaran"
                                    @selected(request('type') === 'Pengeluaran')
                                >
                                    Pengeluaran
                                </option>
                            </select>


                            <div class="search-box">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke-width="1.8"
                                >
                                    <circle cx="11" cy="11" r="7"></circle>
                                    <path d="m20 20-4-4"></path>
                                </svg>

                                <input
                                    type="text"
                                    name="search"
                                    class="search-input"
                                    value="{{ request('search') }}"
                                    placeholder="Cari"
                                >

                            </div>

                            <button class="tool-button" type="submit">
                                Cari
                            </button>

                        </form>

                    </div>

                </div>


                <div class="table-wrapper">

                    <table>

                        <thead>
                            <tr>
                                <th>KODE</th>
                                <th>JENIS</th>
                                <th>NAMA KATEGORI</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>

                        <tbody>

                        @forelse ($categories as $category)

                            <tr>

                                <td class="code">
                                    KAT-{{ str_pad($category->id, 3, '0', STR_PAD_LEFT) }}
                                </td>

                                <td>

                                    <span
                                        class="type-pill {{ $category->type === 'Penerimaan' ? 'income' : 'expense' }}"
                                    >
                                        <span class="dot"></span>
                                        {{ $category->type }}
                                    </span>

                                </td>

                                <td>
                                    {{ $category->name }}
                                </td>

                                <td>

                                    <span
                                        class="status-pill {{ $category->is_active ? 'active' : 'inactive' }}"
                                    >
                                        <span class="dot"></span>

                                        {{ $category->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>

                                </td>

                                <td>

                                    <details class="actions">

                                        <summary>•••</summary>

                                        <div class="action-menu">

                                            <a href="{{ route('categories.edit', $category) }}">
                                                Edit
                                            </a>

                                            <form
                                                method="POST"
                                                action="{{ route('categories.destroy', $category) }}"
                                                onsubmit="return confirm('Yakin ingin menghapus kategori ini?')"
                                            >
                                                @csrf
                                                @method('DELETE')

                                                <button
                                                    type="submit"
                                                    class="danger"
                                                >
                                                    Hapus
                                                </button>
                                            </form>

                                        </div>

                                    </details>

                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="5" style="text-align:center;padding:30px;color:#8c9bb0;">
                                    Data kategori tidak ditemukan.
                                </td>
                            </tr>

                        @endforelse

                        </tbody>

                    </table>

                </div>


                <div class="pagination-row">

                    <div class="pagination-info">
                        Menampilkan
                        {{ $categories->firstItem() ?? 0 }}
                        -
                        {{ $categories->lastItem() ?? 0 }}
                        dari
                        {{ $categories->total() }}
                        kategori
                    </div>


                    <div class="pagination">

                        @if ($categories->onFirstPage())

                            <span class="page-link disabled">
                                Sebelumnya
                            </span>

                        @else

                            <a
                                class="page-link"
                                href="{{ $categories->previousPageUrl() }}"
                            >
                                Sebelumnya
                            </a>

                        @endif


                        @for ($page = 1; $page <= $categories->lastPage(); $page++)

                            <a
                                class="page-link {{ $page == $categories->currentPage() ? 'current' : '' }}"
                                href="{{ $categories->url($page) }}"
                            >
                                {{ $page }}
                            </a>

                        @endfor


                        @if ($categories->hasMorePages())

                            <a
                                class="page-link"
                                href="{{ $categories->nextPageUrl() }}"
                            >
                                Berikutnya
                            </a>

                        @else

                            <span class="page-link disabled">
                                Berikutnya
                            </span>

                        @endif

                    </div>

                </div>

            </div>

        </section>

    </main>

</div>

</body>
</html>