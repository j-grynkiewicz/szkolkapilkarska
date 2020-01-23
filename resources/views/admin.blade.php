@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Panel</div>

                    <div class="card-body">
                        <a href="/home">Wróć</a><br>
                        <a href="/users">Zarządzanie Użytkownikami</a><br>
                        <a href="/coaches">Zarządzanie Trenerami</a><br>
                        <a href="/fields">Zarządzanie Boiskami</a><br>
                        <a href="/trainings">Zarządzanie Treningami</a><br>
                    </div>
                </div>
            </div>
        </div>
@endsection
