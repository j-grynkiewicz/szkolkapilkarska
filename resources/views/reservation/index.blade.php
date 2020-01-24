@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Reservation Data</h3>
            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <a href="/home">Wróć</a><br>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Date</th>
                    <th>Coach</th>
                    <th>Field</th>
                    <th>Places</th>
                    <th>Reserve</th>
                </tr>
                @foreach($training as $row)
                    <tr>
                        @if ($row['places'] > 0)
                            
                      
                        <td>{{$row['date']}}</td>
                        <td>{{$row['coach']}}</td>
                        <td>{{$row['field']}}</td>
                        <td>{{$row['places']}}</td>
                        <td><a href="{{action('ReservationController@edit', $row['id'])}}" class="btn btn-warning">Rezerwuj</a></td>
                        @endif
                    </tr>
                @endforeach
            </table>
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
