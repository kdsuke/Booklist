@extends('layouts.app')

@section('content')


<h1>読み終わった本の追加ページ</h1>

<div class="row">
        <div class="col-xs-12">

    {!! Form::model($book, ['route' => 'books.store']) !!}

　　　　{!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', 'ジャンル:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('author', '著者:') !!}
        {!! Form::text('author') !!}
        

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection