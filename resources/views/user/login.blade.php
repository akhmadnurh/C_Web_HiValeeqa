<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi Valeeqa</title>

    <link rel="apple-touch-icon" href="{{ asset('img/apple-icon.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico')}}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-light">
    <div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="card bg-white border border-white px-5 py-5" style="border-radius: 2rem">
            <div class="card-body">
                <div class="row">
                    <div class="d-none d-lg-inline col-lg-7">
                        <img src="{{ asset('img/window-shop.svg')}}" alt="Masuk Akun" class="img-fluid w-75">
                    </div>
                    <div class="col-12 col-lg-5">
                        <h6 class="text-uppercase d-flex align-items-center">
                            <img src="{{ asset('img/hi-valeeqa.png')}}" class="float-left me-2" alt="Hi Valeeqa"
                                style="height: 1rem">
                            Hi Valeeqa
                        </h6>
                        <h2 class="my-4 text-pink">Login</h2>
                        <form action="{{ url('login') }}" method="POST">
                            @if(session()->has('status'))
                                <div class="alert {{ session('status') == 'success' ? 'alert-success' : 'alert-danger' }}">{{ session('msg') }}</div>
                            @endif
                            <div class="mb-3">
                                <input type="text" class="form-control" id="userEmail" name="userEmail"
                                    placeholder="Username/Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                            <div class="mb-3 {{ session()->has('status') && session('status') == 'error-email' ? 'justify-content-between' : 'justify-content-end' }} d-flex">
                                @if(session()->has('status') && session('status') == 'error-email')
                                    <a href="{{ url('/resend-email-token').'?email='.session('email') }}" class="text-pink">Kirim ulang kode</a>
                                    {{ session()->forget(['status', 'msg', 'email']) }}
                                @endif
                                <a href="{{ url('/forgot-password') }}" class="text-pink">Lupa Password?</a>
                            </div>
                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-pink btn-lg">Masuk</button>
                            </div>
                        </form>
                        <div class="d-grid">
                            <a href="{{ url('/') }}" class="btn btn-light btn-lg">Back to Home</a>
                        </div>
                        <div class="d-flex justify-content-center align-items-center mt-5">
                            Belum Punya Akun? <a href="{{ url('/register') }}" class="text-pink ms-1">Daftar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
