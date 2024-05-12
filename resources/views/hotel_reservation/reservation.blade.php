@extends('layouts.master')
@section('title')
    Reservation
@endsection
@section('content')

<style type="text/css">
    .input-step{
        border: 1px solid #ced4da;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        overflow: visible;
        height: 37.5px;
        background: #fff;
        padding: 4px;
    }
    .input-step button {
        width: 1.4em;
        font-weight: 300;
        height: 100%;
        line-height: .1em;
        font-size: 1.4em;
        padding: .2em !important;
        background: #f3f6f9;
        color: #212529;
        border: none;
        border-radius: var(--vz-border-radius);
    }

    .input-step input {
        width: 2em;
        height: 100%;
        text-align: center;
        border: 0;
        background: 0 0;
        color: #212529;
    }

</style>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Reservation</h2>
                        <!-- <div class="bt-option">
                            <a href="">Room Details</a>
                            <span>Rooms</span>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->


    <section class="rooms-section spad">
        <div class="container">
            <form action="#" class="contact-form">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Check-In Date</label>
                            <input type="date" class="form-control" id="check_in" name="check_in">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label>Check-Out Date</label>
                            <input type="date" class="form-control" id="check_out" name="check_out">
                        </div>
                    </div>
                    <div class="col-lg-4 justify-content-center align-self-center">
                        <button type="button" class="btn btn-success align-middle" onclick="searchRooms();">Search</button>
                    </div>
                </div>
            </form>

            
            <div class="loader" id="loading_div"></div>
            
            <div class="card p-0" id="available_room_div" style="">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-8 pr-0 pl-1" id="room_list_div">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-4 px-1">
                                            <img class="img-thumbnail" src="https://www.dusairesorts.com/images/Spa-Closer-Banner.jpg">
                                        </div>
                                        <div class="col-sm-8 p-2 border rounded">
                                            <div>
                                                <h4 style="color:#8c68cd;">Sea View</h4>
                                                Room Capacity: 2 Adults 2 Children
                                                <div class="row pr-3">
                                                    <div class="col-sm-8">Room Rates Exclusive of Ser. Chg. &amp; VAT</div>
                                                    <div class="col-sm-4 p-2 border rounded">
                                                        <b style="color:#8c68cd;">From BDT 16000</b><br>Price for 2 Night
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-border mt-3 me-1 float-right" onclick="showInputPlus(this, 2, 2,3, 41)">Add Room</button>

                                                <div class="input-step mt-3 me-1 float-right border rounded" style="display:none;">
                                                    <button type="button" class="minus border rounded" onclick="decrement(this, 41);">–</button>
                                                    <input type="text" class="product-quantity" value="0" min="0" max="5" readonly>
                                                    <button type="button" class="plus border rounded" onclick="increment(this, 2, 2, 3, 41);">+</button>
                                                </div>
                                            </div>
                                            <button class="btn btn-success btn-border mt-3 me-1 float-right confirm-button" style="display:none;" onclick="confirmRoom(this, 41, 'Sea View', 2, 2, 16000);">Confirm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="text-center">Booking Summary</h4>
                                    <br>
                                    <div id="summary_div" style="display:none;">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <b style="color:#495057;margin-right: 10%;">Dates:</b> 
                                            <span id="date_range">2024-05-09-2024-05-11</span>
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#495057;margin-right: 10%;">Nights:</b> 
                                            <span id="no_of_days">2</span>
                                        </li>
                                        <li class="list-group-item" id="booked_room">
                                        </li>
                                        <li class="list-group-item">
                                            <b style="color:#495057;margin-right: 10%;">Total:</b> 
                                            <b class="float-end" style="font-size: 20px;color: #8c68cd" id="final_total">BDT 16000</b>
                                        </li>
                                        <button type="button" class="btn btn-primary waves-effect waves-light w-100" onclick="bookNow();">Book Now</button>
                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->

    <!-- Footer Section Begin -->

@endsection

@section('script')
<script>
    $(document).ready(function() {
        // searchRooms();
    });
    var room_categories = [];
    var check_in = '';
    var check_out = ''
    function searchRooms(){
        $("#available_room_div").hide();
        $("#loading_div").show();

        check_in = $("#check_in").val();
        check_out = $("#check_out").val();
        check_in = '2024-05-09';
        check_out = '2024-05-11';
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'search-room-category',
            data: {
              check_in : check_in,
              check_out : check_out,
            },
            dataType: 'json',
        })
        .done(function (data) {
            console.log(data)
            var dateList = getdateList(check_in, check_out);
            var available_rooms = data.available_rooms;
            var room_rent = data.room_category_rent_arr;
            var length = dateList.length;
            
            $("#room_list_div").empty();
            $("#booked_room").empty();
            var html = "";
            $.each(available_rooms, function(i, item) {
                var room_price_rent = 0;
                

                if(room_rent[item.id]){
                    for(var i=0; i<length; i++){
                        if(room_rent[item.id][dateList[i]]){
                            room_price_rent += parseInt(room_rent[item.id][dateList[i]].net_price);
                        }
                        else{
                            room_price_rent +=parseInt(item.price)
                        }
                    }
                }
                else{
                    room_price_rent += parseInt(item.price*length)
                }
                console.log(room_price_rent)
                html += '<div class="card">'+
                            '<div class="card-body">'+
                                '<div class="row">'+
                                    '<div class="col-sm-4 px-1">'+
                                        '<img class="img-thumbnail" src="'+pmsUrl+item.path+item.filename+'">'+
                                    '</div>'+
                                    '<div class="col-sm-8 p-2 border rounded">'+
                                    '<div>'+
                                        '<h4 style="color:#8c68cd;">'+item.category+'</h4>'+
                                        'Room Capacity: '+item.people_adult+' Adults '+item.people_child+' Children'+
                                        '<div class="row pr-3">'+
                                            '<div class="col-sm-8">'+
                                                'Room Rates Exclusive of Ser. Chg. & VAT'+
                                            '</div>'+
                                            '<div class="col-sm-4 p-2 border rounded">'+
                                                '<b style="color:#8c68cd;">From BDT '+room_price_rent+'</b>'+
                                                '<br>Price for '+length+' Night'+
                                            '</div>'+
                                        '</div>'+
                                        '<button class="btn btn-primary btn-border mt-3 me-1 float-right" onclick="showInputPlus(this, '+item.people_adult+', '+item.people_child+','+item.no_of_rooms+', '+item.id+')">'+
                                            'Add Room'+
                                        '</button>'+
                                        '<div class="input-step mt-3 me-1 float-right border rounded" style="display:none;">'+
                                            '<button type="button" class="minus border rounded" onclick="decrement(this, '+item.id+');">–</button>'+
                                            '<input type="text" class="product-quantity" value="0" min="0" max="5" readonly>'+
                                            '<button type="button" class="plus border rounded" onclick="increment(this, '+item.people_adult+', '+item.people_child+', '+item.no_of_rooms+', '+item.id+');">+</button>'+
                                        '</div>'+
                                    '</div>'+
                                    '<button class="btn btn-success btn-border mt-3 me-1 float-right confirm-button" style="display:none;" onclick="confirmRoom(this, '+item.id+', \''+item.category+'\', '+item.people_adult+', '+item.people_child+', '+room_price_rent+');">'+
                                            'Confirm'+
                                    '</button>'+
                                    '</div>'+
                                '</div>'+
                            '</div>'+
                        '</div>';
            });
            $("#room_list_div").append(html)
            $("#loading_div").hide();
            $("#available_room_div").show();
            $("#date_range").text(check_in+'-'+check_out);
            $("#no_of_days").text((new Date(new Date(check_out) - new Date(check_in)))/1000/60/60/24);
        });
    }

    function getdateList(check_in, check_out){
        var dateList = [];
        check_in = new Date(check_in);
        check_out = new Date(check_out);
        console.log(check_out)
        for(check_in = check_in; check_in <check_out; check_in.setDate(check_in.getDate() + 1)){
            var date = check_in.getFullYear()+'-'+pad(check_in.getMonth()+1, 2)+'-'+pad(check_in.getDate(), 2);
            dateList.push(date);
        }
        return dateList;
    }

    function pad(str, max) {
      str = str.toString();
      return str.length < max ? pad("0" + str, max) : str;
    }



    function showInputPlus(element, people_adult, people_child, no_of_rooms, id){
        $(element).hide();
        $(element).next().show();
        increment($(element).next().children().eq(2), people_adult, people_child, no_of_rooms, id);
        $(element).next().next().show();
    }

    function increment(element, people_adult, people_child, no_of_rooms, id){
        var value = $(element).prev().val();
        if(value >= no_of_rooms){
            alert('No more room available');
            return false;
        }
        $(element).prev().val(++value);
        createPeopleCount(element, people_adult, people_child, id);
        $(element).parent().parent().next().show();
    }

    function decrement(element, id){
        var value = $(element).next().val();
        
        if(value > 1){
            $(element).next().val(--value);
            $($(element).parent().parent().find($('.people-count'))).eq(value).remove();
            $(element).parent().parent().next().show();
        }
        else if(value == 1){
            $(element).next().val(--value);
            $(element).parent().hide();
            $($(element).parent().parent().find($('.people-count'))).eq(0).remove();
            $(element).parent().prev().show();
            $("#"+id).remove();
            $(element).parent().parent().next().hide();
            if($("#booked_room").children().length == 0){
                $("#summary_div").hide();
            }
            room_categories = room_categories.filter(function(elem){
               return elem != id; 
            });
            finalPrice();
        }
    }

    function createPeopleCount(element, people_adult, people_child, id){
        var numItems = $(element).prev().val();
        var html = '<div class="row w-100 people-count mb-2">'+
                        '<div class="col-sm-3">'+
                            '<b>Room '+numItems+'</b>'+
                        '</div>'+
                        '<div class="col-sm-4">'+
                            'Adults(12+) &nbsp'+
                            '<select name="people_adult_'+id+'[]" required>'+
                                '<option value="">Select</option>';
        
        for(var i=1; i<=people_adult;i++){
            html += '<option value="'+i+'">'+i+'</option>'
        }

        html += '</select>'+
                    '</div>'+
                    '<div class="col-sm-4">'+
                        'Child(0-10) &nbsp'+
                        '<select name="people_child_'+id+'[]" required>'+
                            '<option value="">Select</option>';

        for(var i=1; i<=people_child;i++){
            html += '<option value="'+i+'">'+i+'</option>'
        }

        html += '</select>'+'</div>'+'</div>';
        $(element).parent().parent().append(html);
        $(element).parent().parent().next().show();
    }


    function confirmRoom(element, id, category, room_people_adult, room_people_child, room_price){
        if(room_categories.indexOf(id) == -1){
            room_categories.push(id);
        }
        var num_of_rooms = $(element).prev().find('.product-quantity').val();
        var people_adult = $("select[name='people_adult_"+id+"[]']").map(function(){ if($(this).val()!='') return $(this).val();}).get();
        var people_child = $("select[name='people_child_"+id+"[]']").map(function(){ if($(this).val()!='') return $(this).val();}).get();

        if(people_adult.length != num_of_rooms){
            alert('Please select number of adults in each room');
            return false;
        }
        if(people_child.length != num_of_rooms){
            alert('Please select number of children in each room');
            return false;
        }

        var total_people_adult = 0;
        for (var i = 0; i < people_adult.length; i++) {
            total_people_adult += parseInt(people_adult[i]);
        }
        var total_people_child = 0;
        for (var i = 0; i < people_child.length; i++) {
            total_people_child += parseInt(people_child[i]);
        }


        $(element).hide();
        var html = "";
        html += '<b style="color:#495057;margin-right: 10%;">'+category+':</b>'+ 
                    '<span>'+total_people_adult+' Adults '+total_people_child+' Children ('+num_of_rooms+' Room)</span>'+
                    '<div class="w-100 text-end" style="color: #8c68cd"> BDT&nbsp;<span class="room-rent">'+room_price*num_of_rooms +'</span></div>';

        if($('#'+id).length == 0){
            $("#booked_room").append('<div id="'+id+'"></div>');
        }
        else{
            $('#'+id).empty();
        }
        $("#"+id+"").append(html);
        $("#summary_div").show();
        finalPrice();
    }

    function finalPrice(){
        var final_price = 0;
        $('.room-rent').each(function(i, obj) {
            final_price += parseInt($(this).text());
        });
        $("#final_total").text("BDT "+final_price );
    }

    function bookNow(){
        $('.confirm-button').each(function(i, obj) {
            if(!$(this).is(":hidden")){
                alert("Please confirm rooms");
                return false;
            }
        });
        var booking_data = [];
        $.each(room_categories,function( key, value ) {
            var people_adult = $("select[name='people_adult_"+value+"[]']").map(function(){ if($(this).val()!='') return $(this).val();}).get();
            var people_child = $("select[name='people_child_"+value+"[]']").map(function(){ if($(this).val()!='') return $(this).val();}).get();
            var arr = [value, $("#"+value).children().eq(0).text() , people_adult, people_child, $("#"+value).find(".room-rent").text(), people_adult.length]
            booking_data.push(arr);
        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: 'book-room-temp',
            data: {
              check_in : check_in,
              check_out : check_out,
              booking_data : booking_data,
            },
            dataType: 'json',
        })
        .done(function (data) {
            // console.log(data);
            window.location.href = "./billing-info";
        });

    }
</script>
@endsection
