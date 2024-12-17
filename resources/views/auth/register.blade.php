<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/image.png') }}">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/head_foot.css') }}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('assets/bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.0-web/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.0-web/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.4.0-web/css/solid.css') }}">
</head>

<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg border-0 overflow-hidden w-100" style="max-width: 800px;">
            <div class="row g-0">
                <!-- Sidebar Section -->
                <div class="col-md-5 bg-primary text-white d-flex flex-column align-items-center justify-content-center p-4">
                    <img src="{{ asset('assets/images/image.png') }}" alt="Logo" class="mb-4 img-fluid" style="max-width: 150px; border-radius: 50%;">
                    
                </div>
                <!-- Registration Form Section -->
                <div class="col-md-7 p-5">
                    <div class="text-center mb-4">
                        <h3 class="text-primary">Create an Account!</h3>
                    </div>
                    <form action="{{ route('register.save') }}" method="POST" class="user">
                        @csrf
                        <!-- Name Input -->
                        <div class="mb-3">
                            <input name="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleInputName" placeholder="Enter your name" required>
                            @error('name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Password and Confirmation -->
                        <div class="row">
                            <div class="col-sm-6 mb-3">
                                
                                <input name="password" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" id="exampleInputPassword" placeholder="Enter your password" required>
                                @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-sm-6 mb-3">
                           
                                <input name="password_confirmation" type="password" class="form-control form-control-user @error('password_confirmation') is-invalid @enderror" id="exampleRepeatPassword" placeholder="Confirm password" required>
                                @error('password_confirmation')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-user text-dark">Register Account</button>
                        </div>
                    </form>
                    <hr>
                    <div class="text-center mt-4">
                        <small>Already have an account? <a href="{{ route('login') }}" class="text-primary">Login</a></small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
