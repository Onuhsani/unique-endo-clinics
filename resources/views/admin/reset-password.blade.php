<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password - UniqueEndo Admin</title>
    <link href="{{ asset('bower_components/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-4 mx-auto card p-4 shadow-sm">
        <h4 class="mb-3 text-center">Reset Password</h4>

        @if($errors->any())
            <div class="alert alert-danger">{{ $errors->first() }}</div>
        @endif

        <form method="POST" action="{{ route('password.update') }}">
            @csrf
            <input type="hidden" name="token" value="{{ $token }}">
            <input type="hidden" name="email" value="{{ $email }}">

            <div class="mb-3">
                <label>New Password</label>
                <input type="password" name="password" class="form-control" placeholder="New password" required>
            </div>

            <div class="mb-3">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password" required>
            </div>

            <button class="btn btn-primary w-100">Reset Password</button>
        </form>
    </div>
</div>

</body>
</html>
