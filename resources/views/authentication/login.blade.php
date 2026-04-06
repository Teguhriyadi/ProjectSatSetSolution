<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #4f46e5, #0ea5e9);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 400px;
            border-radius: 20px;
            padding: 30px;
            background: #fff;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .login-title {
            font-weight: 700;
        }

        .form-control {
            border-radius: 12px;
            padding: 10px 12px;
        }

        .btn-login {
            border-radius: 12px;
            padding: 10px;
            font-weight: 600;
        }

        .login-footer {
            font-size: 14px;
        }

        .login-footer a {
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>
<body>

    <div class="login-card">

        @if (session("success"))
            <div class="alert alert-success">
                <strong>Berhasil,</strong> {{ session('success') }}
            </div>
        @elseif(session("error"))
            <div class="alert alert-danger">
                <strong>Gagal,</strong> {{ session('error') }}
            </div>
        @endif

        <div class="text-center mb-4">
            <h3 class="login-title">Welcome Back 👋</h3>
            <p class="text-muted small">Login ke akun kamu</p>
        </div>

        <form method="POST" action="{{ url('/login') }}">
            @csrf
            <div class="mb-3">
                <label class="form-label" for="username">Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan Username">
            </div>

            <!-- PASSWORD -->
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan Password">
            </div>

            <!-- BUTTON -->
            <div class="d-grid mb-3">
                <button type="submit" class="btn btn-primary btn-login">
                    Login
                </button>
            </div>
        </form>
    </div>

</body>
</html>
