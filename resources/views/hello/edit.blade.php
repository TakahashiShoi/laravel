@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="/hello/edit" method="post">
        <table>
            @csrf
            <input type="hidden" name="id" value="{{$form->id}}">
            <tr><th>name: </th><td><input type="text" name="name" valeu="{{$form->name}}"></td></tr>
            <tr><th>mail: </th><td><input type="text" name="mail" valeu="{{$form->mail}}"></td></tr>
            <tr><th>age: </th><td><input type="text" name="age" valeu="{{$form->age}}"></td></tr>
            <tr><th></th><td><input type="submit" valeu="send"></td></tr>
        </table>
        <p>{{$form->name}}</p>
        <p>{{$form->mail}}</p>
        <p>{{$form->age}}</p>
    </form>
@endsection

@section('footer')
    copyrigth 2021 tuyano.
@endsection