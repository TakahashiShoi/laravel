@extends('layouts.helloapp')

@section('title', 'Bpard.index')

@section('menubar')
    @parent
    ボード・ページ
@endsection

@section('content')
    <table>
        <tr><th>Data</th></tr>
        @foreach ($items as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
    copyrigth 2021 tuyano.
@endsection