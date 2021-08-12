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
            @if ($errors->has('name'))
            <tr><th>ERROR:</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            @if ($errors->has('mail'))
                <tr><th>ERROR:</th><td>{{$errors->first('mail')}}</td></tr>
            @endif
            <tr><th>mail: </th><td><input type="mail" name="mail" value="{{old('mail')}}"></td></tr>
            @if ($errors->has('age'))
                <tr><th>ERROR:</th><td>{{$errors->first('age')}}</td></tr>
            @endif
            <tr><th>age: </th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr><th><input type="submit" value="send"></th></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyrigth 2021 tuyano
@endsection