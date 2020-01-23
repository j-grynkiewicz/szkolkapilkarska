@extends('layouts.app')

@section('content')
    <link href="{{ asset('css/circle.css') }}" rel="stylesheet">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Coach</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/coachList">Wróć</a><br>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", 'szkolkapilkarska');
                            if($conn-> connect_error) {
                                die("Connection failed:". $conn->connect_error);
                            }
                            $id = $_GET['id'];
                            $sql = "SELECT image, name, phone, email, description, licence from coaches WHERE id =".$id;
                            $result = $conn-> query($sql);
                            $row = $result-> fetch_assoc();
                            $img = $row["image"];
                            echo "<img src='" . $img . "' height='250px' >"."<br>"."<b>Imię: </b>".$row["name"]."<br>"."<b>Telefon: </b>".$row["phone"]."<br>"."<b>Email: </b>".$row["email"]."<br>"."<b>Opis: </b>".$row["description"]."<br>"."<b>Licencja: </b>".$row["licence"];
                            $conn-> close();
                            ?>

                </div>
            </div>
        </div>
    </div>
@endsection
