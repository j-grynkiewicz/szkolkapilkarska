@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Card</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/payment">Wróć</a><br>
                        nr konta: 1234 5678 9828 2132 0000 000
                        <br>
                        <?php
                        $user = Auth::user();
                        $first_name=$user->first_name;
                        $surname=$user->surname;
                        $code = Str::random(12);
                        ?>
                        Tytuł przelewu/numer rezerwacji:<?php echo $code; ?><br>
                        Imie:xxxxxx<br>
                        Nazwisko:xxxxxx<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
