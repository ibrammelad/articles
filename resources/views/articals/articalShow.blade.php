@extends('layout')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
                <h2> {{ $artical->title }}</h2>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			<p> {{ $artical->body }}</p>

                  @foreach($artical->tags as $tag)
                        <h4 style="margin: 10px">
                            <a href="/artical?tag={{$tag->name}}">{{$tag->name}}</a>
                        </h4>
                      @endforeach

                <form action="/artical/{{$artical->id}}/edit" method="get">
                    <input type="submit" class="button is-link" value=" Edit">
                </form>

        </div></div></div>
    @endsection
