@extends('layout.home.layout')

@section('content')

<style>



</style>


    <div class="" >
        <div class="container-custom">
            <div class="section">


                <div class="row ">

                    <!--start card-->
                    <div class="col s12 m12 l12 z-depth-4">
                        <h5 class="center-align " style="color:#6f6f6f">Booking request for {{$packages->name or " "}} </h5>
                        <div class="col l5 offset-l2">
                    <p>Package ID :{{$packages->id or " "}}</p>

                        </div>
                        <div class="col l3 center-align">
                       <p>     No of Days: {{$packages->no_of_day ."Days /" .$packages->no_of_night." Nights"}} </p>
                        </div>


                        <form class="col l8 offset-l2" method="post" action="{{url('processBooking')}}">
                            {{ csrf_field() }}
                            <input type="hidden" name="package_id" value="{{$packages->id}}">
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">account_circle</i>
                                    <input id="icon_prefix" type="text" class="validate" name="customer_name">
                                    <label for="icon_prefix">Customer Name</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">contact_phone</i>
                                    <input id="icon_telephone" type="tel" class="validate" name="contact_number">
                                    <label for="icon_telephone">Mobile Number</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">email</i>
                                    <input id="email" type="text" class="validate" name="email_id">
                                    <label for="email">Email ID</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">date_range</i>
                                    <input id="date_range" type="tel" class="validate datepicker" name="travel_date">
                                    <label for="date_range">Travel Date</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">plus_one</i>
                                    <input id="plus_one" type="text" class="validate" name="adult">
                                    <label for="plus_one">Adults</label>
                                </div>
                                <div class="input-field col s6">
                                    <i class="material-icons prefix">child_care</i>
                                    <input id="child_care" type="tel" class="validate" name="children">
                                    <label for="child_care">Children</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s3 offset-l3">
                                    <button type="submit" class="btn btn-primary pull ">Book Now</button>


                                </div>
                                <div class="input-field col s3">
                                    <a href="{{url('processBooking')}}"><button type="button" class="btn btn-primary pull ">Replan</button>
                                        <div class="clearfix"></div></a>
                                </div>
                            </div>
                        </form>
                    </div>





                </div>
            </div>
        </div>
    </div>

@endsection

