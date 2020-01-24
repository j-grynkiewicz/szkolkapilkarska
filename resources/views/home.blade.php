@extends('layouts.app')

@section('content')
<body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <?php if(auth()->user()->isAdmin == 1){?>
                        <div class=”panel-body”>
                            <a href="{{url('admin')}}">Admin</a></div>
                        <?php }
                        else echo '';?>
                        <div class="panel-heading">
                          
                            <a href="/coachList">Lista trenerów</a><br>
                            <a href="/fieldList">Boiska</a><br>
                            <a href="/trainingList">Treningi</a>

                        </div>

                </div>
            </div>
        </div>
    </div>
</div>
</body>

@endsection
