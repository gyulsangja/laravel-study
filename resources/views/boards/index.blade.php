@extends('boards.layout')

@section('content')
<section>
<table class="table">
    <tr>
        <th>No</th>
        <th>제목</th>
        <th>작성일</th>
        <th>관리</th>
    </tr>

    @foreach($lists as $ls)
    <tr>
        <th>{{$ls->id}}</th>
        <th>{{$ls->title}}</th>
        <th>{{$ls->created_at}}</th>
        <th>
            <a href="{{route('boards.show', $ls->id)}}">보기</a>
            삭제 수정</th>
    </tr>
    @endforeach
</table>

</section>

@endsection

<style>
    .table{border-collapse: collapse;width: 100%;}
    .table th{border: 1px solid #000;padding: 8px;}
</style>

