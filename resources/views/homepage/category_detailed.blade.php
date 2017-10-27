@extends('layout.home.layout')

@section('content')

    <div id="index-banner" class="parallax-container">

        <div class="slider">
            <ul class="slides">
                <li>
                    <img  src="{{url('/images/banner.jpg')}}" > <!-- random image -->
                    <div class="caption center-align">
                        <h3>This is our big Tagline!</h3>
                        <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
                    </div>
                </li>

            </ul>
        </div>
    </div>




    <div class="" >
        <div class="container-custom">
            <div class="section">
                <h4 class="center-align " style="color:#555">{{$header or ""}} </h4>

                <div class="row ">

                    <!--start card-->

                    @if(!$packages->isEmpty())

                        @foreach ($packages as $package)


                            <div class="col s12 m4 l4">
                                <div class="card custom hoverable hover-reveal">
                                    <div class="card-image  waves-effect waves-block waves-light">
                                        <img src="{{url('/images/banner.jpg')}} " class="activator">
                                        <span class="card-title activator ">{{$package->name or " "}}</span>
                                        <span class="card-sub-title"> <i class="material-icons small">airplanemode_active</i>{{$package->travelType->name or " "}}</span>
                                    </div>

                                    <div class="card-action ">
                                        <a href="#" class="black-text">View more</a>
                                    </div>

                                    <div class="card-reveal">
                        <span class="card-title grey-text ">{{$package->name or " "}} <i
                                    class="material-icons right">close</i></span>
                                        <h5 class="yellow-text ">{{$package->no_of_day or " "}}Day/{{$package->no_of_night or " "}}Night <span> &nbsp;
                                                <!-- Dropdown Trigger -->
  <a class='dropdown-button btn yellow black-text' href='#' data-activates='dropdown1' href="{{url('packageDetailed/'.$package->id)}}">Book Now   </a>

                                                <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content black'>
    <li><a href="#!" class="yellow-text"><i class="material-icons yellow-text" style="padding-right: 0px!important;">call</i>Call</a></li>
    <li><a href="#!" class="yellow-text"><i class="material-icons yellow-text" style="padding-right: 0px!important;">mail</i>Enquiry</a></li>
  </ul>

                        </span></h5>
                                        <div class="section">
                                            <div class="custom-padding"></div>
                                            <div class="row ">
                                                @if(!$packages->isEmpty())
                                                    @foreach ($package->placesToVisits as $places)
                                                        <div class="custom-chip white-text text-darken-4"> <i class="material-icons left" style="width:4px;height:2px; padding-right:8px;">location_on</i>{{$places->location or " "}}
                                                        </div>
                                                    @endforeach
                                                @else
                                                    {{"no places are available"}}
                                                @endif

                                            </div>

                                        </div>


                                    </div>


                                </div>
                            </div>
                    @endforeach
                @else
                    {{"No packages are available"}}
                @endif
                <!--end card-->
                    <!--start card-->


 </div>
    </div>
    </div>
    </div>

@endsection

