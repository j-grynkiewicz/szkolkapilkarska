@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Delete Account</div>
                    <?php
                    $id = Auth::id();
                    User::destroy($id);
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
