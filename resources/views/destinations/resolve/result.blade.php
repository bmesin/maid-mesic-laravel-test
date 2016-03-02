@extends('layouts.master')

@section('title', 'Populate Destination - Result')

@section('content')
    <div class="well">
        {{ $resultDestination }}
    </div>

    <a href="{{ route('showResolveForm') }}" class="btn btn-default">Back to Form</a>
@endsection
