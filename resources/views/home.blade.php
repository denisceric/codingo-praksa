@extends('layouts.app')

@section('content')
<div class="container">
<h1>Dobro došli, 
@if (!Auth::guest())
{{Auth::user()->name}}!</h1>
<hr>
    <div class="row">
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="">asd</a><div style="float: right;text-align: right;color: gray;">dsa</div></div>

                <div class="panel-body">
                    ccc
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
    </div>

@else
<hr>
Ovdje možete napraviti dnevnik rada.
@endif
</div>
@endsection