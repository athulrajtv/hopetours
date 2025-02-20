@extends('guest.layouts.master')
@section('body')
<section class="page-section contact-banner bg-ppts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
              <h3 class="banner-bg">Contact Us</h3>
            </div>
        </div>
    </div>
</section>

<section class="contact-info">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="contact-head">
                <div class="activity-head advent-bg" data-aos="zoom-in">
                    <p><span>Contact Info</span></p>
                    <h2 class="title-head">Our Contact Information</h2>
                </div>
            </div>
          </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="contact-box" data-aos="fade-up">
                    <div class="contact-icon">
                        <img src="/guestassets/images/icons/icon1.webp" alt="icon">
                        <h4>Our Location</h4>
                        <a href="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1222.9337904748595!2d144.9529083!3d-37.8199805!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d52754eaecb%3A0x22f367daf52cbd47!2s21%20King%20St%2C%20Melbourne%20VIC%203000%2C%20Australia!5e1!3m2!1sen!2sin!4v1723455328940!5m2!1sen!2sin" data-aos="flip-left">2nd Floor | Green Fly Building |Paravoor - Nedumbassery Airport Road | Aduvassery |Ernakulam | Pin:683578</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="contact-box" data-aos="zoom-in-up">
                    <div class="contact-icon">
                        <img src="/guestassets/images/icons/icon3.webp" alt="icon">
                        <h4>Our Email</h4>
                        <a href="mailto:hopetravelpartner@gmail.com" data-aos="flip-left">hopetravelpartner@gmail.com</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="contact-box" data-aos="zoom-in-up">
                    <div class="contact-icon">
                        <img src="/guestassets/images/icons/icon2.webp" alt="icon">
                        <h4>Phone Number</h4>
                        <a href="tel:+918111925661" data-aos="flip-left">(+91 8111 925 661) </a><br>
                        <a href="tel:04842925661" data-aos="flip-left">(+914842925661) </a>
                    </div>
                </div>
            </div>
      
            
        </div>
    </div>
</section>

<section class="contact-form">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-12 clr-pad">
                <div class="contact-imgs">
                    <img src="/guestassets/images/banner/cont-imgsection.webp"  class="img-fluid" alt="Happy group of friends">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="contact_content">
                    <!-- Display Success and Error Messages -->
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <h6 class="text-white" data-aos="zoom-in">Get In Touch</h6>
                    <h2 class="text-white" data-aos="zoom-in-up">Send us a Message</h2>
                    <form class="contactpage" method="post" action="{{ route('contact') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="text" class="form-control fm-section" data-aos="fade-right" name="name" placeholder="Name"  value="{{ old('name') }}">
                                @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="email" class="form-control fm-section" data-aos="fade-right" name="email" placeholder="Email"  value="{{ old('email') }}">
                                @error('email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="tel" class="form-control fm-section" data-aos="fade-right" name="phone" placeholder="Phone"  value="{{ old('phone') }}">
                                @error('phone')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <input type="text" class="form-control fm-section" data-aos="fade-right" name="subject" placeholder="Subject"  value="{{ old('subject') }}">
                                @error('subject')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                <textarea class="form-control fm-textar" data-aos="fade-right" name="message" rows="5" placeholder="Message">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn sub_now">Submit</button>
                            </div>
                        </div>
                    </form>
                    <figure class="contact-bottomimage mb-0">
                        <img src="/guestassets/images/banner/contact-bottomimage.png" alt="image" class="img-fluid">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="map-content">
    <div class="container">
        <div class="row"> 
            <div class="col-lg-12 col-md-12 col-sm-12 col-12 " >
                <div class="google-map" data-aos="fade-up">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3732.979505463599!2d76.325237!3d10.1563342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0805131ffe58df%3A0xeb5a71e25215a1a6!2sHope%20Tours%20and%20Travels!5e1!3m2!1sen!2sin!4v1733384039776!5m2!1sen!2sin" width="100%" height="450" style="border:0; border-radius: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection