<!-- @extends('frontend.layouts.master') -->

@section('title','OPAC-SHOP || Your Post')

@section('main-content')

	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="blog-single.html">Your Post</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->

	<!-- About Us -->
	<section class="about-us section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-12">
						<div class="about-content">
							<h3>Your Post</h3>
							<h5>Category: {{ $posts->subject }}</h3>
							<p>{{ $posts->message }}</p>
						</div>

						<div>
						<h3>Prescription</h3>
						<!--  -->
						</div>

					</div>
				</div>
			</div>
	</section>
	
@endsection

