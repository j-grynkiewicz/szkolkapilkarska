@extends('master')


@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 aling="center">Add Data</h3>
            <br />
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif
            <a href="/coaches">Wróć</a><br>
            <form method="post" action="{{url('coaches')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="url" name="image" class="form-control" placeholder="Enter Image URL" />
                </div>
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Enter Full Name" />
                </div>
                <div class="form-group">
                    <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" />
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Enter Email Address" />
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" placeholder="Enter Description" />
                </div>
                <div class="form-group">
                    <input type="text" name="licence" class="form-control" placeholder="Enter Licence Type" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
        </div>
    </div>
@endsection
