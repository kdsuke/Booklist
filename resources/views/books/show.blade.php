@extends('layouts.app')

@section('content')

<h1>id = {{ $book->id }} の詳細ページ</h1>

     <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $book->id }}</td>
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $book->title }}</td>
        </tr>
        <tr>
            <th>ジャンル</th>
            <td>{{ $book->content }}</td>
        </tr>
        <tr>
            <th>著者</th>
            <td>{{ $book->author }}</td>
    </table>



{!! link_to_route('books.edit', '読み終わった本を編集', ['id' => $book->id], ['class' => 'btn btn-primary']) !!}


{!! Form::model($book, ['route' => ['books.destroy', $book->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection



