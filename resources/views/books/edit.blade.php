@extends('layouts.app')

@section('content')



<h1>id: {{ $book->id }} の編集ページ</h1>


<div class="row">
        <div class="col-xs-12">
    {!! Form::model($book, ['route' => ['books.update', $book->id], 'method' => 'put']) !!}

         {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('content', 'ジャンル:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('author', '著者:') !!}
        {!! Form::text('author') !!}

        {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

    {!! Form::close() !!}
@endsection