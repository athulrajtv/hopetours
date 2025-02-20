@extends('guest.layouts.master')
@section('body')
<section class="page-section gallery-banner bg-ppts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h3 class="banner-bg">Gallery</h3>
            </div>
        </div>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
                <div class="activity-head">
                    <h2 class="title-head" data-aos="zoom-in">Explore The World With Us</h2>
                    <p class="ash-sub" data-aos="fade-right">Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-dest mt-4">
        <div class="container">
            <div class="row">
                @if('$data')
                @foreach($data as $key => $data	)
                <div class="col-lg-4 col-md-6 col-sm-12 col-12"> 
                    <div class="effect-zoe" data-aos="fade-up">
                        <img src="/uploads/{{ $data->image }}" alt="img25"/>
                        <figcaption>
                            <h2>{{$data->head}}</h2>
                            <p class="icon-links">
                                <a href="#"><i class="fa fa-arrow-right"></i></a>
                            </p>
                            <p class="description">{{$data->details}}</p>
                        </figcaption>			
                    </div>
                </div>
                @endforeach
			    @endif
                 
            </div>
        </div>  
    </div>
</section>
@endsection