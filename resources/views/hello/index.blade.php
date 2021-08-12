@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    <form action="/hello" method="post">
        <table>
            @CSRF
            <tr><th>name: </th><td><input type="text" name="name"></td></tr>
            <tr><th>mail: </th><td><input type="mail" name="mail"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age"></td></tr>
            <tr><th><input type="submit" value="send"></th></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyrigth 2021 tuyano
@endsection