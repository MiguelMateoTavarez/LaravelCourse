@extends('layouts.app')
@section('title', $title)
@section('content')
<h1>{{ $title }}</h1>
    @if(!empty($users))
    <ul>
        @forelse($users as $user)
        <li>{{ $user->name }} <a href="{{ route('user.detail', $user->id) }}">Ver detalles</a></li>
        @empty
        <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>
    @else
    <p>No hay usuarios registrados.</p>
    @endif
@endsection