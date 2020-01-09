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

                    You are logged in!<br>
                        <a href="/payment">Płatność</a><br>
                        <a href="/coaches">Lista trenerów</a><br>
                        <a href="/fields">Boiska</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
