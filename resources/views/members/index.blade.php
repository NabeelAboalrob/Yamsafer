@extends('app')

@section('content')

@foreach($members as $member)
    <h3>{{ $member->firstName }}</h3> <h3>{{ $member->lastName }}</h3>
    <p>{{ $member->phoneNumber}}</p>
    <p>
 {!! Form::open([
            'method' => 'PUT',
            'route' => ['call-logs.update', $member->id]
        ]) !!}
            {!! Form::submit('call', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </p>
    <hr>
@endforeach

@endsection