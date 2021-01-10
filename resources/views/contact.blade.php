@extends('layout')
@section('header')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
@endsection
@section('content')
    <div class="box">
    <form method="post" action="/contact" >
        @csrf
        <div class="box">
            <label for="content" class="label"> Content</label>
            <textarea  name="content"  class="textarea"></textarea>
        </div>
        <div class="box">
            <label for="email" class="label"> Email Adress</label>
            <input type="text" name="email" class="input">
        </div>
        @error('email')
        <div class="text-red-500"  style="color:red">{{$message}}</div>
        @enderror
        <div class="box">
        <button type="submit" class="button is-link">Email me</button>
        </div>
        @if(session('message'))
            <div class="container" style="color: #008000; font: bold">{{session('message')}}</div>
        @endif
    </form>
    </div>
@endsection
