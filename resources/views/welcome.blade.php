@extends('layouts.app')

{{-- comienza contenido del blog content--}}
@section('content')
    <link rel="stylesheet" href="/otro/css/normalize.css">
	<link rel="stylesheet" href="/otro/css/framework.css">
	<link rel="stylesheet" href="/otro/css/style.css">
	<link rel="stylesheet" href="/otro/css/responsive.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

	@stack('scripts')

	<a style="float:right" href="{{ route('admin.posts.index') }}" class="btn btn-lg btn-success">Administrar Tareas</a>
	
	<section class="posts container">
        @foreach($posts as $post)
		<article class="post">
			@if($post->photos->count()===1)
				<figure><img src="{{$post->photos->first()->url}}" alt="" class="img-responsive" alt=""></figure>
			@elseif($post->photos->count()>1)
			<div class="gallery-photos" data-masonry='{"itemSelector":".grid-item","columnWidth":464}'>
					@foreach($post->photos->take(4) as $photo)
					<figure class="grid-item grid-item--height2">
						@if($loop->iteration === 4)
							<div class="overlay">{{$post->photos->count()}} Fotos</div>
						@endif
						<img src="{{url($photo->url)}}" class="img-responsive" alt=""></figure>
					@endforeach
				</div>
			@endif
				
			<div class="content-post">
				<header class="container-flex space-between">
					<div class="date">
					{{-- <span class="c-gray-1">{{$post->published_at->format('M d') }}</span> --}}
					<span class="c-gray-1">{{$post->published_at}}</span>
					</div>
					<div class="post-category">
                    <span class="category text-capitalize">{{$post->category->name}}</span>
					</div>
				</header>
				<h1>{{$post->title}}</h1>
				<div class="divider"></div>
                <p>{{$post->excerpt}}</p>
				<footer class="container-flex space-between">
					<div class="read-more">
					<a href="blog/{{$post->id}}" class="text-uppercase c-green">Leer Mas</a>
					</div>
					<div class="tags container-flex">
					@foreach($post->tags as $tag)
					<span class="tag c-gray-1 text-capitalize">{{$tag->name}}</span>
					@endforeach
					</div>
				</footer>
			</div>
        </article>
        @endforeach

		<div class="pagination">
				<ul class="list-unstyled container-flex space-center">
					<li><a href="#" class="pagination-active">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
				</ul>
			</div>
	</section><!-- fin del div.posts.container -->

	
@stop




{{-- fin contendiog blog content --}}
