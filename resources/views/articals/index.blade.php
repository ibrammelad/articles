@extends('layout')
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
                @forelse($articals as $artical)
                 <a href="/artical/{{$artical->id}}">
                     <h2>
                         {{ $artical->title }}
                     </h2>
                 </a>
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>


                     <p>
                         {{   $artical->body }}
                     </p>
                    @empty
                    <p> no found any article</p>
                    @endforelse


            </div>
        </div>
    </div>
</div>
    @endsection
