<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Asset Management System</title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-card {
            background: #ffffff;
            border-radius: 14px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 420px;
            padding: 35px;
        }
        .brand-icon {
            width: 60px;
            height: 60px;
            background: #e0e7ff;
            color: #4338ca;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin: 0 auto 15px;
        }
        .btn-custom {
            background: #4338ca;
            color: #ffffff;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-weight: 600;
        }
        .btn-custom:hover {
            background: #3730a3;
            color: #ffffff;
        }
    </style>
</head>
<body>

<div class="login-card">
    <!-- Logo & Title -->
    <div class="text-center mb-4">
        <div class="brand-icon">
            <i class="bi bi-box-seam-fill"></i>
        </div>
        <h4 class="fw-bold text-dark">Asset Management</h4>
        <p class="text-muted small">Enter your details to log in</p>
    </div>

    <!-- Error Display -->
    @if(session('error'))
        <div class="alert alert-danger py-2 small text-center">
            <i class="bi bi-exclamation-circle-fill me-1"></i> {{ session('error') }}
        </div>
    @endif

    <!-- Form -->
    <form action="{{ route('login.post') }}" method="POST">
        
        {{-- CSRF Token: This is mandatory for security --}}
        @csrf

        <!-- Email Field -->
        <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">LOGIN</label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" 
                       value="{{ old('email') }}" placeholder="nub@gmail.com" required autofocus>
            </div>
            @error('email')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password Field -->
        <div class="mb-3">
            <label class="form-label small fw-semibold text-secondary">Password</label>
            <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-shield-lock"></i></span>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" 
                       placeholder="••••••••" required>
            </div>
            @error('password')
                <div class="text-danger small mt-1">{{ $message }}</div>
            @enderror
        </div>

        <!-- Remember Me Checkbox -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div class="form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label small text-secondary" for="remember">Remember Me</label>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="d-grid">
                <button type="submit" class="btn btn-custom">
                <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
            </button>
        </div>
    </form>
</div>

</body>
</html>