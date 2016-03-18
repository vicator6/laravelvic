@if($action == 'edit')
    @if(Auth::check() && Auth::user()->admin == 1)
    {!! Form::model($post, ['route' => ['admin.articles.update', $post->id], 'method' => 'PUT']) !!}
    @elseif(Auth::check() && Auth::user()->admin == 0)
    {!! Form::model($post, ['route' => ['articles.update', $post->id], 'method' => 'PUT']) !!}
    @endif
@else
    {!! Form::open(['route' => 'articles.store', 'method' => 'POST']) !!}
@endif
    <div class="form-group">
        {!! Form::select('user_id', $users, null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::text('title', null, [
            'class' => 'form-control',
            'placeholder' => 'Nom de l\'article'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('Envoyer', ['class' => 'btn btn-block']) !!}
{!! Form::close() !!}