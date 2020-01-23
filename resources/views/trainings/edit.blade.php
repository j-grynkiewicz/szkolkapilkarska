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
                    <a href="/trainings">Wróć</a><br>
                    <form method="post" action="{{action('TrainingController@update', $id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" value="{{$training->title}}" placeholder="Enter Image Ure" />
                        </div>
                        <div class="form-group">
                            <select name="coach" class="form-control">
                                @foreach($coaches as $coaches)
                                     <option value="{{$training->coach}}" name="coach">{{$coaches->name}}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="form-group">
                        <select name="field" class="form-control">
                                @foreach($fields as $fields)
                                     <option value="{{$training->field}}" name="field">{{$fields->name}}</option>
                                @endforeach
                             </select>
                        </div>
                        <div class="form-group">
                            <input type="datetime-local" name="date" class="form-control" value="{{$training->date}}" placeholder="Enter Date" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Zapisz" />
                        </div>
                        <div class="form-group">
               
                </select>
                </div>
                    </form>
                </div>
        </div>

@endsection
