@extends('layout.app')

@section('content')
<div class="block-31" style="position: relative;">
    <div class="owl-carousel loop-block-31 ">
        <div class="block-30 item" style="background-image: url('{{ asset("site/images/ivhobeinn_executive.jpeg") }}');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="subheading-sm">Welcome</span>
                        <h2 class="heading">Enjoy a Serene Experience</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-30 item" style="background-image: url('{{ asset("site/images/ivhobeinn_deluxe.jpeg") }}');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="subheading-sm">Welcome</span>
                        <h2 class="heading">Simple &amp; Elegant</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-30 item" style="background-image: url('{{ asset("site/images/ivhobeinn_classic.jpg") }}');" data-stellar-background-ratio="0.5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-10">
                        <span class="subheading-sm">Welcome</span>
                        <h2 class="heading">Simple &amp; Elegant</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">

    <div class="row site-section" id="services">
        <div class="col-md-12">
            <div class="row mb-5">
                <div class="col-md-7 section-heading">
                    <span class="subheading-sm">Services</span>
                    <h2 class="heading">Facilities &amp; Services</h2>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-beer"></span></div>
                <div class="media-body">
                    <h3 class="heading">In House Bar</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon">
                    <i class="fas fa-church"></i>
                </div>
                <div class="media-body">
                    <h3 class="heading">In House Chapel</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-tint"></span></div>
                <div class="media-body">
                    <h3 class="heading">Clean Water</h3>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-parking"></span></div>
                <div class="media-body">
                    <h3 class="heading">Ample Parking Space</h3>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-lightbulb"></span></div>
                <div class="media-body">
                    <h3 class="heading">40kva & 7.5 kva generators to ensure light</h3>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-tree"></span></div>
                <div class="media-body">
                    <h3 class="heading">Serene Environment</h3>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-palette"></span></div>
                <div class="media-body">
                    <h3 class="heading">Fine Art Collection</h3>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-wine-bottle"></span></div>
                <div class="media-body">
                    <h3 class="heading">Complementary Bottle Water</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="media block-6">
                <div class="icon"><span class="fas fa-utensils"></span></div>
                <div class="media-body">
                    <h3 class="heading">Restaurant</h3>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="site-section block-13 bg-light" id="rooms">
    <div class="container">
        <div class="row">
            <div class="col-md-7 section-heading">
                <span class="subheading-sm">Featured Rooms</span>
                <h2 class="heading">Rooms</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-13 owl-carousel">
                    <div class="item">
                        <div class="block-34">
                            <div class="image">
                                <a href="#"><img src="{{ asset('/site/images/ivhobeinn_classic.jpg') }}" alt="Image placeholder"></a>
                            </div>
                            <div class="text">
                                <h2 class="heading">Classic</h2>
                                <div class="price"><span class="number">&#8358 12000</span><sub>/per night</sub></div>
                                <ul class="specs">
                                    <li><strong>Facilities:</strong> A/C,Shower,Telephone,Towel,Tv</li>
                                </ul>
                                <ul class="specs">
                                    <li><strong>Check-In:</strong> 12:00pm </li>
                                    <li><strong>Check-Out:</strong> 2:00pm</li>
                                </ul>
                                <p><a href="room-classic.html" class="btn py-3 px-3 btn-primary">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="block-34">
                            <div class="image">
                                <a href="#"><img src="{{ asset('site/images/ivhobeinn_deluxe.jpeg') }}" alt="Image placeholder"></a>
                            </div>
                            <div class="text">
                                <h2 class="heading">Deluxe</h2>
                                <div class="price"><span class="number">&#8358 14000</span><sub>/per night</sub></div>
                                <ul class="specs">
                                    <li><strong>Facilities:</strong> A/C,Shower,Telephone,Work Space,Towel,Tv</li>
                                </ul>
                                <ul class="specs">
                                    <li><strong>Check-In:</strong> 12:00pm </li>
                                    <li><strong>Check-Out:</strong> 2:00pm</li>
                                </ul>
                                <p><a href="room-deluxe.html" class="btn py-3 px-3 btn-primary">Learn More</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="block-34">
                            <div class="image">
                                <a href="#"><img src="{{ asset('site/images/ivhobeinn_executive.jpeg') }}" alt="Image placeholder"></a>
                            </div>
                            <div class="text">
                                <h2 class="heading">Executive Deluxe</h2>
                                <div class="price"><span class="number">&#8358 16000</span><sub>/per night</sub></div>
                                <ul class="specs">
                                    <li><strong>Facilities:</strong> A/C,Shower,Telephone,Work Space,Towel,Tv</li>
                                </ul>
                                <ul class="specs">
                                    <li><strong>Check-In:</strong> 12:00pm </li>
                                    <li><strong>Check-Out:</strong> 2:00pm</li>
                                </ul>
                                <p><a href="room-executive-deluxe.html" class="btn py-3 px-3 btn-primary">Learn More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- .col-md-12 -->
        </div>
    </div>
</div>

<div class="site-section block-13 bg-light" id="policy">
    <div class="container">
        <div class="row">
            <div class="col-md-7 section-heading">
                <span class="subheading-sm">Policy</span>
                <h2 class="heading">Policy</h2>

                <p>Check-In Time 12:00 PM | Check-Out Time 02:00 PM</p>

                <h3>Reservation Policy</h3>
                <p>
                    Group reservations / long stay attracts a deposit of 50% of the total amount of reserved rooms.
                    All reservations will be acknowledged, but can only be guaranteed through pre-payment or payment on arrival.
                </p>

                <h3>Cancellation Policy</h3>
                <p>Cancellation of a reservation less than 24 hours before the check in time will attract a charge of 100% of the room rate</p>
            </div>
        </div>

    </div>
</div>

@endsection
