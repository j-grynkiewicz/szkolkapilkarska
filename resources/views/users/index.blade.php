@extends('master')


@section('content')

    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 align="center">User Data</h3>
            <br />
            @if($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{$message}}</p>
                </div>
            @endif
            <a href="/admin">Wróć</a><br>
            <div align="right">
                <a href="{{route('users.create')}}" class="btn btn-primary">Add</a>
                <br />
                <br />
            </div>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>First Name</th>
                    <th>Surname</th>
                    <th>Email Address</th>
                    <th>Admin</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach($user as $row)
                    <tr>
                        <td>{{$row['first_name']}}</td>
                        <td>{{$row['surname']}}</td>
                        <td>{{$row['email']}}</td>
                        <td>{{$row['isAdmin']}}</td>
                        <td><a href="{{action('UserController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
                        <td>
                            <form method="post" class="delete_form" action="{{action('UserController@destroy', $row['id'])}}">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE" />
                                <button type="submit" class="btn btn-danger">Delete</button>
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
