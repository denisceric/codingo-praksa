@extends('layouts.app')

@section('content')
<div class="container">
<h1>Dobro došli</h1>
<hr>
    <div class="row">
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Ovo je događaj.<div style="float: right;text-align: right;color: gray;">Datum kreiranja</div></div>

                <div class="panel-body">
                    Ovdje se nalazi opis događaja. Ovako izgleda događaj koji je aktivan.
                </div>
                <div class="panel-footer" style="text-align: right;">
                    Dostupne opcije: Označi kao završeno | Izmjeni | Izbriši
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">Ovo je događaj.<div style="float: right;text-align: right;color: gray;">Datum kreiranja</div></div>

                <div class="panel-body">
                    Ovdje se nalazi opis događaja. Ovako izgleda događaj koji je aktivan.
                </div>
                <div class="panel-footer" style="text-align: right;">
                    Dostupne opcije: Označi kao završeno | Izmjeni | Izbriši
                </div>
            </div>
        </div>
    </div>
@endsection