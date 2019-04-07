@extends('layouts.app')
@section('content')
<h1>Todos</h1>
@if(count($todos) > 0)
    @foreach($todos as $todo)
        <div class="card text-center" style="width: 40%; height: 10%; padding-top: 20px ">
            <h3>{{ $todo->text }} <span class="badge badge-pill badge-danger">{{ $todo->due }}</span>
            </h3>
        </div>
    @endforeach
@endif
@endsection