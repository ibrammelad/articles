@extends('layout')
@section('header')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">
    @endsection
@section('content')
 <div id="wrapper">
     <div class="container">
    <form method="post" action="/artical">
        @csrf

    <div class="field">
        <label for="title" class="card-header-title"> title</label>
        <div class="control">

            <input type="text" name="title" class="input" required>

        </div>
    </div>
    <div class="field">
        <label for="excerpt" class="label h-3"> excerpt</label>
        <div class="control">

            <textarea type="text" name="excerpt" class="textarea" required></textarea>

        </div>
    </div>
      <div class="field">
        <label for="body" class="label has-background-color"> Body</label>
        <div class="control">

            <textarea type="text" name="body" class="textarea" required></textarea>

        </div>
    </div>
         <div class="field">
             <label class="label" for="tags">tags</label>
        <div class="select is-multiple control">
                    <select name='tags[]'  multiple >
                        @foreach($tags as $tag)
                          <option value="{{ $tag->id }}">
                              {{ $tag->name }}
                          </option>
                        @endforeach
                    </select>
        </div>
    </div>
    <div class="control">
        <button type="submit" class="button is-link"> Create</button>
    </div>
        @include('errors')


    </form>
     </div>
     </div>
    @endsection
