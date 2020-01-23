@extends('master')
<?php 
use App\Field;
use App\Coach;
$coaches = Coach::select('id', 'name')->get();
$fields = Field::select('id', 'name')->get();
?>

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
            <a href="/trainings">Wróć</a><br>
            <form method="post" action="{{url('trainings')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Enter Title" />
                </div>
                <div class="form-group">
                <select name="coach" class="form-control">
                @foreach($coaches as $coaches)
                    <option name="coach">{{$coaches->name}}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                <select name="field" class="form-control">
                @foreach($fields as $fields)
                    <option name="field">{{$fields->name}}</option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                    <input type="datetime-local" name="date" class="form-control" placeholder="Enter Date" />
                </div>
                
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Dodaj" />
                </div>
            </form>
        </div>
    </div>
@endsection
