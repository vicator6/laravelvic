@extends('layouts.app', ['pageTitle' => 'Formulaire'])

@section('content')
    {!! Form::open(array(
    'action' => 'formController@store',
    'method' => 'POST'))
    !!}


    {!! Form::label('nomduprojet', 'Projet') !!}
    <div class="form-group">
        {!! Form::text('nomduprojet',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('nom', 'Nom') !!}
    <div class="form-group">
        {!! Form::text('nom',Auth::user()->name, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('email', 'Email') !!}
    <div class="form-group">
        {!! Form::text('email',Auth::user()->email, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('tel', 'Numéro de téléphone') !!}
    <div class="form-group">
        {!! Form::text('tel',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('adresse', 'Adresse') !!}
    <div class="form-group">
        {!! Form::text('adresse',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('fonction', 'Fonction au sein de l\'entreprise') !!}
    <div class="form-group">
        {!! Form::text('fonction',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('demande', 'Demande') !!}
    <div class="form-group">
        {!! Form::textarea('demande',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::label('objectif', 'Objéctif') !!}
    <div class="form-group">
        {!! Form::textarea('objectif',Null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Envoyer votre formulaire', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}



@endsection