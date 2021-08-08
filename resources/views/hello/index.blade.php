@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテントです。</p>
    <table>
        @foreach ($data as $item)
            <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
        @endforeach
    </table>

@endsection

@section('footer')
    copyrigth 2021 tuyano
@endsection