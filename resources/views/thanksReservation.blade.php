@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Payment</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/home">Wróć</a><br>
                            <div class="visible-print text-center">
                                Dziękujemy za dokonanie rezerwacji!
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
