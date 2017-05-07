@extends('admin.allusers')

@section('content')
            @foreach($users2 as $user2)
            <h3>Osnovni podaci o korisniku:</h3>
                <h4>Ime: {{$user2->name}}</h4>
                <h4>E-mail: {{$user2->email}}</h4>
            @endforeach
            <hr>
            <h3> Događaji korisnika: </h3>
@foreach($tasks as $task)
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
        <div class="col-md-5 col-md-offset-0">
            <div class="panel panel-default" style="background-color: {{ $color }};">
                <div class="panel-heading" style="background-color: {{ $color }};">{{ $task->title }}<div style="float: right;text-align: right;color: gray;"><strong>{{ $task->created_at }}</strong></div></div>

                <div class="panel-body">
                    {{ $task->description }}
                </div>
            </div>
        </div>
@endforeach
@endsection
