@extends('layouts.main')

@section('title', 'Overview')

@section('content')

    @if($plants->isEmpty())
        <p>There are no games! :(</p>
    @else
        @foreach($plants as $plant)
            {{ $plant->naam }}
        @endforeach
    @endif
@endsection