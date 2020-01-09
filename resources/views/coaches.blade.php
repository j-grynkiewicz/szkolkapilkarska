@extends('layouts.app')

@section('content')
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
                        <a href="/home">Wróć</a><br>
                            <img src="https://scontent.fpoz1-1.fna.fbcdn.net/v/t1.0-9/78789699_2609739915730142_776695748300374016_n.jpg?_nc_cat=108&_nc_ohc=sOgMgW0sRAoAQlkfoxfE1_wlQmhxS01cPvPY5Mu2xvvLMB8n99GOoF1Cw&_nc_ht=scontent.fpoz1-1.fna&oh=d66e7c9d762a02f8e2eecf2a5026a725&oe=5E978A3A" style="width:82px; height:86px" title="White flower" alt="Flower"><br>
                            IMIE NAZWISKO: TRENER A<br>
                            NR TELEFONU: 123-456-789<br>
                            EMAIL: 1235@abc.pl<br>
                            LICENCJA: UEFA PRO A<br>
                            <br>
                            <img src="https://scontent.fpoz1-1.fna.fbcdn.net/v/t1.0-9/80892964_2162278773874709_4572202491449442304_n.jpg?_nc_cat=103&_nc_ohc=nQ-DqnFeQ2YAQnGKXWQtVFYFto2TOTn7uDyfJqA9vdlNC3M8tfdWPP0kQ&_nc_ht=scontent.fpoz1-1.fna&oh=bdcc89549b3a8a4b298f93ae7220feec&oe=5E92B781" style="width:82px; height:86px" title="White flower" alt="Flower"><br>
                            IMIE NAZWISKO: TRENER B<br>
                            NR TELEFONU: 123-422-789<br>
                            EMAIL: 1232225@abc.pl<br>
                            LICENCJA: UEFA PRO B<br>
                            <br>
                            <img src="https://scontent.fpoz1-1.fna.fbcdn.net/v/t1.0-9/46498402_2261252950574917_8928512700804235264_n.jpg?_nc_cat=102&_nc_ohc=kTH08vhUWfIAQnhLUsB7u1MHsZUFEZGdZnccvqoIu137xvDP-Lm6Zva5A&_nc_ht=scontent.fpoz1-1.fna&oh=155b665d79ab08f41761e3e0adac21d8&oe=5E9754F3" style="width:82px; height:86px" title="White flower" alt="Flower"><br>
                            IMIE NAZWISKO: TRENER c<br>
                            NR TELEFONU: 555-456-789<br>
                            EMAIL: 12asdas35@abc.pl<br>
                            LICENCJA: UEFA PRO C<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
