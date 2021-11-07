@extends('layouts.app')
@section('title', $title)
@section('content')
<h1>{{ $title }}</h1>
    @if(!empty($user))
    <h1 class="display-3 text-center">{{ $user }}</h1>
    @else
    <p>No hay usuarios registrados.</p>
    @endif
@endsection