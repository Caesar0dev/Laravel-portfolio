@extends('layouts.app')
@section('content')
    <!-- ***** Breadcumb Area Start ***** -->
        <div class="mosh-breadcumb-area" style="background-image: url(theme-mario/img/core-img/breadcumb.png);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <div class="bradcumbContent">
                            <h2>Contact</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Say Hello</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Breadcumb Area End ***** -->

        <!-- ***** Contact Area Start ***** -->
        <section class="contact-area section_padding_100">
            <div class="container">
                <div class="row">
                    <!-- Contact Form Area -->
                    <div class="col-12 col-md-8">
                        <div class="contact-form-area">
                            <h2>Get in touch</h2>
                            <form action="#">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn mosh-btn mt-50" type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Contact Information -->
                    <div class="col-12 col-md-4">
                        <div class="contact-information">
                            <h2>Contact</h2>
                            <div class="single-contact-info d-flex">
                                <div class="contact-icon mr-15">
                                    <img src="{{ asset('theme-mario') }}/img/core-img/map.png" alt="">
                                </div>
                                <p>4127/ 5B-C Mislane Road,<br> Gibraltar, UK</p>
                            </div>
                            <div class="single-contact-info d-flex">
                                <div class="contact-icon mr-15">
                                    <img src="{{ asset('theme-mario') }}/img/core-img/call.png" alt="">
                                </div>
                                <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                            </div>
                            <div class="single-contact-info d-flex">
                                <div class="contact-icon mr-15">
                                    <img src="{{ asset('theme-mario') }}/img/core-img/message.png" alt="">
                                </div>
                                <p>office@yourbusiness.com</p>
                            </div>
                            <div class="contact-social-info mt-50">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ***** Contact Area End ***** -->

        <!-- Google Maps -->
        <div class="map-area">
            <div id="googleMap"></div>
        </div>
@endsection
        