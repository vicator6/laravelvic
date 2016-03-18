@extends('layouts.app', ['pageTitle' => 'Profile de ' .$user->name])


@section('content')

    <h2>Info Utilisateur:</h2>

    <ul>
        <li>Full Name: {{$user->name}}</li>
        <li>Tel: {{$user->tel}}</li>
        <li>Email: {{$user->email}}</li>
        <p>Modifier votre mot de passe en cliquant sur le lien si dessous</p>
    </ul>
    <strong><a href="{{route('profile.edit', $user->id)}}">Modifier mes informations</a> </strong>

@endsection