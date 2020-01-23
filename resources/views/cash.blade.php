@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/payment">Wróć</a><br>
                            <i>Dane rezerwacji:xxxx</i><br>
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ url('/qrcash') }}'">
                                {{ __('Potwierdź rezerwacje') }}
                            </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
