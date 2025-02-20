@extends('guest.layouts.master')
@section('body')
<section class="page-section experience-banner bg-ppts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h3 class="banner-bg">Experience</h3>
            </div>
        </div>
    </div>
</section>

<section class="experience-section">
    <div class="container">
    	<div class="row">
      		<div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
          		<div class="activity-head">
					<h2 class="title-head"  data-aos="fade-up">Client Experience</h2>
					<p class="ash-sub mb-5" data-aos="fade-up">Need Help In Getting A Perfect Travel Experiance According To Your Needs? Hope Tours Has Curated Several Travel Packages Covering Some Of The Most popular Holiday Destinations For You.</p>
				</div>
      		</div> 
				@if('$data')
				@foreach( $data as $key => $data )      
					<div class="col-lg-4 col-md-6 col-sm-12 col-12">    
						<div class="video-sec"> 
							<iframe width="100%" height="250" src="{{$data->link}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>      
						</div>    
					</div>
				@endforeach
				@endif
	    </div>
	</div>
</section>

<section class="certify-section">
	<div class="container">
	</div>
</section>

<section class="fixed-background">
        <div class="certificate-gallery">
            <img src="/guestassets/images/logo/cert-1.webp" alt="Certificate 1" class="certificate">
            <img src="/guestassets/images/logo/cert-3.webp" alt="Certificate 2" class="certificate">
            <img src="/guestassets/images/logo/cert-4.webp" alt="Certificate 3" class="certificate">
        </div>
    </section>

<section class="terms-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12 mx-auto">
                <div class="activity-head" data-aos="zoom-in">
                	<p><span>For Information</span></p>
                    <h2 class="title-head">Terms And Conditions</h2>
                </div>
            </div>

			<div class="accordion accordion-flush" id="accordionFlushExample">

    			<div class="accordion-item rounded-3 border-0 shadow mb-2">
			      	<h2 class="accordion-header">
			        	<button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
			          Payments
			        	</button>
			      	</h2>
      				<div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
        				<div class="accordion-body">
          					<p class="gn-pgh">For all the services contracted, certain advance payment should be made to hold the booking, on confirmed basis & the balance amount can be paid either before your departure from your country or upon arrival in INDIA but definitely before the commencement of the services. Management personnels hold the right to decide upon the amount to be paid as advance payment, based on the nature of the service & the time left for the commencement of the service.</p>
          					<p class="gn-pgh">Apart from above in some cases like Special Train Journeys, hotels or resorts bookings during the peak season (X-Mas, New Year), full payment is required to be sent in advance.</p>
        				</div>
      				</div>
    			</div>
			    <div class="accordion-item rounded-3 border-0 shadow mb-2">
				    <h2 class="accordion-header">
				        <button class="accordion-button down-acc border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
				          Cancellation Policy
				        </button>
				    </h2>
			      	<div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
			        	<div class="accordion-body">
			          		<p class="gn-pgh">In the event of cancellation of tour / travel services due to any avoidable / unavoidable reason/s we must be notified of the same in writing. Cancellation charges will be effective from the date we receive advice in writing, and cancellation charges would be as follows</p>
			          		<ul>
			          			<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 45 days prior to arrival: 10% of the Tour / service cost</li>
			          			<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 15 days prior to arrival: 25% of the Tour / service cost</li>
			          			<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 07 days prior to arrival: 50% of the Tour / service cost</li>
			          			<li><i class="fa fa-hand-o-right" aria-hidden="true"></i> 48 hours prior to arrival OR No Show: No Refund</li>
			          		</ul>
			          	</div>
			      	</div>
			    </div>
    			<div class="accordion-item rounded-3 border-0 mb-2 shadow">
      				<h2 class="accordion-header">
        				<button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
				          Wildlife Safaris Cancellation
				        </button>
      				</h2>
      				<div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
				        <div class="accordion-body">
				           <p class="gn-pgh">All the wildlife safaris booked into any of Indian Wildlife National Park/Sanctuaries are non refundable. Even date change request will be considered as cancellation and no payment will be refunded/ adjusted against it.</p>
				        </div>
      				</div>
    			</div>
    			<div class="accordion-item rounded-3 border-0 mb-2 shadow">
      				<h2 class="accordion-header">
        				<button class="accordion-button border-bottom collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseThree">
				          Our Liabilities & Limitations
				        </button>
      				</h2>
      				<div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
				        <div class="accordion-body">
				           <p class="gn-pgh">All itineraries are sample itineraries, intended to give you a general idea of the likely trip schedule. Numerous factors such as weather, road conditions, the physical ability of the participants etc. may dictate itinerary changes either before the tour or while on the trail. We reserve the right to change any schedule in the interest of the trip participants' safety, comfort & general well being.</p>
				           <p class="gn-pgh">Our rates are based on the prevailing rates as negotiated by us with the hotels, airlines etc. Hotels and Airlines retain the right to modify the rates without notice. In case of such changes the rates quoted before the modification, can be changed by us according to the modifications by hotels or airlines. All hotel bookings are based on usual check in and check out time of the hotels until unless indicated in the itinerary.</p>
				           <p class="gn-pgh">We shall not be responsible for any loss, injury or damage to person, property, or otherwise in connection with any accommodation, transportation or other services, resulting – directly or indirectly – from any act of GOD, dangers, fire, accident, breakdown in machinery or equipment, breakdown of transport, wars, civil disturbances, strikes, riots, thefts, pilferages, epidemics, medical or custom department regulations, defaults, or any other causes beyond our control.</p>
				        </div>
      				</div>
    			</div>
  			</div>
  		</div>
  	</div>
</section>
@endsection