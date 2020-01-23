@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Fields</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <a href="/home">Wróć</a><br>
                        <b>Boiska:</b><br>
                        <table>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "", 'szkolkapilkarska');
                            if($conn-> connect_error) {
                                die("Connection failed:". $conn->connect_error);
                            }

                            $sql = "SELECT id, name from fields";
                            $result = $conn-> query($sql);
                            if ($result-> num_rows > 0) {
                                while($row = $result-> fetch_assoc()){
                                    $id = $row["id"];
                                    $name = $row["name"];
                                    echo "<td><tr><a href='" . "/field?id=$id" . "'>" . $name . "</a></tr></td><br>";
                                }
                                echo "</table>";
                            }
                            else{
                                echo "0 results";
                            }
                            $conn-> close();
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
