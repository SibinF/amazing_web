
@extends('layout.home.layout')

@section('content')

<div id="index-banner" class="">

    <div class="row package_detialed">
        <div class="col s12 m12 l4 black white-text">

            <div class="row">
                <span>   <i class="material-icons right yellow-text">location_on</i></span> <h4>{{$package->name or " "}}</h4>
                <div class="divider"></div>
                <div id="ingredients">
                    <table class=" highlight">


                        <tbody>
                        <tr>
                            <td>  <span>   <i class="material-icons left yellow-text">location_on</i></span>Tour code</td>
                            <td>India</td>
                        </tr>
                        <tr>
                            <td>  <span>   <i class="material-icons left yellow-text">location_on</i></span>Country</td>
                            <td>India</td>
                        </tr>
                        <tr>
                            <td>  <span>   <i class="material-icons left yellow-text">location_on</i></span>Holiday Tyoe</td>
                            <td>Faily</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col s6 m6 l6">
                        <a class="waves-effect waves-light btn yellow black-text "><i class="material-icons left " style="margin-right: 3px!important;">call</i>Call Us</a>

                    </div>
                    <div class="col s6 m6 l6">
                        <a href="{{url('bookingRequest',[$package->id])}}" class="waves-effect waves-light btn yellow black-text "><i class="material-icons left  " style="margin-right: 3px!important;" >mail</i>Enquiry</a>
                    </div>
                </div>
                <div class="row ">

                        @forelse ($package->placesToVisits as $places)
                            <div class="custom-chip">
                                <i class="material-icons right">location_on</i>{{$places->location or " "}}
                            </div>
                            @empty
                                <p>No Location data</p>
                            @endforelse





                </div>

            </div>

        </div>
        <div class="col s12 m12 l8 no-padding" >
            <div class="slider">
                <ul class="slides">
                    <li>
                        <img src="{{URL::asset($package->banner_image_one)}}"> <!-- random image -->
                        <div class="caption center-align">
                          {{--  <h3>This is our big Tagline!</h3>
                            <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>--}}
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>

</div>



<div class="row">
    <div class="col s12 m8 l8 offset-l2 offset-m2 ">

        <div class="section">

            <div class="row">
                <h4 class="orange-text">Trip Itinerary Details</h4>

                <div >
                    <section id="timeline" class="timeline-outer">
                        <div class="" id="content">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <ul class="timeline">

                                        @forelse ($package->tripItineraries as $itinerary)
                                            <li class="event" data-date={{$itinerary->name or " "}}>
                                                <h3>{{$itinerary->name or " "}}</h3>
                                                <p>
                                                    {{$itinerary->description or " "}}
                                                </p>
                                            </li>
                                            <div class="custom-chip">
                                                <i class="material-icons right">location_on</i>{{$itinerary->description or " "}}
                                            </div>
                                        @empty
                                            <p>No Itinerary found !</p>
                                        @endforelse


                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                </div>

            </div>



        </div>

    </div>


</div>






@endsection