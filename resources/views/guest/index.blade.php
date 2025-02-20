@extends('guest.layouts.master')
@section('body')
<div class="slider-banner">
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/guestassets/images/banner/hope-banner1.webp" class="img-fluid zoom">
        <div class="slider-overlay"></div>
        <div class="carousel-caption d-md-block">
            <h5 class="animated fadeInDown slider-cap" data-aos="fade-down">Welcome to</h5>
            <h3 class="animated fadeInDown slider-cap" data-aos="fade-down">Hope Travel <span>Partner</span></h3>
            <p class="animated fadeInUp slider-p" data-aos="flip-left">Discover Unforgettable Destinations</p>
           
        </div>
      </div>
      <div class="carousel-item">
        <img src="/guestassets/images/banner/hope-banner2.webp" class="img-fluid zoom">
        <div class="slider-overlay"></div>
        <div class="carousel-caption d-md-block">
            <h5 class="animated fadeInDown slider-cap" data-aos="fade-down">Welcome to</h5>
            <h3 class="animated fadeInDown slider-cap" data-aos="fade-down">Hope Travel <span>Partner</span></h3>
            <p class="animated fadeInUp slider-p" data-aos="flip-left">Experience the Magic of Travel</p>
            
        </div>
      </div>
      <div class="carousel-item">
        <img src="/guestassets/images/banner/hope-banner3.webp" class="img-fluid zoom">
        <div class="slider-overlay"></div>
        <div class="carousel-caption d-md-block">
            <h5 class="animated fadeInDown slider-cap" data-aos="fade-down">Welcome to</h5>
            <h3 class="animated fadeInDown slider-cap" data-aos="fade-down">Hope Travel <span>Partner</span></h3>
            <p class="animated fadeInUp slider-p" data-aos="flip-left">Creating Memories Across the Globe</p>
            
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<section class="packages">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
				<div class="activity-head">
					<h2 class="title-head" data-aos="zoom-in">Best Travel Packages</h2>
					<p class="ash-sub" data-aos="fade-right">Need Help In Getting A Perfect Travel Experiance According To Your Needs? Hope Tours Has Curated Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
				</div>
			</div>
		</div>
	</div>

    <div class="container my-4">
        <div class="package-caro owl-carousel owl-theme">
            <!-- Srinagar Package -->
			@if('$data')
			@foreach($data as $key => $data	)
            <div class="item">
				
                <div class="package-card">
                    <img src="/uploads/{{ $data->image }}" alt="Srinagar" class="zoom-image">
					
                    <div class="package-card-body">
                    	<p>{{$data->days}}</p>
                        <h5 class="package-card-title">{{$data->details}}</h5>
                        <p class="package-price"><del>₹{{$data->mprice}}/-</del> <span class="discount">{{$data->discount}}off</span></p>
                        <div class="price-line">
			                <h5 class="price">₹{{$data->price}}/-</h5> 
			                <p class="details gn-pgh">{{$data->detail}}</p>
			            </div>
			             <div class="package-button">
			                <a href="https://wa.me/+918111925661/?text=urlencodedtext" class="btn btn-primary-pack">Book Now</a>
			            </div>
                    </div>
                </div>
				
            </div>
			@endforeach
			@endif

            

		</div>

        <div class="text-center mt-5">
            <a href="{{ route('Package') }}" class="btn btn-primary-view">View All Packages</a>
        </div>
    </div>
</section>

<section class="activity-section">
	<div class="active-overlay"></div>
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
				<div class="activity-head">
					<h2 class="light-head" data-aos="zoom-in">Recent Activities</h2>
					<p class="light-head" data-aos="fade-left">Need Help In Getting A Perfect Travel Experiance According To Your Needs? Hope Tours Has Curated Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
				<div class="row justify-content-center">
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<div class="activity-div">
							<img src="/guestassets/images/icons/cycling.png">
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<div class="activity-div">
							<img src="/guestassets/images/icons/climber.png">
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<div class="activity-div">
							<img src="/guestassets/images/icons/kayak.png">
						</div>
					</div> 
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<div class="activity-div">
							<img src="/guestassets/images/icons/joystick.png">
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-sm-6 col-6">
						<div class="activity-div">
							<img src="/guestassets/images/icons/tent.png">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="viewpoints">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
				<div class="activity-head">
					<h2 class="title-head"  data-aos="zoom-in">Magical View of World</h2>
					<p class="ash-sub" data-aos="fade-up">Need Help In Getting A Perfect Travel Experiance According To Your Needs? Hope Tours Has Curated Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
	    <div class="row">
	    	<div class="col-lg-12 col-md-12 col-sm-12 col-12">
	    		<div class="view-section">
	    			
	        <!-- Main Content -->
	        		<div class="row">
			           <div class="col-lg-8">
						    <div class="row">
								@if($item)
								@foreach($item->take(2) as $key => $item) <!-- Limit iteration to 2 items -->
						        <!-- Alleppey Section -->
						        <div class="col-md-6 mb-4">
						            <div class="view">
						            	<h5 class="view-title"><span class="view-sl">{{$item->id}}.</span> {{$item->head}}</h5>
						            	<div class="view-img-top">
						            		<img src="/uploads/{{ $item->image }}" class="img-fluid" alt="Alleppey">
						            	</div>
						                <div class="view-body">
						                    <div class="view-text d-flex justify-content-between">
											    <small></small>
											    <small></small>
											</div>
						                    <p class="gn-pgh" data-aos="fade-right">{!!$item->details!!}</p>
						                     <p class="title-head"><b>Best Time : </b> {{$item->month}}</p>
						                    <div class="d-flex justify-content-between">
						                        <a href="{{ route('Package') }}" class="btn btn-primary-view">View Packages</a>
						                        <a href="{{ route('Show',$item->id) }}" class="btn btn-primary-read">Read More</a>
						                    </div>
						                </div>
						            </div>
						        </div>
								@endforeach
								@endif
						       
								
						    </div>
						</div>
				        <!-- Sidebar -->
				         
				        <div class="col-lg-4">
				            <h5>Related Posts</h5>
				            <ul class="list-group list-group-flush">
				                <!-- Post 1 -->
				                <li class="list-group-item d-flex align-items-start">
				                    <img src="/guestassets/images/place/list-1.webp" class="img-fluid rounded" alt="Best National Parks">
				                    <div class="ms-3">
				                        <h6 class="mb-1 title-head">Best National Parks of India</h6>
				                        <p class="mb-0 gn-pgh">Explore the top national parks in India and enjoy the wildlife...</p>
				                    </div>
				                </li>
				                <!-- Post 2 -->
				                <li class="list-group-item d-flex align-items-start">
				                    <img src="/guestassets/images/place/list-2.webp" class="img-fluid rounded" alt="Festivals in India">
				                    <div class="ms-3">
				                        <h6 class="mb-1 title-head">Festivals & Events</h6>
				                        <p class="mb-0 gn-pgh">Discover the vibrant festivals and events happening across India...</p>
				                    </div>
				                </li>
				                <!-- Post 3 -->
				                <li class="list-group-item d-flex align-items-start">
				                    <img src="/guestassets/images/place/list-3.webp" class="img-fluid rounded" alt="Street Foods">
				                    <div class="ms-3">
				                        <h6 class="mb-1 title-head">34 Street Foods in India</h6>
				                        <p class="mb-0 gn-pgh">Experience the best street food that India has to offer...</p>
				                    </div>
				                </li>
				                <!-- Post 4 -->
				                <li class="list-group-item d-flex align-items-start">
				                    <img src="/guestassets/images/place/list-4.webp" class="img-fluid rounded" alt="Historical Monuments">
				                    <div class="ms-3">
				                        <h6 class="mb-1 title-head">Historical Monuments of India</h6>
				                        <p class="mb-0 gn-pgh">Learn about the most iconic historical sites in India...</p>
				                    </div>
				                </li>
				                <!-- Post 5 -->
				                <li class="list-group-item d-flex align-items-start">
				                    <img src="/guestassets/images/place/list-5.webp" class="img-fluid rounded" alt="Magnificent Palaces">
				                    <div class="ms-3">
				                        <h6 class="mb-1 title-head">Magnificent Palaces</h6>
				                        <p class="mb-0 gn-pgh">Tour the grandest palaces and royal residences in India...</p>
				                    </div>
				                </li>
				                <!-- Post 6 -->
				                <li class="list-group-item d-flex align-items-start">
				                    <img src="/guestassets/images/place/list-6.webp" class="img-fluid rounded" alt="Maharaja Express">
				                    <div class="ms-3">
				                        <h6 class="mb-1 title-head">The Maharaja Express</h6>
				                        <p class="mb-0 gn-pgh">Experience luxury on wheels like never before...</p>
				                    </div>
				                </li>
				                <!-- Post 7 -->
				                <li class="list-group-item d-flex align-items-start">
				                    <img src="/guestassets/images/place/list-7.webp" class="img-fluid rounded" alt="Tourist Places">
				                    <div class="ms-3">
				                        <h6 class="mb-1 title-head">Best Tourist Places in India</h6>
				                        <p class="mb-0 gn-pgh">Explore the top tourist destinations across India...</p>
				                    </div>
				                </li>
				            </ul>
				        </div>
		    		</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="discount-section">
	<div class="discount-overlay"></div>
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 mx-auto">
				<div class="discount-div text-center">
					<span data-aos="fade-up">Go & Discover</span>
					<h2>Get Special Offer</h2>
					<p>Traveluxis Has Curated Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
					<button class="discount-btn"><a href="{{ route('Package') }}" class="discount-a">OPEN AN ACCOUNT</a></button>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 col-12">
				@if('$offerImage')
				@foreach($offerImage as $key => $offerImage	)
				<div class="discount-img">
					<img src="/uploads/{{ $offerImage->image }}" class="img-fluid">
				</div>
				@endforeach
				@endif
			</div>
		</div>
	</div>
</section>


<!-- Testmonial -->
<section class="testimonial-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center">
				<div class="testi owl-carousel owl-theme">
					
					@foreach($test as $key => $test	)
					<div class="item">
						<div class="review">
							<div class="testimonial p-4">
								<div class="d-flex align-items-center mb-3">
									<img src="/uploads/{{ $test->profile_image }}" alt="Profile Picture" class="rounded-circle me-3 testi-image">
									<div>
										<p class="mb-0"><strong id="testimonial-name">{{$test->name}}</strong></p>
										<p class="mb-0 text-muted" id="testimonial-title">{{$test->designation}}</p>
									</div>
								</div>
								<p id="testimonial-text">{{$test->review}}</p>
							</div>
						</div>
					</div>
					@endforeach
				
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-12">
				<div class="testi owl-carousel owl-theme">
				@foreach($image as $key => $image)
					<div class="item">
						<img src="/uploads/{{ $image->image }}" alt="Nature Hike" class="img-fluid rounded">
					</div>
				@endforeach
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Start places -->
<section class="place-section place-bg">
    <div class="container">
      	<div class="row">
			<div class="col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
				<div class="activity-head">
					<h2 class="title-head"  data-aos="zoom-in">Recommended Places</h2>
					<p class="ash-sub mb-5" data-aos="fade-up">Need Help In Getting A Perfect Travel Experiance According To Your Needs? Hope Tours Has Curated Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
				</div>
			</div>
		</div>
        <div class="row">
			@if('$place')
			@foreach($place as $key => $place)
            <div class="col-lg-2 col-md-3 col-sm-6 col-6">
              	<div class="place-image">
	                <img class=" img-fluid image-content" src="/uploads/{{ $place->image }}">  
	                <div class="overlay">
	                	<h6>{{$place->place}}</h6>
	                </div>
              	</div>
            </div>
			@endforeach
			@endif
            
        </div>
    </div>
</section>
<!-- End places -->

<section class="adventure-section">
	<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
                <div class="activity-head advent-bg" data-aos="zoom-in">
                	<p><span>Popular Activities</span></p>
                    <h2 class="title-head">Explore Real Adventure</h2>
                </div>
            </div>
        </div>

        <div class="advent-owl owl-carousel owl-theme mt-5">
			@if('$activity')
			@foreach($activity as $key => $activity	)
	        <div class="advent-item">
	            <img src="/uploads/{{ $activity->image }}" alt="Tent camping services">
	            <div class="advent-content">
	                <h6>{{$activity->head}}</h6>
	                <a href="{{ route('Package') }}" class="btn btn-primary">➔</a>
	            </div>
	        </div>
			@endforeach
			@endif
	       
	    </div>

    </div>
</section>
@endsection