<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hi Valeeqa</title>

    <link rel="apple-touch-icon" href="{{ asset('img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body class="bg-light">
<div class="container d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="card bg-white border border-white px-5 py-5 w-50" style="border-radius: 2rem">
        <div class="card-body">
            <h6 class="text-uppercase d-flex align-items-center">
                <img src="{{ asset('img/hi-valeeqa.png') }}" class="float-left me-2" alt="Hi Valeeqa"
                     style="height: 1rem">
                Hi Valeeqa
            </h6>
            <h2 class="my-4 text-pink">Reset Password</h2>
            <form action="{{ url('reset-password').'?t='.$token }}" method="post" onsubmit="return checkPassword()">
                <div id="alert">
                    @if(!isset($status) || $status !== 'success')
                        <div class="alert alert-danger">Kode token tidak sesuai</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Password Baru</label>
                    <input type="password" class="form-control" id="newPassword"
                           name="newPassword"
                           {{ $status == 'success' ? 'required' : 'disabled' }} onfocus="removeAlert()">
                </div>
                <div class="mb-3">
                    <label for="confirmPassword" class="form-label">Ulangi Password</label>
                    <input type="password" class="form-control" id="confirmPassword"
                           name="confirmPassword"
                           {{ $status == 'success' ? 'required' : 'disabled' }} onfocus="removeAlert()">
                </div>
                <div class="d-grid mb-5">
                    <button type="submit" class="btn btn-pink btn-lg" {{ $status == 'success' ? '' : 'disabled' }}>
                        Reset
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="{{ mix('js/app.js') }}"></script>
<script>
    const alert = document.getElementById('alert');

    const checkPassword = () => {
        const pwd = document.getElementById('newPassword').value;
        const pwdC = document.getElementById('confirmPassword').value;

        if (pwd === pwdC) {
            return true
        } else {
            alert.innerHTML = '<div class="alert alert-danger">Password tidak sesuai.</div>'
            return false
        }
    }

    const removeAlert = () => {
        alert.innerHTML = ''
    }
</script>
</body>

</html>
