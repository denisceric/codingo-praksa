@extends('layouts.app')

@section('content')
<div class="container">
<h1>Dobro došli, 
@if (!Auth::guest())
{{$user->name}}!</h1>
Događaji:


    @include('tasks.task')

@else
<hr>
Ovdje možete napraviti dnevnik rada.
@endif
</div>
@endsection
