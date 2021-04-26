@extends('layout.app')

@section('content')
<!--/contact -->
<section class="ab-info-main py-md-5 py-5">
    <div class="container">
        <div class="inner-sec-w3pvt py-lg-5">
            <h3 class="tittle text-center mb-lg-5 mb-3 inner-tittle"> Contact Us</h3>
            <div class="contact-form mt-md-5">
                <div class="contact-form-inner mx-auto text-left">
                    <form name="contactform " id="contactform" method="POST" action="/contact">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 con-gd">
                                <div class="form-group">
                                    <label>Name</label>
                                    <br>
                                    @error('name') <span class='text-danger'>Please enter valid name</span> @enderror
                                    <input type="text" class="form-control @error('name') border-danger @enderror"
                                        id="name" placeholder="Enter Name" name="name">
                                </div>
                            </div>
                            <div class="col-lg-12 con-gd">
                                <div class="form-group">
                                    <label>Subject</label>
                                    <br>
                                    @error('subject') <span class='text-danger'>Please enter valid name</span> @enderror
                                    <input type="text" class="form-control @error('subject') border-danger @enderror"
                                        id="subject" placeholder="Subject" name="subject">
                                </div>
                            </div>
                            <div class="col-lg-12 con-gd">
                                <div class="form-group">
                                    <label>Email</label>
                                    <br>
                                    @error('email') <span class='text-danger'>Please enter valid email</span> @enderror

                                    <input type="email" class="form-control @error('email') border-danger @enderror"
                                        id="email" placeholder="Enter Email" name="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>How can we help?</label>
                            <br>
                            @error('message') <span class='text-danger'>Please enter valid message</span> @enderror
                            <textarea name="message" class="form-control @error('message') border-danger @enderror"
                                id="message" placeholder="Enter Your Message Here"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--//contact -->
@endsection