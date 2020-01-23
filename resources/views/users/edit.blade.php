@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3>Edit Record</h3>
            <br />
            @if(count($errors) > 0)

                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                    @endif
                    <a href="/users">Wróć</a><br>
                    <form method="post" action="{{action('UserController@update', $id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="form-group">
                            <input type="text" name="first_name" class="form-control" value="{{$user->first_name}}" placeholder="Enter First Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="surname" class="form-control" value="{{$user->surname}}" placeholder="Enter Surname" />
                        </div>

                        <div class="form-group">
                            <input type="text" name="isAdmin" class="form-control" value="{{$user->isAdmin}}" placeholder="Is Admin? (1 for yes)" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Edit" />
                        </div>
                    </form>
                </div>
        </div>

@endsection
