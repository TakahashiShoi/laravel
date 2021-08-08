@extends('layouts.helloapp')

@section('title', 'index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテントです。</p>
    <p>必要なだけ記述します。</p>
@endsection

@section('footer')
    copyrigth 2021 tuyano
@endsection