@extends('layouts.app')

@section('content')




<div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
<h1>読み終わった本の追加ページ</h1>
    {!! Form::model($book, ['route' => 'books.store']) !!}

        <div class="form-group">
{!! Form::label('title', 'タイトル:') !!}
           {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::label('content', 'ジャンル:') !!}
           {!! Form::text('content', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
           {!! Form::label('author', '著者:') !!}
           {!! Form::text('author', null, ['class' => 'form-control']) !!}
        </div>

        {!! Form::submit('投稿', ['class' => 'btn btn-primary'])!!}

    {!! Form::close() !!}

@endsection