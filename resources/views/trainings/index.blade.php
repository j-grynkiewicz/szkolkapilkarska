@extends('master')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">Training Data</h3>
            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <a href="/admin">Wróć</a><br>
            <div align="right">
                <a href="{{route('trainings.create')}}" class="btn btn-primary">Add</a>
                <br />
                <br />
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Title</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($training as $row)
                    <tr>
                        <td>{{$row['title']}}</td>
                        <td>{{$row['date']}}</td>
                        <td><a href="{{action('TrainingController@edit', $row['id'])}}" class="btn btn-warning">Edytuj</a></td>
                        <td>
                            <form method="post" class="delete_form" action="{{action('TrainingController@destroy', $row['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Usuń</button>
                            </form>
                        </td>
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
