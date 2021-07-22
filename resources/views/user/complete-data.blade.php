<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Hi Valeeqa</title>

    <link rel="apple-touch-icon"
          href="{{ asset('img/apple-icon.png') }}">
    <link rel="shortcut icon"
          type="image/x-icon"
          href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet"
          href="{{ mix('css/app.css') }}">
    <style>
        @media screen and (min-width: 992px) {
            #completeData {
                width: 75%
            }
        }

        @media screen and (min-width: 768px) and (max-width: 991px) {
            #completeData {
                width: 75%
            }
        }

        @media screen and (max-width: 767px) {
            #completeData {
                width: 100%
            }
        }

    </style>
</head>

<body class="bg-light">
    <section class="complete-data">
        <div class="container d-flex justify-content-center align-items-center"
             style="min-height: 70vh">
            <div class="card border border-2 border-light border-radius-1 my-5 p-lg-5 p-3"
                 id="completeData">
                <div class="card-body">
                    <h3 class="card-title text-center mb-5">Lengkapi Data Diri</h3>
                    <form action="{{ url('complete-data') }}"
                          method="post">
                        <div class="mb-3">
                            <label for="fullname"
                                   class="form-label">Nama Lengkap</label>
                            <input type="text"
                                   id="fullname"
                                   readonly
                                   value="{{ session()->get('name') }}"
                                   class="form-control w-75">
                        </div>
                        <div class="mb-3">
                            <label for="email"
                                   class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   id="email"
                                   class="form-control w-75"
                                   readonly
                                   value="{{ session()->get('email') }}">
                        </div>
                        <label for="nohp"
                               class="form-label">Nomor Hp</label>
                        <div class="input-group w-50 mb-3">
                            <span class="input-group-text"
                                  id="noHp">+62</span>
                            <input type="text"
                                   name="whatsapp"
                                   id="nohp"
                                   class="form-control"
                                   placeholder="81xxxxxxxxx"
                                   aria-label="Username"
                                   aria-describedby="noHp" required>
                        </div>
                        <div class="mb-3">
                            <label for="gender"
                                   class="form-label">Jenis Kelamin</label>
                            <select name="gender"
                                    id="gender"
                                    class="form-select w-50" required>
                                <option selected>Pilih Jenis Kelamin</option>
                                <option value="L">Pria</option>
                                <option value="P">Wanita</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="provinsi"
                                   class="form-label">Provinsi</label>
                            <input type="text"
                                   name="province"
                                   id="provinsi"
                                   class="form-control w-75" required>
                        </div>
                        <div class="mb-3">
                            <label for="kabupaten"
                                   class="form-label">Kabupaten</label>
                            <input name="city"
                                   id="kabupaten"
                                   class="form-control w-75" required>
                        </div>
                        <div class="mb-3">
                            <label for="kecamatan"
                                   class="form-label">Kecamatan</label>
                            <input name="district"
                                   id="kecamatan"
                                   class="form-control w-75" required>
                        </div>
                        <div class="mb-3">
                            <label for="desa"
                                   class="form-label">Desa</label>
                            <input name="village"
                                   id="desa"
                                   class="form-control w-75" required>
                        </div>
                        <div class="mb-3">
                            <label for="postalCode">Kode Pos</label>
                            <input type="text"
                                   name="postalCode"
                                   id="postalCode"
                                   class="form-control w-50" required>
                        </div>
                        <div class="mb-3">
                            <label for="alamatLengkap"
                                   class="form-label">Alamat Lengkap</label>
                            <textarea name="address"
                                      id="alamatLengkap"
                                      class="form-control"
                                      rows="3"
                                      placeholder="Misal: Jl. Mastrip 5 No. 7, Depan Mie Ayam Pak To" required></textarea>
                        </div>
                        <button class="btn-pink btn" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
