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
                            <img src="https://media.istockphoto.com/photos/playing-field-picture-id1130113414"><br>
                            Sport Plus specjalizuje się w wyposażaniu boisk piłkarskich oraz stadionów - szczególnie do piłki nożnej, koszykówki, piłki ręcznej oraz siatkówki. W szerokim wachlarzu produktów, oferujemy urządzenia najwyższej jakości, sprawdzone na wielu obiektach sportowych. W ofercie posiadamy sprzęt zarówno profesjonalny, treningowy, jak i amatorski.<br>
                            Bramki profesjonalne 7,32 x 2,44 m, bramki treningowe 7,32 x 2,44 i 5 x 2, oraz komplet siatek do bramek oraz kompletne wyposażenie boiska piłkarskiego. Od kabin dla zawodników rezerwowych, chorągiewek narożnych i sędziowskich, po wózki do kredowania oraz malowania linii boiskowych.<br>
                            Trybuny zewnętrzne systemowe (projektowane indywidualnie pod dany obiekt sportowy), maszty flagowe.<br>
                            Tunele teleskopowe na stadiony, mini boiska do piłki nożnej.<br>
                            Piłkochwyty, siatki osłonowe, ogrodzenia systemowe z siatki polietylenowej oraz polipropylenowej na słupach stalowych lub aluminiowych, wyznaczające obszar gry oraz chroniące otoczenie, jak i samych zawodników.<br>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
