@extends('layout.app')

@section('content')
<!--/contact -->
<section class="ab-info-main py-md-5 py-5">
    <div class="container">
        <div class="inner-sec-w3pvt py-lg-5">
            <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"> Contact Us</h3>
            <p class="text-center px-lg-5" data-aos="fade-up">Integer sit amet mattis quam, sit amet ultricies velit.
                Praesent ullamcorper dui turpis,Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere
                cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.
            </p>
            <div class="contact-form mt-md-5">
                <div class="contact-form-inner mx-auto text-left">
                    <form name="contactform " id="contactform" method="post" action="#">
                        <div class="row">
                            <div class="col-lg-6 con-gd">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name"
                                        name="name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" id="name" placeholder="Enter Email"
                                        name="email">
                                </div>

                            </div>
                            <div class="col-lg-6 con-gd">

                                <div class="form-group">
                                    <label>Phone No.</label>
                                    <input type="text" class="form-control" id="phone" placeholder="Enter Phone no."
                                        name="phone">
                                </div>
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" id="name" placeholder="Subject"
                                        name="subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>How can we help?</label>
                            <textarea name="issues" class="form-control" id="iq"
                                placeholder="Enter Your Message Here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <div class="map mt-md-5">

                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1472190196783"
                            class="map" style="border:0" allowfullscreen=""></iframe> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//contact -->
@endsection