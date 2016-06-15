@extends('layouts.template')

@section('title')
	Promotions
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="/customs/css/promotions.css">
@endsection

@section('content')
	<div class="container">
		<div class="row">
			<aside class="left col-md-3">
				<ul class="list-group">
					<li class="list-group-item active"><strong>Catagory</strong></li>
					@foreach ($tags as $tag)
						<a href="?tag={{ $tag->name }}" class="list-group-item">{{ $tag->name }}</a>
					@endforeach
				</ul>
			</aside>
			<section class="landing col-md-7">
				@foreach ($promotions as $promotion)
					<div class="panel panel-custom">
						<div class="panel-heading">
							<h3 class="panel-title">{{ $promotion->title }}</h3>
						</div>
						<div class="panel-body">
						<div class="row">
							<div class="left col-md-4">
								<img src="{{ $promotion->images[0]->path }}">
							</div>
							<div class="right col-md-8">
								<pre>
									{{ $promotion->body }}
								</pre>
								<pre>
									@foreach ($tags as $tag)
										<span class="label">{{ $tag->name }}</span>
									@endforeach	
								</pre>
							</div>
						</div>
						</div>
					</div>
				@endforeach
			</section>
			<aside class="right col-md-2">
				<ul class="list-group">
					<li class="list-group-item active"><strong>Fiter</strong></li>
					<a href="?filter=Today" class="list-group-item">Today</a>
					<a href="?filter=Week" class="list-group-item">This Week</a>
					<a href="?filter=Month" class="list-group-item">This Month</a>
				</ul>
			</aside>
		</div>
	</div>
@endsection