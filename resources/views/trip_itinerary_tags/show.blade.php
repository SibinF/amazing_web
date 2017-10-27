@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Trip_itinerary_tag</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Trip_itinerary_tag    </div>

    <div class="panel-body">
                

        <form action="{{ url('/trip_itinerary_tags') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="trip_itinerary_id" class="col-sm-3 control-label">Trip Itinerary Id</label>
            <div class="col-sm-6">
                <input type="text" name="trip_itinerary_id" id="trip_itinerary_id" class="form-control" value="{{$model['trip_itinerary_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="tag_id" class="col-sm-3 control-label">Tag Id</label>
            <div class="col-sm-6">
                <input type="text" name="tag_id" id="tag_id" class="form-control" value="{{$model['tag_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/trip_itinerary_tags') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection