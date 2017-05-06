@extends('layouts.app')

@section('content')
<div class="container">
@if(Session::has('message')) <div class="row" id="hideMe"><div class="alert alert-info col-md-6"> {{Session::get('message')}} </div></div>
@endif
<div class="row"><div class="alert alert-sucess col-md-6">Događaj:</div></div>
<hr>
@if($task->is_completed == true)
<?php
$color = '#d3efff';
$link = '<a href="' . url('/tasks/') . '/' . $task->id . '/uncompleted">Označi kao nedovršeno</a>';
?>
@else
<?php
$link = '<a href="' . url('/tasks/') . '/' . $task->id . '/completed">Označi kao završeno</a>';
$color = '#d7ffd1';
    ?>
@endif
        <div class="col-md-10 col-md-offset-0">
            <div class="panel panel-default" style="background-color: {{ $color }};">
                <div class="panel-heading" style="background-color: {{ $color }};">{{ $task->title }} <div style="float: right;text-align: right;color: gray;">{{ $task->created_at }}</div></div>

                <div class="panel-body">
                    {{ $task->description }}
                </div>
                <div class="panel-footer" style="text-align: right;background-color: {{ $color }};">
                    {!! $link !!} | <a href="{!! url('/tasks/edit/') !!}/{{ $task->id }}">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>

</div>
@endsection
