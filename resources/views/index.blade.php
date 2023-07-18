@extends('layout.main')

@section('pageTitle',"خانه")
@section('content')
<form action="/form-submit" method="post">
    <input type="text" name="name" placeholder="نام خود را وارد کنید">
    <input type="text" name="lname" placeholder="نام خانوادگی خود را وارد کنید">
    @csrf <!-- {!! csrf_field() !!} !-->
    <button>ارسال</button>
</form>
@endsection