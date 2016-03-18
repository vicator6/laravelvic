@extends('layouts.app', ['pageTitle' => 'Liste des articles'])

@section('content')
    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif

    @foreach($posts as $post)

            <h3>{{$post->title}}</h3>
            <p>{{$post->content}}</p>
            <div class="row">
                <a href="{{route('articles.show', $post->id)}}">
                    <button class="btn btn-default btn-lg" >Voir l'article</button>
                </a>
                <a href="{{route('articles.create', $post->id)}}">
                    <button class="btn btn-success btn-lg" >Ecrire un article</button>
                </a>
            </div>
            <hr>


        @if(Auth::check() && Auth::user()->id == $post->user_id)
            <div class="row">
                <div class="col-md-4">
                    <a href="{{route('articles.create', $post->id)}}">
                        <button class="btn btn-success btn-lg" >Ecrire un autre article</button>
                    </a>
                </div>
                <div class="col-md-4"><a href="{{route('articles.edit', $post->id)}}">
                        <button class="btn btn-primary btn-lg">Editer l'article</button>
                    </a>
                </div>
                <div class="col-md-4">
                    <form action="{{route('articles.destroy', $post->id)}}" method="POST">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-lg" >Supprimer l'article</button>
                    </form>
                </div>
            </div>
            <hr>
        @endif
    @endforeach




@endsection