@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Training</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/trainingList">Wróć</a><br>
                        <?php
                        $conn = mysqli_connect("localhost", "root", "", 'szkolkapilkarska');
                        if($conn-> connect_error) {
                            die("Connection failed:". $conn->connect_error);
                        }
                        $id = $_GET['id'];
                        $sql = "SELECT title, coach, field, date from trainings WHERE id =".$id;
                        $result = $conn-> query($sql);
                        $row = $result-> fetch_assoc();
                        echo "<b>Nazwa: </b>".$row["title"]."<br>"."<b>Trener: </b>".$row["coach"]."<br>"."<b>Boisko: </b>".$row["field"]."<br>"."<b>Data i godzina: </b>".$row["date"];
                        $conn-> close();
                        ?>

                    </div>
                </div>
            </div>
        </div>
@endsection
