@extends('layout.home.layout')

@section('content')
<style>
    .body_color
    {
        background: #ADA996;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #EAEAEA, #DBDBDB, #F2F2F2, #ADA996); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
    .peach_server
    {
        background: #ECE9E6;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #FFFFFF, #ECE9E6); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    }
</style>
<div id="index-banner" class="parallax-container">

    <div class="slider">
        <ul class="slides">
            <li>
                <img src="{{URL::asset("images/trip_category/thumb_image/banner.jpg")}}"> <!-- random image -->
                <div class="caption center-align">
                    <h3>WELCOME TO TRIPINBLUES</h3>
                    <h5 class="light grey-text text-lighten-3"></h5>
                </div>
            </li>


        </ul>
    </div>
</div>

{{--<div class="black lighten-2">
    <div class="container">
        <div class="section">

            <div class="row">
                <form class="col s12">
                    <div class="row">
                        <div class="input-field col s12 m6 l4">
                            <select>
                                <option value="" selected>Choose your option</option>
                                <option value="1">Option 1</option>
                                <option value="2">Option 2</option>
                                <option value="3">Option 3</option>
                            </select>
                            <label>Trip Category</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <input placeholder="Placeholder" id="date" type="text" class="validate">
                            <label for="date">Trip Date</label>
                        </div>
                        <div class="input-field col s6 m6 l1">
                            <input placeholder="Placeholder" id="no_of_adult" type="text" class="validate">
                            <label for="no_of_adult">Adult</label>
                        </div>
                        <div class="input-field col s6 m6 l1">
                            <input placeholder="Placeholder" id="no_of_children" type="text" class="validate">
                            <label for="no_of_children">Children</label>
                        </div>
                        <div class="input-field col s12 m6 l3">
                            <button type="button" class="waves-effect waves-teal btn-flat yellow">Search</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>--}}


<div style="padding-top: 20px; padding-bottom: 20px;" class="peach_server">
    <div class="container ">
        <section>
            <h4 class="center-align grey-text text-darken-2" >Select yout trip theme</h4>
            </br>
            <div class="row">


                @foreach ($trip_category as $trip_categories)

                        <div class="col s12 m6 l4">
                            <div class="card hoverable ">
                                <div class="card-image ">
                                   <a href="{{url('categoryPackage/'.$trip_categories->id)}}"  ><img src="{{URL::asset("images/trip_category/thumb_image/$trip_categories->thumb_image")}}" style="width: 100%; height:200px;">
                                       </a>
                                    <a href="{{url('categoryPackage/'.$trip_categories->id)}}"  > <span class="card-title white-text">{{$trip_categories->name}}</span></a>
                                </div>

                            </div>
                        </div>
                @endforeach

            </div>

        </section>
    </div>
</div>


<div class="" >
    <div class="container-custom">
        <div class="section">
            <h4 class="center-align " style="color:#555">Popular packages</h4>

            <div class="row ">

                <!--start card-->
                @if(!$packages->isEmpty())

                @foreach ($packages as $package)


                <div class="col s12 m4 l4">
                    <div class="card custom hoverable hover-reveal">
                        <div class="card-image  waves-effect waves-block waves-light">
                            <img src={{URL::asset("images/trip_category/thumb_image/banner.jpg")}} class="activator">
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
  <a class='dropdown-button btn  black-text' href='#' data-activates='dropdown1' href="{{url('packageDetailed/'.$package->id)}}">Book Now   </a>

                                    <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content black'>
    <li><a href="#!" class="yellow-text"><i class="material-icons yellow-text" style="padding-right: 0px!important;">call</i>Call</a></li>
    <li><a href="{{url('packageDetailed',[$package->id])}}" class="yellow-text "><i class="material-icons yellow-text" style="padding-right: 0px!important;">mail</i>Enquiry</a></li>
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

{{--<div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h2 class="header col s12 light">School Trip Made Simple</h2>
            </div>
            <div class="row center">
                <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque
                    id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut

                    ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum
                    primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="{{URL::asset('images/school.jpg')}}" alt="Unsplashed background img 2"></div>
</div>--}}

{{--<div class="container">
    <div class="section">

        <div class="row">
            <div class="col s12 center">
                <h3><i class="mdi-content-send brown-text"></i></h3>
                <h4>Popular School Trips in this season</h4>
                <p class="left-align light">We conduct all types of student trips</p>
            </div>
        </div>

    </div>
</div>--}}


{{--<div class="parallax-container valign-wrapper">

    <div class="section no-pad-bot">
        <div class="container">
            <div class="row center">
                <h5 class="header col s12 light">Most POpular Packages in this seasson</h5>
            </div>
        </div>
    </div>
    <div class="parallax"><img src="{{URL::asset('images/background3.jpg')}}" alt="Unsplashed background img 3"></div>
</div>--}}

@endsection

