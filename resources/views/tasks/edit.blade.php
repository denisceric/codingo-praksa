@extends('layouts.app')

@section('content')
@foreach($tasks as $task)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Izmjeni događaj</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/tasks/edit/task/{{ $task->id}}">
                    {{ csrf_field() }}
                    {!! method_field('patch') !!}
                        <div class="form-group">
                            <label for="title" class="col-md-4 control-label">Naslov</label>
                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control" name="title" value="{{ $task->title}}" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-md-4 control-label">Opis:</label>

                            <div class="col-md-6">
                                <textarea class="form-control" id="description" name="description" style="height: 100px !important;">{{ $task->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Izmjeni
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
        <div class="alert alert-error">
            <ul class="alert-error">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
@endforeach
@endsection