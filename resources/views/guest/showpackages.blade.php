@extends('guest.layouts.master')
@section('body')

<section class="page-section packagedetail-banner bg-ppts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h3 class="banner-bg">Package Details</h3>
            </div>
        </div>
    </div>
</section>


<section class="pack-detail">
  <div class="cs_height_140 cs_height_lg_80"></div>
  <div class="container">
    <div class="row cs_gap_y_50">
      @if($record->count())
        
        
          <div class="col-lg-8">
            <div class="cs_post_details">
              <h2 class="cs_tour_details_title" data-aos="zoom-in-up"> {{$record->head}}<small>₹{{$record->price}}/<span>{{$record->days}}</span></small></h2>
              <img src="/uploads/{{ $record->image }}" class="img-fluid" alt="Tour Thumb">
              <h3 data-aos="fade-up">{{$record->title}}</h3>
              <p class="gn-pgh" data-aos="fade-right">{!!$record->details!!}</p>
            <hr>
            </div>
            <div class="cs_tabs">
              <ul class="cs_tab_links cs_style_1 cs_mp0" data-aos="fade-up">
                <li class="#"><a href="#tab_1" class="cs_primary_bg cs_white_color cs_radius_5"> Tour Plan</a></li>
                <li><a href="#tab_2" class="cs_primary_bg cs_white_color cs_radius_5">Location</a></li>
                <li><a href="#tab_3" class="cs_primary_bg cs_white_color cs_radius_5">Gallery</a></li>
                
              </ul>
              <div class="cs_tab_body">
                <div class="cs_tab active" id="tab_1">
                  <p>{!!$record->plan!!}</p>
                </div>
                <div class="cs_tab" id="tab_2">
                  <iframe src="{{$record->link}}" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <div class="cs_tab" id="tab_3">
                  <div class="cs_grid_3 cs_gallery_list cs_style_1">
                  @if($images)
                    @foreach($images as $Key => $image)
                      <a href="/uploads/{{ $image->gallery }}" class="cs_gallery_item cs_zoom">
                        <img src="/uploads/{{ $image->gallery }}" alt="Gallery Image" class="cs_zoom_in">
                        <div class="cs_gallery_overlay"></div>
                        <div class="cs_gallery_icon position-absolute">
                          <img src="/guestassets/images/icons/plus_icon.svg" alt="Icon">
                        </div>
                      </a>
                    @endforeach
                  @else
                    <p>No images found.</p>
                  @endif
                  </div>
                </div>
                
              </div>
            </div>
            
          </div>
          <aside class="col-lg-4">
            <div class="cs_sidebar cs_style_1 cs_white_bg cs_right_sidebar">
              <div class="cs_info_widget cs_white_bg">
                <p>{!!$record->information!!}</p>
                <!-- <h3 class="cs_widget_title cs_fs_24 cs_medium">Basic Information:</h3>
                <p class="cs_widget_subtitle">Explore lush green valleys, snow-capped peaks, and charming villages in this unforgettable journey</p>
                <ul class="cs_info_list cs_mp0">
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Destination</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->destination}}</p>
                  </li>
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Duration</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->duration}}</p>
                  </li>
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Departure</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->departure}}</p>
                  </li>
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Departure Time</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->time}}</p>
                  </li>
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Return Time</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->return}}</p>
                  </li>
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Dress Code</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->code}}</p>
                  </li>
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Included</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->included}}</p>
                  </li>
                  <li class="cs_info_item">
                  <h3 class="cs_info_title cs_fs_16 cs_semibold mb-0">Not Included</h3>
                  <p class="cs_info_subtitle mb-0">{{$record->not}}</p>
                  </li>
                  
                </ul> -->
                <div class="cs_booking_widget cs_gray_bg">
                  <h3 class="cs_widget_title cs_fs_24 cs_medium">Drop Messege For Book</h3>
                  <form action="#" class="cs_booking_form">
                    <div class="cs_input_field position-relative">
                      <span><i class="fa fa-user"></i></span>
                      <input type="text" placeholder="Your Name*" class="cs_form_field cs_radius_5">
                    </div>
                    <div class="cs_input_field position-relative">
                      <span><i class="fa fa-envelope"></i></span>
                      <input type="email" placeholder="Your Email*" class="cs_form_field cs_radius_5">
                    </div>
                    <div class="cs_input_field position-relative">
                      <span><i class="fa fa-comment"></i></span>
                      <textarea rows="5" class="cs_form_field" placeholder="Message"></textarea>
                    </div>
                      <button type="submit" class="btn btn-primary-view">Send Message</button>
                  </form>
                </div>
              </div>
              <div class="cs_post_widget">
                <h3 class="cs_widget_title cs_fs_24 cs_semibold">Package Offers</h3>
                <img src="/guestassets/images/package/poster.webp" alt="" class="cs_zoom_in object-fit-cover" class="img-fluid">
                <!-- <ul class="cs_recent_posts cs_mp0">
                  <li>
                    <article class="cs_recent_post">
                      <a href="blog-details.php" class="cs_recent_post_thumb cs_zoom">
                        <img src="/guestassets/images/logo/ft-5.webp" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                      </a>
                      <div class="cs_recent_post_info">
                        <h3 class="cs_recent_post_title cs_fs_18 cs_medium">
                          <a href="blog-details.php">Eiffel Tower</a>
                        </h3>
                        <div class="cs_recent_post_meta">
                          <span>Paris, 24 Trips</span>
                        </div>
                      </div>
                    </article>
                  </li>
                  <li>
                    <article class="cs_recent_post">
                      <a href="blog-details.php" class="cs_recent_post_thumb cs_zoom">
                        <img src="/guestassets/images/logo/ft-3.webp" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                      </a>
                      <div class="cs_recent_post_info">
                        <h3 class="cs_recent_post_title cs_fs_18 cs_medium">
                          <a href="blog-details.php">Pryde Mountains</a>
                        </h3>
                        <div class="cs_recent_post_meta">
                          <span>Prydelands, 100 Trips</span>
                        </div>
                      </div>
                    </article>
                  </li>
                  <li>
                    <article class="cs_recent_post">
                      <a href="blog-details.php" class="cs_recent_post_thumb cs_zoom">
                        <img src="/guestassets/images/logo/ft-2.webp" alt="Post Thumb" class="cs_zoom_in w-100 h-100 object-fit-cover">
                      </a>
                      <div class="cs_recent_post_info">
                        <h3 class="cs_recent_post_title cs_fs_18 cs_medium">
                          <a href="blog-details.php">Lao Lading Island</a>
                        </h3>
                        <div class="cs_recent_post_meta cs_fs_14">
                          <span>Krabal, 12 Trips</span>
                        </div>
                      </div>
                    </article>
                  </li>
                </ul> -->
              </div>
            </div>
          </aside>
        
     
      
      @endif
    </div>
    
  </div>
  <div class="cs_height_140 cs_height_lg_80"></div>
</section>

@endsection