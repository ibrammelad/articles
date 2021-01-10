@extends('layout')
@section('header')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    @endsection
@section('content')
 <div id="wrapper">
     <div class="container">
    <form method="post" action="/artical/{{$artical->id}}">
        @csrf
        @method('PATCH')

    <div class="field">
        <label for="title" class="card-header-title"> title</label>
        <div class="control">

            <input type="text" name="title" class="input" value="{{ $artical->title }}" required >

        </div>
    </div>
    <div class="field">
        <label for="excerpt" class="label h-3"> excerpt</label>
        <div class="control">

            <textarea type="text" name="excerpt" class="textarea" required>{{ $artical->excerpt }}</textarea>

        </div>
    </div>
      <div class="field">
        <label for="body" class="label has-background-color"> Body</label>
        <div class="control">

            <textarea type="text" name="body" class="textarea" required>{{ $artical->body }}</textarea>

        </div>
    </div>
    <div class="control">
        <button type="submit" class="button is-link">Update</button>
    </div>
            @include('errors')
    </form>
         <form action="/artical/{{$artical->id}}" method="post">
             @csrf
             @method('DELETE')
             <div class="control">
                 <button type="submit" class="button is-circle">DELETE</button>
             </div>
         </form>
     </div>
     </div>

    @endsection
