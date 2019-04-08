@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary">Go Back</a>
    <br><br>
    <h1><a href="{{ $todo->id }}">{{ $todo->text }}</a></h1>
    <div class="badge badge-pill badge-danger">{{ $todo->due }}</div>
    <hr>
    <p>{{ $todo->body }}</p>
@endsection