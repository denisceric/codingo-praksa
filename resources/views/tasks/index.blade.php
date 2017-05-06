@extends('layouts.app')

@section('content')
<div class="container">
<h2>Događaji:</h2>
<hr>
@foreach($tasks as $task)
@if($task->is_completed == true)
<?php $color = '#d3efff'; ?>
@else
<?php $color = '#d7ffd1'; ?>
@endif
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default" style="background-color: {{ $color }};">
                <div class="panel-heading" style="background-color: {{ $color }};">{{ $task->title }} <div style="float: right;text-align: right;color: gray;">{{ $task->created_at }}</div></div>

                <div class="panel-body">
                    {{ $task->description }}
                </div>
                <div class="panel-footer" style="text-align: right;background-color: {{ $color }};">
                    <a href="#">Označi kao završeno</a> | <a href="{!! url('/tasks/edit/') !!}/{{ $task->id }}">Izmjeni</a> | <a href="#">Izbriši</a>
                </div>
            </div>
        </div>
@endforeach

</div>
@endsection
