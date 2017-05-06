@extends('layouts.app')

@section('content')
<div class="container">
<h1>Dobro došli, 
@if (!Auth::guest())
{{Auth::user()->name}}!</h1>
<hr>
@foreach($tasks as $task)
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $task->title }} <div style="float: right;text-align: right;color: gray;">{{ $task->created_at }}</div></div>

                <div class="panel-body">
                    {{ $task->description }}
                </div>
                <div class="panel-footer" style="text-align: right;">
                    <a href="#">Označi kao završeno</a> | <a href="#">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
@endforeach


@else
<hr>
Ovdje možete napraviti dnevnik rada.
@endif
</div>
@endsection