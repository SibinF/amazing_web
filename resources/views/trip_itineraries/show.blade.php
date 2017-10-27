@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Trip_itinerary</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Trip_itinerary    </div>

    <div class="panel-body">
                

        <form action="{{ url('/trip_itineraries') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="name" class="col-sm-3 control-label">Name</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="name" class="form-control" value="{{$model['name'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="description" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-6">
                <input type="text" name="description" id="description" class="form-control" value="{{$model['description'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="thumb_image" class="col-sm-3 control-label">Thumb Image</label>
            <div class="col-sm-6">
                <input type="text" name="thumb_image" id="thumb_image" class="form-control" value="{{$model['thumb_image'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="banner_image_one" class="col-sm-3 control-label">Banner Image One</label>
            <div class="col-sm-6">
                <input type="text" name="banner_image_one" id="banner_image_one" class="form-control" value="{{$model['banner_image_one'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="banner_image_two" class="col-sm-3 control-label">Banner Image Two</label>
            <div class="col-sm-6">
                <input type="text" name="banner_image_two" id="banner_image_two" class="form-control" value="{{$model['banner_image_two'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="banner_image_three" class="col-sm-3 control-label">Banner Image Three</label>
            <div class="col-sm-6">
                <input type="text" name="banner_image_three" id="banner_image_three" class="form-control" value="{{$model['banner_image_three'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="banner_image_four" class="col-sm-3 control-label">Banner Image Four</label>
            <div class="col-sm-6">
                <input type="text" name="banner_image_four" id="banner_image_four" class="form-control" value="{{$model['banner_image_four'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/trip_itineraries') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection