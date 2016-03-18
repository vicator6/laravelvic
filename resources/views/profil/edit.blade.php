@extends('layouts.app', ['pageTitle' => 'Profile de ' .$user->name])

@section('content')
    <h2>Modifer mes informations:</h2>

    {!! Form::model($user, ['route' => ['profile.update',$user->id],
                            'method' => 'PUT']) !!}


    <div class="form-group">
        {!! Form::hidden('user_id', $user->id, ['class' => 'form-control']) !!}
    </div>
    {!! Form::label('name', 'Full Name') !!}
    <div class="form-group">
        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
    </div>
    {!! Form::label('tel', 'Phone Number') !!}
    <div class="form-group">
        {!! Form::text('tel', $user->tel, ['class' => 'form-control']) !!}
    </div>
    {!! Form::label('email', 'Email') !!}
    <div class="form-group">
        {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}

    @include('partials.articles.errors')
    <h2>Modifer mon mdp:</h2>

    {!! Form::model($user, ['route' => ['resetpassword.update',$user->id],
                            'method' => 'PUT']) !!}

    {!! Form::label('password', 'New Password') !!}
    {!! Form::password('password',  ['class' => 'form-control']) !!}

    {!! Form::label('password_confirmation', 'Confirm Password') !!}
    {!! Form::password('password_confirmation',  ['class' => 'form-control']) !!}

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}
@endsection