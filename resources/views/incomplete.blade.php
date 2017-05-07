@extends('layouts.app')

@section('content')
<?php
$count = 0;
?>
<div class="container">
@if(Session::has('message')) <div class="row" id="hideMe"><div class="alert alert-info col-md-6"> {{Session::get('message')}} </div></div>
@endif
<h2>Završeni događaji:</h2>
<hr><hr>
@foreach($tasks as $task)
@if($task->is_completed == true)
<?php
$count = 1;
$color = '#d3efff';
$link = '<a href="' . url('/tasks/') . '/' . $task->id . '/uncompleted">Označi kao nedovršeno</a>';
?>
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default" style="background-color: {{ $color }};">
                <div class="panel-heading" style="background-color: {{ $color }};"><a href="{!! url('/tasks/') !!}/{{$task->id}}">{{ $task->title }}</a><div style="float: right;text-align: right;color: gray;"><strong>{{ $task->created_at }}</strong></div></div>

                <div class="panel-body">
                    {{ $task->description }}
                </div>
                <div class="panel-footer" style="text-align: right;background-color: {{ $color }};">
                        {!! $link !!}
                     | <a href="{!! url('/tasks/edit/') !!}/{{ $task->id }}">Izmjeni</a> | <a href="{!! url('tasks/') !!}/{{ $task->id}}/delete">Izbriši</a>
                </div>
            </div>
        </div>
@else

@endif
@endforeach
@if($count < 1)
    Nema događaja.
@endif
</div>
@endsection
