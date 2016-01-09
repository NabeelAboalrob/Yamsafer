@extends('app')

@section('content')
<div class"content">
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif


{!! Form::open([
    'route' => 'members.store'
]) !!}

<div class="form-group">
    {!! Form::label('firstName', 'First Name:', ['class' => 'control-label']) !!}
    {!! Form::text('firstName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('lastName', 'Last Name:', ['class' => 'control-label']) !!}
    {!! Form::text('lastName', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('phoneNumber', 'Phont Number:', ['class' => 'control-label']) !!}
    {!! Form::text('phoneNumber', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Create New member', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
@endsection