<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Dashboard Bendahara - NERAFIN</title>

    <style>
        :root {
            --navy: #0b1f3a;
            --navy-soft: #133a58;
            --teal: #0f9188;
            --teal-soft: #e8f7f5;
            --green: #159570;
            --green-soft: #e8f7f1;
            --red: #dd4545;
            --red-soft: #fdeeee;
            --yellow: #c78315;
            --yellow-soft: #fff5df;

            --text: #172033;
            --text-soft: #60708a;
            --text-muted: #8d9bb0;

            --bg: #f4f7fa;
            --white: #ffffff;
            --border: #dce4ec;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
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

        a {
            text-decoration: none;
            color: inherit;
        }

        button {
            font-family: inherit;
        }

        .app {
            min-height: 100vh;
            display: flex;
        }

        /* ========================================
           SIDEBAR
        ======================================== */

        .sidebar {
            width: 240px;
            min-width: 240px;
            min-height: 100vh;
            background: var(--navy);
            color: #ffffff;

            display: flex;
            flex-direction: column;

            padding: 24px 16px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;

            padding: 0 8px;
            margin-bottom: 34px;
        }

        .brand-logo {
            width: 38px;
            height: 38px;
            border-radius: 10px;

            background: var(--teal);

            display: flex;
            align-items: center;
            justify-content: center;

            flex-shrink: 0;
        }

        .brand-logo svg {
            width: 21px;
            height: 21px;
            stroke: #ffffff;
        }

        .brand-title {
            font-size: 16px;
            line-height: 1.2;
            font-weight: 600;
        }

        .brand-subtitle {
            font-size: 11px;
            color: #91a5be;
            margin-top: 3px;
        }

        .menu-label {
            color: #8da1b9;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.4px;

            margin: 0 8px 10px;
        }

        .nav {
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        .nav-item {
            width: 100%;

            display: flex;
            align-items: center;
            gap: 12px;

            padding: 11px 12px;

            border-radius: 10px;

            color: #9eb0c5;
            font-size: 14px;

            transition: 0.15s ease;
        }

        .nav-item:hover {
            background: rgba(255, 255, 255, 0.05);
            color: #ffffff;
        }

        .nav-item.active {
            background: var(--navy-soft);
            color: #ffffff;
        }

        .nav-item svg {
            width: 17px;
            height: 17px;
            stroke: currentColor;
            flex-shrink: 0;
        }

        .sidebar-note {
            margin-top: auto;

            background: #123657;

            padding: 14px 12px;

            border-radius: 10px;
        }

        .sidebar-note-title {
            display: flex;
            align-items: center;
            gap: 8px;

            font-size: 12px;
            font-weight: 600;
            color: #dce9f5;
        }

        .sidebar-note-title svg {
            width: 14px;
            height: 14px;
            stroke: #26baa9;
        }

        .sidebar-note p {
            margin-top: 7px;

            font-size: 11px;
            line-height: 1.5;

            color: #8fa5bb;
        }

        /* ========================================
           MAIN
        ======================================== */

        .main {
            flex: 1;
            min-width: 0;
        }

        .topbar {
            height: 72px;

            background: var(--white);
            border-bottom: 1px solid var(--border);

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 0 32px;
        }

        .topbar-left {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .company {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 14px;
            font-weight: 500;
        }

        .company-icon {
            width: 17px;
            height: 17px;
            stroke: var(--teal);
        }

        .year-badge {
            display: inline-flex;
            align-items: center;
            gap: 7px;

            padding: 6px 11px;

            border-radius: 999px;

            background: #edf4fb;
            color: #23659e;

            font-size: 11px;
            font-weight: 600;
        }

        .year-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #2878b8;
        }

        .topbar-right {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .icon-button {
            width: 38px;
            height: 38px;

            border: 1px solid var(--border);
            background: var(--white);

            border-radius: 10px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .icon-button svg {
            width: 18px;
            height: 18px;
            stroke: #60708a;
        }

        .top-divider {
            width: 1px;
            height: 30px;
            background: var(--border);
        }

        .profile {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .avatar {
            width: 36px;
            height: 36px;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            background: #e6f5f3;
            color: var(--teal);

            font-size: 12px;
            font-weight: 600;
        }

        .profile-info {
            line-height: 1.25;
        }

        .profile-name {
            font-size: 12px;
            font-weight: 500;
        }

        .profile-role {
            margin-top: 3px;
            font-size: 11px;
            color: var(--text-muted);
        }

        .profile-chevron {
            width: 15px;
            height: 15px;
            stroke: #68778e;
            margin-left: 2px;
        }

        /* ========================================
           CONTENT
        ======================================== */

        .content {
            padding: 30px 32px 40px;
        }

        .page-header {
            display: flex;
            align-items: flex-end;
            justify-content: space-between;
            gap: 20px;

            margin-bottom: 24px;
        }

        .page-title {
            font-size: 27px;
            font-weight: 500;
            letter-spacing: -0.5px;
        }

        .page-subtitle {
            margin-top: 5px;

            color: var(--text-soft);
            font-size: 14px;
        }

        .primary-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;

            min-height: 40px;

            padding: 0 17px;

            border: none;
            border-radius: 10px;

            background: var(--teal);
            color: #ffffff;

            font-size: 13px;
            font-weight: 500;
        }

        .primary-button svg {
            width: 15px;
            height: 15px;
            stroke: #ffffff;
        }

        /* ========================================
           STAT CARDS
        ======================================== */

        .stats {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 16px;

            margin-bottom: 24px;
        }

        .stat-card {
            background: var(--white);

            border: 1px solid var(--border);
            border-radius: 14px;

            padding: 16px;

            min-height: 130px;
        }

        .stat-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .stat-label {
            font-size: 12px;
            color: var(--text-soft);
            font-weight: 600;
        }

        .stat-icon {
            width: 34px;
            height: 34px;

            display: flex;
            align-items: center;
            justify-content: center;

            border-radius: 9px;
        }

        .stat-icon svg {
            width: 16px;
            height: 16px;
        }

        .stat-icon.teal {
            background: #e6f6f3;
        }

        .stat-icon.teal svg {
            stroke: var(--teal);
        }

        .stat-icon.green {
            background: var(--green-soft);
        }

        .stat-icon.green svg {
            stroke: var(--green);
        }

        .stat-icon.red {
            background: var(--red-soft);
        }

        .stat-icon.red svg {
            stroke: var(--red);
        }

        .stat-icon.yellow {
            background: var(--yellow-soft);
        }

        .stat-icon.yellow svg {
            stroke: var(--yellow);
        }

        .stat-value {
            margin-top: 14px;

            font-size: 23px;
            font-weight: 450;
            letter-spacing: -0.4px;
        }

        .stat-foot {
            margin-top: 8px;

            color: var(--text-muted);
            font-size: 10px;
        }

        /* ========================================
           LOWER CONTENT
        ======================================== */

        .dashboard-grid {
            display: grid;
            grid-template-columns: minmax(0, 2.15fr) minmax(300px, 0.85fr);
            gap: 20px;
        }

        .card {
            background: var(--white);

            border: 1px solid var(--border);
            border-radius: 14px;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;

            padding: 18px 18px 14px;
        }

        .card-title {
            font-size: 16px;
            font-weight: 650;
        }

        .card-subtitle {
            margin-top: 4px;

            color: var(--text-soft);
            font-size: 12px;
        }

        .card-link {
            color: var(--teal);
            font-size: 11px;
            font-weight: 500;

            margin-top: 3px;
        }

        /* TABLE */

        .table-wrapper {
            padding: 0 18px 18px;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;

            border: 1px solid var(--border);
            border-radius: 11px;

            overflow: hidden;
        }

        thead th {
            background: #f2f6fa;

            color: #65758a;

            text-align: left;

            padding: 11px 12px;

            font-size: 10px;
            font-weight: 600;

            white-space: nowrap;
        }

        tbody td {
            padding: 12px;

            border-top: 1px solid var(--border);

            color: #273249;

            font-size: 11px;

            white-space: nowrap;
        }

        tbody tr:first-child td {
            border-top: none;
        }

        .table-id {
            font-weight: 650;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            padding: 5px 9px;

            border-radius: 999px;

            font-size: 10px;
            font-weight: 600;
        }

        .badge-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
        }

        .badge.approved {
            color: var(--green);
            background: var(--green-soft);
        }

        .badge.approved .badge-dot {
            background: var(--green);
        }

        .badge.pending {
            color: var(--yellow);
            background: var(--yellow-soft);
        }

        .badge.pending .badge-dot {
            background: var(--yellow);
        }

        .badge.rejected {
            color: var(--red);
            background: var(--red-soft);
        }

        .badge.rejected .badge-dot {
            background: var(--red);
        }

        /* ========================================
           RIGHT CARDS
        ======================================== */

        .right-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .allocation-card {
            padding: 18px;
        }

        .allocation-item {
            margin-top: 16px;
        }

        .allocation-item:first-of-type {
            margin-top: 18px;
        }

        .allocation-row {
            display: flex;
            align-items: center;
            justify-content: space-between;

            margin-bottom: 7px;
        }

        .allocation-name {
            font-size: 11px;
            font-weight: 650;
        }

        .allocation-value {
            color: var(--text-soft);
            font-size: 10px;
        }

        .progress-bg {
            height: 6px;

            border-radius: 999px;

            background: #eef2f6;

            overflow: hidden;
        }

        .progress-fill {
            height: 100%;
            border-radius: inherit;
            background: var(--teal);
        }

        .process-card {
            padding: 18px;
        }

        .process-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .pending-count {
            display: inline-flex;
            align-items: center;
            gap: 6px;

            padding: 5px 9px;

            border-radius: 999px;

            background: var(--yellow-soft);
            color: var(--yellow);

            font-size: 10px;
            font-weight: 600;
        }

        .pending-count span {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--yellow);
        }

        .process-description {
            margin-top: 16px;

            color: var(--text-soft);
            font-size: 11px;
            line-height: 1.55;
        }

        /* ========================================
           RESPONSIVE
        ======================================== */

        @media (max-width: 1150px) {
            .stats {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .dashboard-grid {
                grid-template-columns: 1fr;
            }

            .sidebar {
                width: 220px;
                min-width: 220px;
            }
        }

        @media (max-width: 760px) {
            .app {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                min-width: 100%;
                min-height: auto;
                padding: 16px;
            }

            .brand {
                margin-bottom: 18px;
            }

            .nav {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .sidebar-note {
                margin-top: 16px;
            }

            .topbar {
                padding: 0 16px;
            }

            .company {
                font-size: 12px;
            }

            .profile-info {
                display: none;
            }

            .content {
                padding: 22px 16px 30px;
            }

            .page-header {
                align-items: flex-start;
                flex-direction: column;
            }

            .stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <div class="app">

        {{-- =========================================
         SIDEBAR
    ========================================== --}}

        <aside class="sidebar">

            <div class="brand">

                <div class="brand-logo">
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

                <a href="/" class="nav-item active">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                        <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                        <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                        <rect x="14" y="14" width="7" height="7" rx="1"></rect>
                    </svg>
                    <span>Dashboard</span>
                </a>

                <a href="{{ route('categories.index') }}" class="nav-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <ellipse cx="12" cy="5" rx="8" ry="3"></ellipse>
                        <path d="M4 5v7c0 1.7 3.6 3 8 3s8-1.3 8-3V5"></path>
                        <path d="M4 12v7c0 1.7 3.6 3 8 3s8-1.3 8-3v-7"></path>
                    </svg>
                    <span>Master</span>
                </a>
                <!-- {{-- Belum aktif pada Tahap 1 --}}
            <span class="nav-item">
                <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                    <ellipse cx="12" cy="5" rx="8" ry="3"></ellipse>
                    <path d="M4 5v7c0 1.7 3.6 3 8 3s8-1.3 8-3V5"></path>
                    <path d="M4 12v7c0 1.7 3.6 3 8 3s8-1.3 8-3v-7"></path>
                </svg>
                <span>Master</span>
            </span> -->

                <span class="nav-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M7 7h13"></path>
                        <path d="m17 3 4 4-4 4"></path>
                        <path d="M17 17H4"></path>
                        <path d="m7 13-4 4 4 4"></path>
                    </svg>
                    <span>Transaksi</span>
                </span>

                <span class="nav-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M7 7h10a4 4 0 0 1 4 4v1a4 4 0 0 1-4 4H9"></path>
                        <path d="M9 16 6 19"></path>
                        <path d="M6 19v-4"></path>
                        <circle cx="6" cy="7" r="3"></circle>
                    </svg>
                    <span>Tabungan Asesor</span>
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
                    <span>Buku Kas</span>
                </span>

                <span class="nav-item">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M5 3h10l4 4v14H5z"></path>
                        <path d="M15 3v5h5"></path>
                        <path d="M8 16v-3"></path>
                        <path d="M12 16v-6"></path>
                        <path d="M16 16v-4"></path>
                    </svg>
                    <span>Laporan</span>
                </span>

            </nav>

            <div class="sidebar-note">

                <div class="sidebar-note-title">

                    <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                        <path d="M12 3 20 6v6c0 5-3.3 8-8 9-4.7-1-8-4-8-9V6z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>

                    <span>Data terkendali</span>

                </div>

                <p>
                    Hanya transaksi Approved yang memengaruhi saldo.
                </p>

            </div>

        </aside>


        {{-- =========================================
         MAIN
    ========================================== --}}

        <main class="main">

            {{-- TOPBAR --}}

            <header class="topbar">

                <div class="topbar-left">

                    <div class="company">

                        <svg
                            class="company-icon"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="1.8">
                            <path d="M4 20V8"></path>
                            <path d="M9 20V4"></path>
                            <path d="M15 20v-8"></path>
                            <path d="M20 20V6"></path>
                            <path d="M3 20h18"></path>
                            <path d="M7 8h4"></path>
                            <path d="M13 5h4"></path>
                        </svg>

                        <span>LSP Kompetensi Nusantara</span>

                    </div>

                    <div class="year-badge">
                        <span class="year-dot"></span>
                        Tahun Buku 2026
                    </div>

                </div>


                <div class="topbar-right">

                    <button class="icon-button" type="button" aria-label="Notifikasi">

                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                            <path d="M18 8a6 6 0 0 0-12 0c0 7-3 7-3 9h18c0-2-3-2-3-9"></path>
                            <path d="M10 21h4"></path>
                        </svg>

                    </button>

                    <div class="top-divider"></div>

                    <div class="profile">

                        <div class="avatar">
                            DS
                        </div>

                        <div class="profile-info">
                            <div class="profile-name">Dewi Sartika</div>
                            <div class="profile-role">Bendahara</div>
                        </div>

                        <svg
                            class="profile-chevron"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke-width="1.8">
                            <path d="m7 10 5 5 5-5"></path>
                        </svg>

                    </div>

                </div>

            </header>


            {{-- CONTENT --}}

            <section class="content">

                <div class="page-header">

                    <div>
                        <h1 class="page-title">
                            Dashboard Bendahara
                        </h1>

                        <p class="page-subtitle">
                            Ringkasan posisi keuangan per 29 September 2026.
                        </p>
                    </div>

                    <a href="#" class="primary-button">

                        <svg viewBox="0 0 24 24" fill="none" stroke-width="1.8">
                            <path d="M12 5v14"></path>
                            <path d="M5 12h14"></path>
                        </svg>

                        Input Transaksi

                    </a>

                </div>


                {{-- STATISTICS --}}

                <div class="stats">

                    <div class="stat-card">

                        <div class="stat-top">

                            <div class="stat-label">
                                Saldo saat ini
                            </div>

                            <div class="stat-icon teal">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke-width="1.8">
                                    <path d="M4 6h16v12H4z"></path>
                                    <path d="M4 9h16"></path>
                                    <path d="M8 14h4"></path>
                                </svg>

                            </div>

                        </div>

                        <div class="stat-value">
                            Rp 286.450.000
                        </div>

                        <div class="stat-foot">
                            Dari transaksi Approved
                        </div>

                    </div>


                    <div class="stat-card">

                        <div class="stat-top">

                            <div class="stat-label">
                                Penerimaan bulan ini
                            </div>

                            <div class="stat-icon green">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke-width="1.8">
                                    <path d="m5 19 14-14"></path>
                                    <path d="M9 5h10v10"></path>
                                </svg>

                            </div>

                        </div>

                        <div class="stat-value">
                            Rp 84.750.000
                        </div>

                        <div class="stat-foot">
                            +12,4% dari Agustus
                        </div>

                    </div>


                    <div class="stat-card">

                        <div class="stat-top">

                            <div class="stat-label">
                                Pengeluaran bulan ini
                            </div>

                            <div class="stat-icon red">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke-width="1.8">
                                    <path d="m5 5 14 14"></path>
                                    <path d="M5 15V5h10"></path>
                                </svg>

                            </div>

                        </div>

                        <div class="stat-value">
                            Rp 42.365.000
                        </div>

                        <div class="stat-foot">
                            49,9% dari penerimaan
                        </div>

                    </div>


                    <div class="stat-card">

                        <div class="stat-top">

                            <div class="stat-label">
                                Menunggu persetujuan
                            </div>

                            <div class="stat-icon yellow">

                                <svg
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke-width="1.8">
                                    <circle cx="12" cy="12" r="9"></circle>
                                    <path d="M12 7v5l3 2"></path>
                                </svg>

                            </div>

                        </div>

                        <div class="stat-value">
                            3 transaksi
                        </div>

                        <div class="stat-foot">
                            Total Rp 9.650.000
                        </div>

                    </div>

                </div>


                {{-- LOWER GRID --}}

                <div class="dashboard-grid">


                    {{-- TRANSAKSI TERBARU --}}

                    <div class="card">

                        <div class="card-header">

                            <div>
                                <div class="card-title">
                                    Transaksi terbaru
                                </div>

                                <div class="card-subtitle">
                                    Aktivitas keuangan terbaru lintas status.
                                </div>
                            </div>

                            <span class="card-link">
                                Lihat semua
                            </span>

                        </div>


                        <div class="table-wrapper">

                            <table>

                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>TANGGAL</th>
                                        <th>JENIS</th>
                                        <th>KATEGORI</th>
                                        <th>JUMLAH</th>
                                        <th>STATUS</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <tr>
                                        <td class="table-id">
                                            TRX-260924-018
                                        </td>
                                        <td>
                                            24 Sep 2026
                                        </td>
                                        <td>
                                            Penerimaan
                                        </td>
                                        <td>
                                            Biaya Sertifikasi
                                        </td>
                                        <td>
                                            Rp 12.500.000
                                        </td>
                                        <td>
                                            <span class="badge approved">
                                                <span class="badge-dot"></span>
                                                Approved
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-id">
                                            TRX-260923-017
                                        </td>
                                        <td>
                                            23 Sep 2026
                                        </td>
                                        <td>
                                            Pengeluaran
                                        </td>
                                        <td>
                                            Honor Asesor
                                        </td>
                                        <td>
                                            Rp 4.800.000
                                        </td>
                                        <td>
                                            <span class="badge pending">
                                                <span class="badge-dot"></span>
                                                Pending
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-id">
                                            TRX-260922-016
                                        </td>
                                        <td>
                                            22 Sep 2026
                                        </td>
                                        <td>
                                            Pengeluaran
                                        </td>
                                        <td>
                                            Operasional TUK
                                        </td>
                                        <td>
                                            Rp 2.350.000
                                        </td>
                                        <td>
                                            <span class="badge approved">
                                                <span class="badge-dot"></span>
                                                Approved
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-id">
                                            TRX-260920-015
                                        </td>
                                        <td>
                                            20 Sep 2026
                                        </td>
                                        <td>
                                            Penerimaan
                                        </td>
                                        <td>
                                            Pelatihan Kompetensi
                                        </td>
                                        <td>
                                            Rp 8.750.000
                                        </td>
                                        <td>
                                            <span class="badge approved">
                                                <span class="badge-dot"></span>
                                                Approved
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-id">
                                            TRX-260919-014
                                        </td>
                                        <td>
                                            19 Sep 2026
                                        </td>
                                        <td>
                                            Pengeluaran
                                        </td>
                                        <td>
                                            Perlengkapan ATK
                                        </td>
                                        <td>
                                            Rp 1.125.000
                                        </td>
                                        <td>
                                            <span class="badge rejected">
                                                <span class="badge-dot"></span>
                                                Rejected
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>


                    {{-- RIGHT COLUMN --}}

                    <div class="right-column">


                        {{-- ALOKASI DANA --}}

                        <div class="card allocation-card">

                            <div class="card-title">
                                Alokasi dana 2026
                            </div>

                            <div class="card-subtitle">
                                Realisasi transaksi Approved
                            </div>


                            <div class="allocation-item">

                                <div class="allocation-row">

                                    <span class="allocation-name">
                                        Operasional LSP
                                    </span>

                                    <span class="allocation-value">
                                        Rp 74,4 jt
                                    </span>

                                </div>

                                <div class="progress-bg">
                                    <div
                                        class="progress-fill"
                                        style="width: 64%;"></div>
                                </div>

                            </div>


                            <div class="allocation-item">

                                <div class="allocation-row">

                                    <span class="allocation-name">
                                        Sertifikasi
                                    </span>

                                    <span class="allocation-value">
                                        Rp 96,0 jt
                                    </span>

                                </div>

                                <div class="progress-bg">
                                    <div
                                        class="progress-fill"
                                        style="width: 50%;"></div>
                                </div>

                            </div>


                            <div class="allocation-item">

                                <div class="allocation-row">

                                    <span class="allocation-name">
                                        Pengembangan SDM
                                    </span>

                                    <span class="allocation-value">
                                        Rp 28,0 jt
                                    </span>

                                </div>

                                <div class="progress-bg">
                                    <div
                                        class="progress-fill"
                                        style="width: 36%;"></div>
                                </div>

                            </div>

                        </div>


                        {{-- STATUS PROSES --}}

                        <div class="card process-card">

                            <div class="process-top">

                                <div class="card-title">
                                    Status proses
                                </div>

                                <div class="pending-count">
                                    <span></span>
                                    3 Pending
                                </div>

                            </div>

                            <div class="process-description">
                                Transaksi Pending belum masuk perhitungan saldo
                                hingga disetujui Ketua.
                            </div>

                        </div>

                    </div>

                </div>

            </section>

        </main>

    </div>

</body>

</html>