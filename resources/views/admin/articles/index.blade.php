@extends('layouts.app', ['pageTitle' => 'Liste des articles'])

@section('content')
    @if(Session::has('erreur'))
        <h1>{{Session::get('erreur')}}</h1>
    @endif

    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{{$post->content}}</p>
        <a href="{{route('admin.articles.show', $post->id)}}">
            <button>Voir l'article</button>
        </a>


            <a href="{{route('admin.articles.edit', $post->id)}}">
                <button>Editer l'article</button>
            </a>
            <form action="{{route('admin.articles.destroy', $post->id)}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button>Supprimer l'article</button>
            </form>

    @endforeach




@endsection