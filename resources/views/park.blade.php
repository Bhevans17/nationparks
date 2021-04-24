@extends('layout.app')

@section('content')
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
                    <a href="#gal1"><img src="{{ $data['images'][0] }}" alt="news image" class="img-fluid"></a>
                    <div class="property-info-list">
                        <div class="detail">
                            <p>{{ $data['images'][0] }}</p>
                            <p>latitude {{ $data['latitude'] }}</p>
                            <h4>
                                {{ $data['name'] }}
                            </h4>
                            <h6 class="text-secondary">{{ $data['designation'] }}</h6>
                            <div class="location mt-2">
                                <a href="about.html">
                                    <span class="fa fa-map-marker"></span><a
                                        href="{{ $data['url'] }}">{{ $data['fullName'] }}</a>
                                </a>
                            </div>
                        </div>
                        <div class="footer-properties">
                            <a class="admin" href="#">
                                <span class="fa fa-user"></span> {{ $data['description'] }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
<!-- //portfolio -->