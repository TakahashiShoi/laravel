@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/hello/edit" method="post">
        <table>
            @CSRF
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>name: </th><td><input type="text" name="name" valeu="{{$form->name}}"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail" valeu="{{$form->mail}}"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age" valeu="{{$form->age}}"></td></tr>
            <tr><th></th><td><input type="submit" valeu="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
    copyrigth 2021 tuyano.
@endsection