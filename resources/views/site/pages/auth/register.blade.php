<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/cs/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cs/register.css') }}">
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    <section>
        <div class="login-container">
            <form action="{{ route('register.register') }}" method="POST">
                @csrf
                <h2>Register</h2>
                <div class="input-container">
                    <input type="text" name="name" value="{{ old('name') }}" required>
                    <label>Name</label>
                </div>
                <div class="input-container">
                    <input type="email" name="email" value="{{ old('email') }}" required>
                    <label>Email</label>
                </div>
                <div class="input-container">
                    <input type="text" name="phone" value="{{ old('phone') }}" required>
                    <label>Phone number</label>
                </div>
                <div class="input-container">
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-container">
                    <input type="password" name="password_confirmation" required>
                    <label>Confirm Password</label>
                </div>
                <button type="submit"> Register</button>
                <div class="register-link">
                    <p>have an account ? <a href="{{ route('login.index') }}">Login</a></p>
                </div>
            </form>
        </div>
    </section>
</body>

</html>
