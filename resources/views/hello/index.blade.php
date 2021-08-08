@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテントです。</p>
    <ul>
        @each('components.item', $data, 'item')
    </ul>

@endsection

@section('footer')
    copyrigth 2021 tuyano
@endsection