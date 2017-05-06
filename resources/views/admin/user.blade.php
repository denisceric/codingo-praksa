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
    <div class="row">
        <div class="col-md-10 col-md-offset-0">
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
    </div>
@endforeach
@endsection
