<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Asset Management System')</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #f8fafc;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow-x: hidden;
        }
        /* সাইডবার ডিজাইন */
        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #1e293b;
            color: #f1f5f9;
            transition: all 0.3s;
            z-index: 1000;
        }
        .sidebar .brand {
            padding: 20px;
            font-size: 1.2rem;
            font-weight: 700;
            border-bottom: 1px solid #334155;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .sidebar ul {
            list-style: none;
            padding: 15px 0;
            margin: 0;
        }
        .sidebar ul li a {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px 25px;
            color: #94a3b8;
            text-decoration: none;
            font-size: 0.95rem;
            transition: 0.2s;
        }
        .sidebar ul li a:hover, .sidebar ul li a.active {
            color: #ffffff;
            background-color: #334155;
            border-left: 4px solid #3b82f6;
        }
        /* মেইন কনটেন্ট এরিয়া */
        .main-content {
            margin-left: 260px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        /* টপবার */
        .topbar {
            background: #ffffff;
            height: 65px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            border-bottom: 1px solid #e2e8f0;
        }
        .content-body {
            padding: 30px;
            flex-grow: 1;
        }
    </style>
</head>
<body>

<!-- ১. সাইডবার (Sidebar) -->
<div class="sidebar">
    <div class="brand">
        <i class="bi bi-boxes text-primary fs-3"></i>
        <span>AssetManager</span>
    </div>
    <ul>
        <li>
            <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-laptop"></i> Asset Registry
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-tags"></i> Category and Department
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-arrow-left-right"></i> Assign and Return
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-qr-code-scan"></i> Scanner (QR Code)
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-tools"></i> Maintenance
            </a>
        </li>
        <li>
            <a href="#">
                <i class="bi bi-graph-down-arrow"></i> Depreciation and Reporting
            </a>
        </li>
    </ul>
</div>

<!-- ২. মেইন কনটেন্ট এরিয়া -->
<div class="main-content">
    
    <!-- টপবার (Navbar) -->
    <div class="topbar">
        <div class="fw-semibold text-secondary">
            <i class="bi bi-calendar3 me-2"></i>{{ date('l, d F Y') }}
        </div>
        <div class="d-flex align-items-center gap-3">
            <div class="dropdown">
                <span class="fw-bold text-dark me-2">
                    <i class="bi bi-person-circle fs-5 me-1 text-primary"></i>
                    {{ auth()->user()->name ?? 'Admin' }}
                </span>
            </div>
            <!-- লগআউট বাটন -->
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-danger btn-sm">
                    <i class="bi bi-box-arrow-right"></i> Logout
                </button>
            </form>
        </div>
    </div>

    <!-- মূল পেজের কনটেন্ট এখানে বসবে -->
    <div class="content-body">
        @yield('content')
    </div>

</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>