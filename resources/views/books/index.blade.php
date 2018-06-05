@extends('layouts.app')

@section('content')

<h1>読んだ本一覧</h1>

   @if (count($books) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タイトル</th>
                    <th>ジャンル</th>
                    <th>著者</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>{!! link_to_route('books.show', $book->id, ['id' => $book->id]) !!}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->content }}</td>
                        <td>{{ $book->author }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
{!! link_to_route('books.create', '新たに読み終わった本の追加', null, ['class' => 'btn btn-primary']) !!}




@endsection