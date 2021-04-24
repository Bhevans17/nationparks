@extends('layout.app')
@section('content')

<!-- banner -->
<section class="banner">
    <div class="container">
        <div class="row banner-grids">
            <div class="col-lg-6 banner-info-w3ls">
                <h2>Explore The National Parks
                </h2>
                <h3 class="mb-3">Nationparks helps you plan your next hiking trip!</h3>
                <p class="mb-4"> Click the Near Me button and press allow so we can find the nearest national
                    parks. </p>
                <a href="#" id="near-me" class="btn">Find Parks Near Me</a>
            </div>

        </div>
    </div>
</section>
<!-- //banner -->
</div>
</section>
<!-- //ab -->
<!-- portfolio -->
<section class="portfolio-flyer py-5" id="gallery">
    <div class="container pt-lg-3 pb-md-5">
        <div class="row">
            <div id='map' style='width: 400px; height: 300px;'></div>
        </div>
        <h3 class="tittle  text-center my-lg-5 my-3">Our Recent Tours</h3>
        <div class="row news-grids pb-lg-5 mt-3 mt-lg-5">
            <div class="col-lg-4 gal-img">
                <div class="gal-info">
                    <a href="#gal1"><img src="images/1.jpg" alt="news image" class="img-fluid"></a>
                    <div class="property-info-list">
                        <div class="detail">
                            <h4 class="title">
                                <a href="about.html">Germany</a>
                            </h4>
                            <div class="location mt-2">
                                <a href="about.html">
                                    <span class="fa fa-map-marker"></span> Netherlands / Belgium
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span class="fa fa-clock-o"></span> 3 days
                                </li>
                                <li>
                                    <span class="fa fa-clock-o"></span> 2 nights
                                </li>
                            </ul>
                        </div>
                        <div class="footer-properties">
                            <a class="admin" href="#">
                                <span class="fa fa-user"></span> Lorem Ipsum
                            </a>
                            <span class="year text-right"> <span class="fa fa-calendar"></span> 2 months ago</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 gal-img">
                <div class="gal-info">
                    <a href="#gal1"><img src="images/1.jpg" alt="news image" class="img-fluid"></a>
                    <div class="property-info-list">
                        <div class="detail">
                            <h4 class="title">
                                <a href="about.html">Germany</a>
                            </h4>
                            <div class="location mt-2">
                                <a href="about.html">
                                    <span class="fa fa-map-marker"></span> Netherlands / Belgium
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span class="fa fa-clock-o"></span> 3 days
                                </li>
                                <li>
                                    <span class="fa fa-clock-o"></span> 2 nights
                                </li>
                            </ul>
                        </div>
                        <div class="footer-properties">
                            <a class="admin" href="#">
                                <span class="fa fa-user"></span> Lorem Ipsum
                            </a>
                            <span class="year text-right"> <span class="fa fa-calendar"></span> 2 months ago</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 gal-img">
                <div class="gal-info">
                    <a href="#gal1"><img src="images/1.jpg" alt="news image" class="img-fluid"></a>
                    <div class="property-info-list">
                        <div class="detail">
                            <h4 class="title">
                                <a href="about.html">Germany</a>
                            </h4>
                            <div class="location mt-2">
                                <a href="about.html">
                                    <span class="fa fa-map-marker"></span> Netherlands / Belgium
                                </a>
                            </div>
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span class="fa fa-clock-o"></span> 3 days
                                </li>
                                <li>
                                    <span class="fa fa-clock-o"></span> 2 nights
                                </li>
                            </ul>
                        </div>
                        <div class="footer-properties">
                            <a class="admin" href="#">
                                <span class="fa fa-user"></span> Lorem Ipsum
                            </a>
                            <span class="year text-right"> <span class="fa fa-calendar"></span> 2 months ago</span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //portfolio -->
<!-- popup-->
<div id="gal1" class="pop-overlay animate">
    <div class="popup">
        <img src="images/1.jpg" alt="Popup Image" class="img-fluid" />

        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->

<!-- popup-->
<div id="gal2" class="pop-overlay animate">
    <div class="popup">
        <img src="images/2.jpg" alt="Popup Image" class="img-fluid" />

        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal3" class="pop-overlay animate">
    <div class="popup">
        <img src="images/3.jpg" alt="Popup Image" class="img-fluid" />

        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup3 -->
<!-- popup-->
<div id="gal4" class="pop-overlay animate">
    <div class="popup">
        <img src="images/4.jpg" alt="Popup Image" class="img-fluid" />

        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal5" class="pop-overlay animate">
    <div class="popup">
        <img src="images/5.jpg" alt="Popup Image" class="img-fluid" />

        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal6" class="pop-overlay animate">
    <div class="popup">
        <img src="images/6.jpg" alt="Popup Image" class="img-fluid" />

        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->


<!--//portfolio-->
<!-- /hand-crafted -->
<section class="hand-crafted py-5">
    <div class="container py-lg-5">
        <div class="row accord-info">
            <div class="col-lg-6 pl-md-5">

                <h3 class="mb-md-5 tittle">Plan Your Holiday Trip Now Exceptional Adventure</h3>

                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla
                    mollis dapibus nunc, ut rhoncus turpis sodales quis.Integer sit amet mattis quam, sit amet
                    ultricies velit. Praesent ullamcorper dui turpis.</p>
                <p class="mt-3">Integer sit amet mattis quam, sit amet ultricies velit. Praesent ullamcorper dui
                    turpis.
                    <p>
            </div>
            <div class="col-lg-6 banner-image">
                <div class="img-effect">
                    <img src="images/img3.jpg" alt="" class="img-fluid image1">
                </div>

            </div>

        </div>
    </div>
</section>
<!-- //hand-crafted -->
@endsection