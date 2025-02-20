@extends('guest.layouts.master')
@section('body')
<section class="page-section packages-banner bg-ppts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h3 class="banner-bg">Packages</h3>
            </div>
        </div>
    </div>
</section>

<section class="viewpoints">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-12 col-12 mx-auto">
                <div class="activity-head">
                    <h2 class="title-head" data-aos="fade-down">Magical View of World</h2>
                    <p class="ash-sub" data-aos="fade-right">Need Help In Getting A Perfect Travel Experiance According To Your Needs? Hope Tours Has Curated Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
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
                       <div class="col-lg-12">
                            <div class="row">
                                
                                <?php $id = 1; ?>
                                @if('$data')
                                @foreach($data as $key => $data	)
                                
                                
                                <!-- Lakshadweep Section -->
                                <div class="col-lg-4 col-md-6 col-sm-12 col-12 mb-4">
                                    <div class="view" data-aos="fade-up-left">
                                        <h5 class="view-title"><span class="view-sl">{{$id}}. </span>{{$data->head}}</h5>
                                        <div class="view-img-top-blur">
                                            <img src="/uploads/{{ $data->image }}" class="img-fluid" alt="Alleppey">
                                        </div>
                                        <div class="view-body">
                                            <div class="view-text d-flex justify-content-between">
                                                
                                            </div>
                                            <p class="gn-pgh">{!!$data->details!!}</p>
                                             <p class="title-head"><b>Best Time : </b>{{$data->month}}</p>
                                            <div class="d-flex justify-content-between">
                                                <a href="{{ route('Package') }}" class="btn btn-primary-view">View Packages</a>
                                              
                                               
                                                <a href="{{ route('Show', $data->id) }}" class="btn btn-primary-read">Read More</a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <?php $id += 1; ?>
                                @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection