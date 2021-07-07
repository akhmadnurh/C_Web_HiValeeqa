@extends('user/layout.template')

@section('content')

    <section class="change-password my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')

                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">
                            <h3>Ubah Password</h3>
                            <div class="hv-garis mb-4"></div>
                            <form action="{{ url('change-password') }}" method="post" onsubmit="return passwordValidation()">
                                <div id="alert">
                                    @if(session()->has('status'))
                                        <div
                                            class="alert {{ session()->get('status') == 'success' ? 'alert-success' : 'alert-danger' }}">{{ session()->get('msg') }}</div>
                                        {{ session()->forget(['status', 'msg']) }}
                                    @endif
                                </div>
                                <div class="row mb-3">
                                    <label for="passwordNow" class="col-sm-3 col-form-label">Password Saat Ini</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control w-75" id="passwordNow" name="passwordNow" onfocus="removeAlert()">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="newPassword" class="col-sm-3 col-form-label">Password Baru</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control w-75" id="newPassword" name="newPassword" onfocus="removeAlert()">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="newPasswordConfirm" class="col-sm-3 col-form-label">Ulangi Password Baru</label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control w-75" id="newPasswordConfirm" name="newPasswordConfirm" onfocus="removeAlert()">
                                    </div>
                                </div>
                                <button class="btn btn-pink" type="submit">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <script>
        alert = document.getElementById('alert')

        const passwordValidation = () => {
            pwd = document.getElementById('newPassword').value
            pwdC = document.getElementById('newPasswordConfirm').value

            if (pwd !== pwdC) {
                alert.innerHTML = "<div class='alert alert-danger'>Password baru tidak cocok.</div>"
                return false
            } else {
                return true
            }
        }

        const removeAlert = () => {
            alert.innerHTML = ""
        }
    </script>

@endsection
