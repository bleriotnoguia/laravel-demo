<?php
    if($post->id){
        $options = ['method' => 'put', 'url'=>action('PostsController@update', $post)];
    }else {
        $options = ['method' => 'post', 'url'=>action('PostsController@store')];
    }
?>

@include('errors')
@include('posts.flash')

{!! Form::model($post, $options) !!}
        <div class="form-group">
            {!! Form::label('title', 'My Title') !!}
            {!! Form::text('title', null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'My slug') !!}
            {!! Form::text('slug', null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'catégorie') !!}
            {!! Form::select('category_id', $categories , null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags[]', 'Tag') !!}
            {{-- $post->tags->pluck('id')->toArray() ceci aurait pu etre ajouter a la place de null --}}
            {!! Form::select('tags[]', App\Tag::pluck('name', 'id')->toArray(), null , ['class' => 'form-control', 'multiple' => true ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'My content') !!}
            {!! Form::textarea('body', null , ['class' => 'form-control', 'cols'=>'10']) !!}
        </div>
        <div class="form-group">
            <label>
                    {!! Form::checkbox('online', 1) !!}
                En ligne ?
            </label>
        </div>
        {!! Form::input('submit', 'Submit', null, ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}    