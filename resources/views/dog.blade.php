@extends('layouts.app')

@section('content')
<div class="container">
<h1>Tutorijal</h1>
<hr>
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default" style="background-color: #d7ffd1;">
                <div class="panel-heading" style="background-color: #d7ffd1;"><a href="#">Ovo je naslov događaja</a><div style="float: right;text-align: right;color: gray;"><strong>Datum kreiranja</strong></div></div>

                <div class="panel-body">
                    Ovdje se nalazi opis događaja.
                </div>
                <div class="panel-footer" style="text-align: right;background-color: #d7ffd1;">
                     <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default" style="background-color: #d3efff;">
                <div class="panel-heading" style="background-color: #d3efff;"><a href="#">Ovo je aktivni događaj</a><div style="float: right;text-align: right;color: gray;"><strong>Datum kreiranja</strong></div></div>

                <div class="panel-body">
                    Završeni događaji su plave boje, a aktivni su zelene.
                </div>
                <div class="panel-footer" style="text-align: right;background-color: #d3efff;">
                     <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
@endsection