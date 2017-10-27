@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Package_trip_itinerary</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Package_trip_itinerary    </div>

    <div class="panel-body">
                

        <form action="{{ url('/package_trip_itineraries') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="package_id" class="col-sm-3 control-label">Package Id</label>
            <div class="col-sm-6">
                <input type="text" name="package_id" id="package_id" class="form-control" value="{{$model['package_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="trip_itinerary_id" class="col-sm-3 control-label">Trip Itinerary Id</label>
            <div class="col-sm-6">
                <input type="text" name="trip_itinerary_id" id="trip_itinerary_id" class="form-control" value="{{$model['trip_itinerary_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/package_trip_itineraries') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection