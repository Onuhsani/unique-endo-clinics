<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password - UniqueEndo Admin</title>
    <link href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="col-md-4 mx-auto card p-4 shadow-sm">
        <h4 class="mb-3 text-center">Reset Password</h4>
        @if(session('status')) <div class="alert alert-success">{{ session('status') }}</div> @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="mb-3">
                <label>Email Address</label>
                <input type="email" name="email" class="form-control" required>
                @error('email') <small class="text-danger">{{ $message }}</small> @enderror
            </div>
            <button class="btn btn-primary w-100">Send Reset Link</button>
            <p class="mt-3 text-center">
                <a href="{{ route('login') }}">Back to Login</a>
            </p>
        </form>
    </div>
</div>
</body>
</html>
