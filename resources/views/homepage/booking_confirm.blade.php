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
                        <h4 class="center-align " style="color:#6f6f6f">{{$data['heading']  or " "}} </h4>
                        <div class="col l10">
                    <p style="font-size: 18pt;font-weight: 200">Booking ID :{{$data['booking_id'] or " "}}</p>
                            <p style="font-size: 20pt;font-weight: 200">{{$data['message'] or " "}}</p>

                        </div>
                        <div class="col l12 center-align">
                            <a href="{{url('homepage')}}"><button type="button" class="btn btn-primary pull ">Back to Home</button></a>
                                <div class="clearfix"></div>
                            <br>
                        </div>

                        <div class="clearfix"></div>
                    </div>



                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </div>

@endsection

