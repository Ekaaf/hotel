@extends('layouts.master')
@section('title')
Room Details
@endsection
<!-- Header End -->

@section('content')
<!-- Breadcrumb Section Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <h2>Our Rooms</h2>
                    <div class="bt-option">
                        <a href="{{ route('room-category') }}">Rooms</a>
                        <span>Room Details</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .carousel-indicators{
        top: 92% !important;
    }
    .carousel-indicators li{
        text-indent: 0 !important;
        height: auto !important;
        top: 92% !important;
        width: 100%;
        opacity: 1 !important;
    }
</style>
<!-- Breadcrumb Section End -->

<!-- Room Details Section Begin -->
<section class="room-details-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="room-details-item">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-interval="false" data-ride="carousel">
                        <ol class="carousel-indicators">
                            @foreach($files as $key => $file)
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="{{ $key == 0 ? 'active' : '' }}">
                                <img src="{{str_replace('/hotel/','/pms/', asset(str_replace(' ', '%20', $file->path.$file->filename)))}}">
                            </li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner">
                            @foreach($files as $key => $file)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{str_replace('/hotel/','/pms/', asset(str_replace(' ', '%20', $file->path.$file->filename)))}}" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5></h5>
                                    <p></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                    <br>    
                    <div class="rd-text" style="margin-top:20%;">
                        <div class="rd-title">
                            <h3>{{$room_category_by_id->category}}</h3>
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
                        <h2>{!!$room_category_by_id->price!!}$<span>/Pernight</span></h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="r-o">Size:</td>
                                    <td>{!!$room_category_by_id->size!!} ft</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Adults:</td>
                                    <td>Max Adults {!!$room_category_by_id->people_adult!!}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Children:</td>
                                    <td>Max Children {!!$room_category_by_id->people_child!!}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">No. of Bed:</td>
                                    <td>{!!$room_category_by_id->bed!!}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Discount:</td>
                                    <td>{!!$room_category_by_id->discount!!}</td>
                                </tr>
                                <!-- Insertion starts here -->
                                <tr>
                                    <td class="r-o">Package :</td>
                                    <td>{!!$room_category_by_id->package!!}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Facilities :</td>
                                    <td>{!!$room_category_by_id->facilities!!}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Check In Time :</td>
                                    <td>{{$room_category_by_id->check_in}}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Check Out Time :</td>
                                    <td>{{$room_category_by_id->check_out}}</td>
                                </tr>                                    
                                <!-- Insertion ends here -->
                                <tr>
                                    <td class="r-o">Services:</td>
                                    <td>{!!$room_category_by_id->facilities!!}</td>
                                </tr>
                                <tr>
                                    <td class="r-o">Description:</td>
                                </tr>
                            </tbody>
                        </table>
                        <p>{!! $room_category_by_id->description !!}</p>
                        <table>
                            <tbody>                            
                            <tr>
                                <td class="r-o">Check In Instructions :</td>
                                <td>{!!$room_category_by_id->check_in_instruction!!}</td>
                            </tr>
                            <tr>
                                <td class="r-o">Cancellation Policy :</td>
                                <td>{!!$room_category_by_id->cancellation_policy!!}</td>
                            </tr>
                            </tbody>
                        </table>
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
                    <form action="{{ route('Hotel.Reservation.View') }}" method="GET">
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
                            <label for="adult_guest">Adult Guests:</label>
                            <select id="adult_guest" name="adult_guest">
                                <option value="">{!! $room_category_by_id->people_adult !!} Adults</option>
                                <!-- @for ($i = 1; $i <= $room_category_by_id->people_adult; $i++) -->
                                    <!-- <option value="{{ $i }}">{{ $i }} {{ $room_category_by_id->people_adult == 1 ? 'Adult' : 'Adults' }}</option> -->
                                <!-- @endfor -->
                            </select>
                        </div>
                        <div class="select-option">
                            <label for="child_guest">Child Guests:</label>
                            <select id="child_guest">
                                <option value="">{!! $room_category_by_id->people_child !!} Adults</option>
                                <!-- @for ($i = 1; $i <= $room_category_by_id->people_child; $i++) -->
                                    <!-- <option value="{{ $i }}">{{ $i }} Child</option> -->
                                <!-- @endfor -->
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
@endsection