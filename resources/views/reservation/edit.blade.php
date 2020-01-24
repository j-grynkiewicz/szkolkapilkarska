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
                    <a href="/reservation">Wróć</a><br>
                    <form method="post" action="{{action('ReservationController@update', $id)}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PATCH" />
                        <div class="form-group">
                            <b>Liczba miejc: </b>
                            <input type="number" name="places" class="form-control" max="{{$training->places}}" placeholder="000" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Zarezerwuj" />
                        </div>
                        <div class="form-group">
               
                </select>
                </div>
                    </form>
                </div>
        </div>

@endsection
