@extends('user/layout.template')

@section('content')
    
    <section class="transaction my-5">
        <div class="container">
            <div class="row">

                @include('user/account.sidebar')
    
                <div class="col-lg-10 ps-5">
                    <div class="card border-radius-1 p-4">
                        <div class="card-body">
                            ini Alamat
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection