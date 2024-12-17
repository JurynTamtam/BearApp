<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login || J&R Shop</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/image.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.0-web/css/all.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="bg-light">


    <!-- Login Section -->
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row w-100">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg border-0 overflow-hidden">
                    <div class="row g-0">
                        <!-- Sidebar Section -->
                        <div class="col-md-5 bg-primary text-white d-flex flex-column align-items-center justify-content-center p-4">
                            <img src="{{ asset('assets/images/image.png') }}" alt="J&R Shop Logo" class="mb-4 img-fluid" style="max-width: 120px; border-radius: 50%;">
                            <h4>Welcome Admin!</h4>
                            <p class="text-center mt-3">Manage shop easily and securely with J&R Shop's Admin Panel.</p>
                            <img src="{{ asset('assets/images/bear.jpg') }}" alt="Welcome Image" class="img-fluid mt-3" style="border-radius: 10px; max-width: 120px;">
                        </div>
                        <!-- Login Form Section -->
                        <div class="col-md-7 p-5">
                            <h3 class="text-center mb-4 text-primary">Admin Login</h3>
                            <form action="{{ route('login.action') }}" method="post">
                                @csrf
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="mb-3">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                            <div class="text-center mt-4">
                            <small class="text-muted">No account, register here</small>
                            <a href="{{ route('register') }}">Register</i></a><br>
                                <small class="text-muted">© 2024 J&R Shop. All Rights Reserved.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('assets/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
