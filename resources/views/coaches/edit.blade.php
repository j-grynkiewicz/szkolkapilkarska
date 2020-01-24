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
                    <a href="/coaches">Wróć</a><br>
                    <form method="post" action="{{action('CoachController@update', $id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="form-group">
                            <input type="text" name="image" class="form-control" value="{{$coach->image}}" placeholder="Enter Image Ure" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{$coach->name}}" placeholder="Enter Full Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" value="{{$coach->phone}}" placeholder="Enter Phone Number" />
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" value="{{$coach->email}}" placeholder="Enter Email" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="description" class="form-control" value="{{$coach->description}}" placeholder="Enter Description" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="licence" class="form-control" value="{{$coach->licence}}" placeholder="Enter Licence Type" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Edit" />
                        </div>
                    </form>
                </div>
        </div>

@endsection
