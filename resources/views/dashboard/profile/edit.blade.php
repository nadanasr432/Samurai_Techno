@extends('dashboard.layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Edit Profile</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ old('name', $user->name) }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" value="{{ old('email', $user->email) }}" required>
            @error('email')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group password-field">
            <label for="password">New Password (optional)</label>
            <div class="input-group">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter new password">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-eye-slash" id="toggle-password"></i>
                    </span>
                </div>
            </div>
            @error('password')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group password-field">
            <label for="password_confirmation">Confirm New Password</label>
            <div class="input-group">
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm new password">
                <div class="input-group-append">
                    <span class="input-group-text">
                        <i class="fa fa-eye-slash" id="toggle-password-confirmation"></i>
                    </span>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>

<script>
    document.getElementById('toggle-password').addEventListener('click', function () {
        const passwordField = document.getElementById('password');
        const icon = this;
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });

    document.getElementById('toggle-password-confirmation').addEventListener('click', function () {
        const passwordConfirmationField = document.getElementById('password_confirmation');
        const icon = this;
        if (passwordConfirmationField.type === 'password') {
            passwordConfirmationField.type = 'text';
            icon.classList.remove('fa-eye-slash');
            icon.classList.add('fa-eye');
        } else {
            passwordConfirmationField.type = 'password';
            icon.classList.remove('fa-eye');
            icon.classList.add('fa-eye-slash');
        }
    });
</script>
@endsection
