@php($doNotLoadNavbar = true)
@extends('layout.main')

@section('content')

<div>
    <ul>
        <li>Name: {{$name}}</li>
        <li>Last Name: {{$lname}}</li>
    </ul>
</div>
@endsection