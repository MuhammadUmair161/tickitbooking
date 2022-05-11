@extends('layouts\user\layout2')
@section('title', 'Contact')
@section('main')
<section class="contact-section padding-top padding-bottom">
    <div class="contact-container">
        <div class="bg-thumb bg_img" data-background="{{ asset('user/assets/images/contact/contact.jpg') }}" style="background-image: url(&quot;user/assets/images/contact/contact.jpg&quot;);"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <div class="section-header-3 left-style">
                        <span class="cate">contact us</span>
                        <h2 class="title">get in touch</h2>
                        <p>We’d love to talk about how we can work together. Send us a message below and we’ll respond as soon as possible.</p>
                    </div>
                    <form class="contact-form" id="contact_form_submit">
                        <div class="form-group">
                            <label for="name">Name <span>*</span></label>
                            <input type="text" placeholder="Enter Your Full Name" name="name" id="name" required="">
                        </div>
                        <div class="form-group">
                            <label for="email">Email <span>*</span></label>
                            <input type="text" placeholder="Enter Your Email" name="email" id="email" required="">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject <span>*</span></label>
                            <input type="text" placeholder="Enter Your Subject" name="subject" id="subject" required="">
                        </div>
                        <div class="form-group">
                            <label for="message">Message <span>*</span></label>
                            <textarea name="message" id="message" placeholder="Enter Your Message" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message">
                        </div>
                    </form>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="padding-top padding-bottom contact-info">
                        <div class="info-area">
                            <div class="info-item">
                                <div class="info-thumb">
                                    <img src="{{ asset('user/assets/images/contact/contact01.png') }}" alt="contact">
                                </div>
                                <div class="info-content">
                                    <h6 class="title">phone number</h6>
                                    <a href="Tel:82828282034">+1234 56789</a>
                                </div>
                            </div>
                            <div class="info-item">
                                <div class="info-thumb">
                                    <img src="{{ asset('user/assets/images/contact/contact02.png') }}" alt="contact">
                                </div>
                                <div class="info-content">
                                    <h6 class="title">Email</h6>
                                    <a href="Mailto:info@gmail.com">info@Boleto .com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
