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
                    <a href="/fields">Wróć</a><br>
                    <form method="post" action="{{action('FieldController@update', $id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="form-group">
                            <input type="text" name="image" class="form-control" value="{{$field->image}}" placeholder="Enter Image Ure" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" value="{{$field->name}}" placeholder="Enter Name" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="description" class="form-control" value="{{$field->description}}" placeholder="Enter Description" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="location" class="form-control" value="{{$field->location}}" placeholder="Enter Location" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Edit" />
                        </div>
                    </form>
                </div>
        </div>

@endsection
