@extends('layouts.template')

@section('title')
	Promotions
@endsection

@section('css')
	<link rel="stylesheet" type="text/css" href="/customs/css/promotions.css">
@endsection

@section('content')
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
							<!-- <img src="images/{{ $promotion->images[0]->path }}"> -->
							<div id="carousel-id" class="carousel slide" data-ride="carousel">
								<ol class="carousel-indicators">
									@for ($i = 0; $i < sizeof($promotion->images); $i++)
										@if ($i==0)
											<li data-target="#carousel-id" data-slide-to="{{ $i }}" class="active"></li>
										@else
											<li data-target="#carousel-id" data-slide-to="{{ $i }}"></li>
										@endif
									@endfor
								</ol>
								<div class="carousel-inner">
										@for ($i = 0; $i < sizeof($promotion->images); $i++)
											@if ($i==0)
												<div class="item active">
													<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" src="images/{{$promotion->images[$i]->path}}">
												</div>
											@else
												<div class="item">
													<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" src="images/{{$promotion->images[$i]->path}}">
												</div>
											@endif
									@endfor
								</div>
								<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
								<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
							</div>
						</div>
						<div class="right col-md-8">
							<div class="content">
								<article>
									<p>{{ $promotion->body }}</p>
								</article>
							</div>
							<div class="tags">
								@foreach ($promotion->tags as $tag)
									<span class="label label-default">{{ $tag->name }}</span>
								@endforeach	
							</div>
							<div class="times">
								<strong>ระยะเวลา: {{ $promotion->start_at }} - {{ $promotion->end_at }}</strong>
							</div>
							<div class="place">
								<strong>สถานที่: {{ $promotion->place }}</strong>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<strong>Created by </strong><small>{{ $promotion->user->name }}</small><strong> when </strong><small> {{ $promotion->published_at->diffForHumans() }} </small>
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
@endsection