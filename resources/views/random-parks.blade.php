@extends('layout.app')
@section('content')
<!-- portfolio -->
<section class="portfolio-flyer py-5" id="gallery">
    <div class="container pt-lg-3 pb-md-5">
        <h3 class="title  text-center my-lg-5 my-3">Random Parks</h3>
        <input type="text" class='form-control' placeholder='Search Parks'>
        <div class="row news-grids pb-lg-5 mt-3 mt-lg-5">
            <!-- Loop over random park data -->
            @foreach($parks as $park)
            <div class="col-lg-4 gal-img">
                <div class="gal-info">
                    <a href="#gal1"><img style="max-height: 200px; width: 100vw; background-size: cover;"
                            src="{{ $park['images'][0]['url'] }}" alt="news image" class="img-fluid"></a>
                    <div class="property-info-list">
                        <div class="detail">
                            <h4>
                                {{ $park['name'] }}
                            </h4>
                            <h6 class="text-secondary">{{ $park['designation'] }}</h6>
                            <div class="location mt-2">
                                <a href="about.html">
                                    <span class="fa fa-map-marker"></span><a
                                        href="{{ $park['url'] }}">{{ $park['fullName'] }}</a>
                                </a>
                            </div>
                        </div>
                        <div class="footer-properties">
                            <a class="admin" href="#">
                                <span class="fa fa-user"></span> {{ $park['description'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- /Loop over random park data -->
        </div>
    </div>
</section>
<!-- //portfolio -->
<!-- popup-->
<div id="gal1" class="pop-overlay animate">
    <div class="popup">
        <img src="images/2.jpg" alt="Popup Image" class="img-fluid" />
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
<!-- popup-->
<div id="gal7" class="pop-overlay animate">
    <div class="popup">
        <img src="images/7.jpg" alt="Popup Image" class="img-fluid" />
        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal8" class="pop-overlay animate">
    <div class="popup">
        <img src="images/8.jpg" alt="Popup Image" class="img-fluid" />
        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->
<!-- popup-->
<div id="gal9" class="pop-overlay animate">
    <div class="popup">
        <img src="images/9.jpg" alt="Popup Image" class="img-fluid" />
        <a class="close" href="#gallery">&times;</a>
    </div>
</div>
<!-- //popup -->
<!--//portfolio-->
@endsection