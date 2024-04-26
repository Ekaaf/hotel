@extends('layouts.master')
@section('title')
Room Details
@endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Rooms</h2>
                    <div class="bt-option">
                        <a href="{{ route('rooms') }}">Rooms</a>
                        <span>Room Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumb Section End -->

<!-- Room Details Section Begin -->
<section class="room-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="room-details-item">

                    <!-- Asad Code Starts Here -->
                    <!-- <img src="{{ asset('assets/img/room/room-details.jpg') }}" alt=""> -->


                    <style>
                        .carousel-indicators img {
                            width: 70px;
                            display: block;
                        }

                        .carousel-indicators button {
                            width: max-content !important;
                        }

                        .carousel-indicators {
                            position: unset;
                        }
                    </style>
                    <div id="carouselDemo" class="carousel slide" data-bs-wrap="true" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach($files as $key => $file)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                               <img src="{{str_replace('/hotel/','/pms/', asset(str_replace(' ', '%20', $file->path.$file->filename)))}}" class="w-100">
                                <!-- <div class="carousel-caption">
                                    <h5>Title Slide {{ $key }}</h5>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, nemo?
                                    </p>
                                </div> -->
                            </div>
                            @endforeach
                        </div>

                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselDemo"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>

                        <button class="carousel-control-next" type="button" data-bs-target="#carouselDemo"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>

                        <div class="carousel-indicators">
                            @foreach($files as $key => $file)
                            <button type="button" data-bs-target="#carouselDemo" data-bs-slide-to="{{ $key }}"
                                class="{{ $key == 0 ? 'active' : '' }}">
                                <!-- <img src="{{ asset($file->path.'/'.$file->filename) }}" alt="Slide {{ $key }}"> -->
                                <img src="{{str_replace('/hotel/','/pms/', asset(str_replace(' ', '%20', $file->path.$file->filename)))}}" alt="Slide {{ $key }}">
                            </button>
                            @endforeach
                        </div>
                    </div>


                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

                    <!-- Asad Code Ends Here -->



                    <br>    
                    <div class="rd-text">
                        <div class="rd-title">
                            <h3>{{$rooms -> category}}</h3>
                            <div class="rdt-right">
                                <div class="rating">
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star"></i>
                                    <i class="icon_star-half_alt"></i>
                                </div>
                                <a href="{{ route('login') }}">Booking Now</a>
                            </div>
                        </div>
                        <h2>{!!$rooms -> price!!}$<span>/Pernight</span></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td>{!!$rooms->size!!} ft</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Capacity:</td>
                                    <td>Max person {!!$rooms->people_adult + $rooms->people_child!!}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Bed:</td>
                                    <td>King Beds</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td>{!!$rooms->facilities!!}</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>{!! $rooms->description !!}</p>
                    </div>
                </div>
                <div class="rd-reviews">
                    <h4>Reviews</h4>
                    <div class="review-item">
                        <div class="ri-pic">
                            <img src="{{ asset('assets/img/room/avatar/avatar-1.jpg') }}" alt="">
                        </div>
                        <div class="ri-text">
                            <span>27 Aug 2019</span>
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5>Brandon Kelley</h5>
                            <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                magnam.</p>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="ri-pic">
                            <img src="{{ asset('assets/img/room/avatar/avatar-2.jpg') }}" alt="">
                        </div>
                        <div class="ri-text">
                            <span>27 Aug 2019</span>
                            <div class="rating">
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star"></i>
                                <i class="icon_star-half_alt"></i>
                            </div>
                            <h5>Brandon Kelley</h5>
                            <p>Neque porro qui squam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                                adipisci velit, sed quia non numquam eius modi tempora. incidunt ut labore et dolore
                                magnam.</p>
                        </div>
                    </div>
                </div>
                <div class="review-add">
                    <h4>Add Review</h4>
                    <form action="#" class="ra-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Name*">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email*">
                            </div>
                            <div class="col-lg-12">
                                <div>
                                    <h5>You Rating:</h5>
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                </div>
                                <textarea placeholder="Your Review"></textarea>
                                <button type="submit">Submit Now</button>
                                <br>
                                <br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="room-booking">
                    <h3>Your Reservation</h3>
                    <form action="#">
                        <div class="check-date">
                            <label for="date-in">Check In:</label>
                            <input type="text" class="date-input" id="date-in">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="check-date">
                            <label for="date-out">Check Out:</label>
                            <input type="text" class="date-input" id="date-out">
                            <i class="icon_calendar"></i>
                        </div>
                        <div class="select-option">
                            <label for="guest">Guests:</label>
                            <select id="guest">
                                <option value="">3 Adults</option>
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="room">Room:</label>
                            <select id="room">
                                <option value="">1 Room</option>
                            </select>
                        </div>
                        <button type="submit">Check Availability</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Room Details Section End -->

<!-- Footer Section Begin -->
@endsection