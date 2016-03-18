@extends('layouts.app', ['pageTitle' => 'Article n°'.$post->id])

@section('content')
    <h2>{{$post->title}}<br> Auteur de l'article : {{ $post->user->name }} </h2>
    <p>{{$post->content}}</p>

    <hr>
    @if(Auth::check())

    <h2>Ecrivez votre commentaire ici !</h2>
    {!! Form::open(array(
    'action' => 'CommentController@store',
    'method' => 'POST'))
    !!}

    <div class="form-group">
        {!! Form::hidden('post_id', $post->id, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
    {!! Form::close() !!}

    @include('partials.articles.errors')

    @else
        <strong>Tu doit etre <a href="{{route('login')}}">log</a>pour ecrire un com</strong>

    @endif
    <hr>





    @foreach($post->comment as $comment)
        <p>Auteur de l'article : {{$comment->user->name}}</p><br>
        <p>Commentaire : {{$comment->content}}</p>
        <form action="{{route('comment.destroy', $comment->id)}}" method="POST">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <button>Supprimer ce com</button>

    @endforeach


@endsection