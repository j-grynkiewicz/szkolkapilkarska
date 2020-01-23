@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Settings</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/home">Wróć</a><br>
                            <button type="button" class="btn btn-primary" onclick="location.href='{{ url('/change-password') }}'">
                                {{ __('Zmień Hasło') }}
                            </button><br>
                            <form method="post" class="delete_form" action="{{action('DestroyController@destroy', $id = Auth::id())}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Usuń konto</button>
                            </form>
                </div>
            </div>
        </div>
    </div>
        <script>
            $(document).ready(function(){
                $('.delete_form').on('submit', function(){
                    if(confirm("Are you sure you want to delete it?"))
                    {
                        return true;
                    }
                    else
                    {
                        return false;
                    }
                });
            });
        </script>
@endsection
