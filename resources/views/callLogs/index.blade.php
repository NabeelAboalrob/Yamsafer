@extends('app')

@section('content')

@foreach($members as $member)
    <h3>{{ $member->firstName }}</h3> <h3>{{ $member->lastName }}</h3>
    <p>{{ $member->phoneNumber}}</p>
    <p>
    </p>
    <hr>
@endforeach

@endsection