<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pemrograman Web')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #eef2f7; margin: 0; font-family: 'Segoe UI', sans-serif; }

        .top-header {
            background: #1a56db;
            color: white;
            padding: 14px 28px;
            display: flex;
            align-items: center;
            gap: 14px;
        }
        .top-header .avatar {
            width: 40px; height: 40px;
            background: rgba(255,255,255,0.25);
            border-radius: 50%;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700; font-size: 0.95rem; flex-shrink: 0;
        }
        .top-header h6 { margin: 0; font-size: 0.95rem; font-weight: 700; }
        .top-header small { opacity: 0.75; font-size: 0.75rem; }

        .tab-bar {
            background: white;
            border-bottom: 2px solid #e2e8f0;
            padding: 0 28px;
            display: flex;
            gap: 0;
            overflow-x: auto;
        }
        .tab-bar a {
            padding: 12px 18px;
            text-decoration: none;
            color: #64748b;
            font-size: 0.82rem;
            font-weight: 500;
            border-bottom: 2px solid transparent;
            margin-bottom: -2px;
            white-space: nowrap;
            transition: color 0.15s;
        }
        .tab-bar a:hover { color: #1a56db; }
        .tab-bar a.active { color: #1a56db; border-bottom-color: #1a56db; font-weight: 600; }

        .page-content { padding: 24px 28px; }

        .card { border: none; border-radius: 10px; box-shadow: 0 1px 8px rgba(0,0,0,0.08); }
        .card-header { background: #1a56db; color: white; border-radius: 10px 10px 0 0 !important; padding: 14px 20px; font-weight: 600; font-size: 0.92rem; }
        .card .btn-light { color: #1a56db; font-weight: 600; font-size: 0.82rem; }

        .table thead th { background: #1a56db; color: white; font-size: 0.82rem; font-weight: 600; border: none; padding: 12px 14px; }
        .table tbody td { font-size: 0.88rem; vertical-align: middle; padding: 11px 14px; }
        .table tbody tr:hover { background: #f1f5fb; }

        .form-label { font-size: 0.85rem; font-weight: 600; color: #374151; }
        .form-control { font-size: 0.9rem; border-radius: 7px; border: 1.5px solid #d1d5db; }
        .form-control:focus { border-color: #1a56db; box-shadow: 0 0 0 3px rgba(26,86,219,0.1); }

        .btn-primary { background: #1a56db; border-color: #1a56db; }
        .btn-primary:hover { background: #1648c0; border-color: #1648c0; }
    </style>
</head>
<body>

<div class="top-header">
    <div class="avatar">SQ</div>
    <div>
        <h6>5026241133 — Shabrina Qutrinada</h6>
        <small>@yield('subtitle', 'Aplikasi Pemrograman Web')</small>
    </div>
</div>

<div class="tab-bar">
    <a href="/pegawai"     class="{{ request()->is('pegawai*')     ? 'active' : '' }}">Pegawai</a>
    <a href="/siswa"       class="{{ request()->is('siswa*')       ? 'active' : '' }}">Siswa</a>
    <a href="/praeas"      class="{{ request()->is('praeas*')      ? 'active' : '' }}">PRA EAS</a>
    <a href="/keranjang"   class="{{ request()->is('keranjang*')   ? 'active' : '' }}">Lat1. Keranjang Belanja</a>
    <a href="/nilaikuliah" class="{{ request()->is('nilaikuliah*') ? 'active' : '' }}">Lat2. Nilai Kuliah</a>
    <a href="/eas"         class="{{ request()->is('eas*')         ? 'active' : '' }}">EAS</a>
</div>

<div class="page-content">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
