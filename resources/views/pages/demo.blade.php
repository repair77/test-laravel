@extends('layouts.app')
@section('content')
<h2>{{ $h2 }}</h2>
@include('common.errors')

<div class="row clearfix">
	<div class="col-md-12 column">
		<div class="carousel slide" id="carousel-206584">
			<ol class="carousel-indicators">
				<li data-slide-to="0" data-target="#carousel-206584">
				</li>
				<li data-slide-to="1" data-target="#carousel-206584" class="active">
				</li>
				<li data-slide-to="2" data-target="#carousel-206584">
				</li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img alt="" src="http://www.runoob.com/try/bootstrap/layoutit/v3/default.jpg" />
					<div class="carousel-caption">
						<h4>
							First Thumbnail label
						</h4>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
					</div>
				</div>
				<div class="item active">
					<img alt="" src="http://www.runoob.com/try/bootstrap/layoutit/v3/default1.jpg" />
					<div class="carousel-caption">
						<h4>
							Second Thumbnail label
						</h4>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
					</div>
				</div>
				<div class="item">
					<img alt="" src="http://www.runoob.com/try/bootstrap/layoutit/v3/default2.jpg" />
					<div class="carousel-caption">
						<h4>
							Third Thumbnail label
						</h4>
						<p>
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
					</div>
				</div>
			</div> <a class="left carousel-control" href="#carousel-206584" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-206584" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		<div class="jumbotron">
			<h1>
				浣犲ソ Laravel 5!
			</h1>
			<p>
				This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.
			</p>
			<p>
				 <a class="btn btn-primary btn-large" href="#">Learn more</a>
			</p>
		</div>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-4 column">
		<h2>
			Heading
		</h2>
		<p>
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
		</p>
		<p>
			 <a class="btn" href="#">View details 禄</a>
		</p>
	</div>
	<div class="col-md-4 column">
		<h2>
			Heading
		</h2>
		<p>
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
		</p>
		<p>
			 <a class="btn" href="#">View details 禄</a>
		</p>
	</div>
	<div class="col-md-4 column">
		<h2>
			Heading
		</h2>
		<p>
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
		</p>
		<p>
			 <a class="btn" href="#">View details 禄</a>
		</p>
	</div>
</div>
<div class="row clearfix">
	<div class="col-md-6 column">
	</div>
	<div class="col-md-6 column">
	</div>
</div>

@endsection