@extends('layouts.app')

@section('content')
<div class="container">
Događaji:
<hr>
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

</div>
@endsection
