@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Field</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/fieldList">Wróć</a><br>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", 'szkolkapilkarska');
                        if($conn-> connect_error) {
                            die("Connection failed:". $conn->connect_error);
                        }
                        $id = $_GET['id'];
                        $sql = "SELECT image, name, description, location from fields WHERE id =".$id;
                        $result = $conn-> query($sql);
                        $row = $result-> fetch_assoc();
                        $img = $row["image"];
                        echo "<img src='" . $img . "' height='250px' >"."<br>"."<b>Nazwa: </b>".$row["name"]."<br>".$row["description"]."<br>"."<b>Lokalizacja: </b>".$row["location"];
                        $conn-> close();
                        ?>

                    </div>
                </div>
            </div>
        </div>
@endsection
