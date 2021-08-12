@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>{{$msg}}</p>
    @if (count($errors) > 0)
        <p>入力に誤りがあります。</p>
    @endif
    <form action="/hello" method="post">
        <table>
            @CSRF
            @error('name')
                <tr><th>ERROR</th><td>{{$message}}</td></tr>
            @enderror
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @error('mail')
            <tr><th>ERROR</th><td>{{$message}}</td></tr>
            @endif
            <tr><th>mail: </th><td><input type="mail" name="mail" value="{{old('mail')}}"></td></tr>
            @error('age')
            <tr><th>ERROR</th><td>{{$message}}</td></tr>
            @endif
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th><input type="submit" value="send"></th></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyrigth 2021 tuyano
@endsection