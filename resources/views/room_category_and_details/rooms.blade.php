@extends('layouts.master')
@section('title')
    Rooms
@endsection
@section('content')
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="">Room Details</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->


    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
            @foreach($room_category as $room)
                    <div class="col-lg-4 col-md-6">
                    <div class="room-item">
                    
                    <!-- Asad code starts here -->
                    <img src="{{str_replace('/hotel/','/pms/', asset(str_replace(' ', '%20', $files[$room->id]->path.$files[$room->id]->filename)))}}" class="w-100">
                    <!-- Asad code ends here -->
                        <!-- <img src="{{ asset('assets/img/room/room-1.jpg') }}" alt=""> -->
                        <div class="ri-text">
                            <h4>{!!$room->category !!}</h4>
                            <h3>{{$room->price}}$<span>/Pernight</span></h3>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>{!! $room->size !!} ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td> Max person {!! $room->people_adult + $room->people_child !!}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>King Beds</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>{!! $room->facilities !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('room-details', ['id'=>$room->id]) }}" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>

            @endforeach
                
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->
@endsection
