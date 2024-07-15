@extends('boards.layout')

@section('content')
<form action="{{route('boards.store')}}" method="post">
    @csrf    
    <h2>제목</h2>
    <div><input type="text" name="title" value=""></div>

    <h2>내용</h2>
    <div><textarea name="content" rows="5"></textarea></div>

    <button type="submit">저장</button>
</form>


@endsection