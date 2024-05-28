<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('assets/cs/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cs/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cs/login.css') }}">
</head>

<body>
    <section>
        <div class="login-box">
            <form action="{{ route('login.login') }}" method="POST">
                @csrf
                <h2>log in</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" >
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon>
                    </span>
                    <input type="password" name="password" >
                    <label>password</label>
                </div>
                <div class="remember-me">
                    <label> <input type="checkbox">remember me</label>
                </div>
                <button type="submit">login</button>
                <div class="register-link">
                    <p>Don't have an account ? <a href="{{ route('register.index') }}">Register</a></p>
                </div>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
