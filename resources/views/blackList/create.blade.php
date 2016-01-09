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
    'route' => 'blackList.store'
]) !!}

<div class="form-group">
    {!! Form::label('user_id', 'User ID:', ['class' => 'control-label']) !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>


{!! Form::submit('Block User !', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}
</div>
@endsection