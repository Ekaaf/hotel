@extends('layouts.master')

@section('content')


<div class="container mt-3">
    <div class="row">
        <!-- Left Column -->
        <div class="col-md-8">
            <h4>Guest Information</h4>
            <form>
                <!-- Guest Name -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="firstName">First Name</label>
                        <input type="text" class="form-control" id="firstName">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" class="form-control" id="lastName">
                    </div>
                </div>

                <!-- Additional Info -->
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input type="tel" class="form-control" id="mobile">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="email@example.com">
                </div>

                <!-- Identity Information -->
                <h4>Identity Information</h4>
                <div class="form-group">
                    <label for="identityNo">Identity No.</label>
                    <input type="text" class="form-control" id="identityNo">
                </div>

                <!-- Pick Up & Drop Off Information -->
                <h4>Pick Up Information</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="pickupDate">Date</label>
                        <input type="date" class="form-control" id="pickupDate">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="pickupTime">Time</label>
                        <input type="time" class="form-control" id="pickupTime">
                    </div>
                </div>

                <h4>Drop Off Information</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="dropOffDate">Date</label>
                        <input type="date" class="form-control" id="dropOffDate">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="dropOffTime">Time</label>
                        <input type="time" class="form-control" id="dropOffTime">
                    </div>
                </div>

                <!-- Payment -->
                <h4>Payment</h4>
                <p>Online payment options will be redirected to our secure online payment site.</p>

                <!-- Terms and Conditions -->
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms">
                        <label class="form-check-label" for="terms">
                            I acknowledge and accept the Terms of Cancellation Policy.
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
        </div>
        
        <!-- Right Column -->
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0 text-center">Booking Summary</h4>
                </div>
                <div class="card-body" id="summary_div" style="display:none;">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <b style="color:#495057;margin-right: 10%;">Dates:</b> 
                            <span id="date_range">2024-05-13&nbsp; - &nbsp;2024-05-14</span>
                        </li>
                        <li class="list-group-item">
                            <b style="color:#495057;margin-right: 10%;">Nights:</b> 
                            <span id="no_of_days">1</span>
                        </li>
                        <li class="list-group-item" id="booked_room">                                                        
                        </li>
                        <li class="list-group-item">
                            <b style="color:#495057;margin-right: 10%;">Total:</b> 
                            <b class="float-end" style="font-size: 20px;color: #8c68cd" id="final_total"></b>
                        </li>
                    </ul>
                    <button type="button" class="btn btn-primary waves-effect waves-light w-100" onclick="bookNow();">Book Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection