@extends('client.layout.master')
@section('content')
<h1>{{$category->name}}</h1>

@endsection

@section('meta-title')
{{$category->name??"Trang không tồn tại"}}
@endsection