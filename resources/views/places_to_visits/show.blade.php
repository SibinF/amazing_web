@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Places_to_visit</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Places_to_visit    </div>

    <div class="panel-body">
                

        <form action="{{ url('/places_to_visits') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="id" class="col-sm-3 control-label">Id</label>
            <div class="col-sm-6">
                <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="location" class="col-sm-3 control-label">Location</label>
            <div class="col-sm-6">
                <input type="text" name="location" id="location" class="form-control" value="{{$model['location'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="state" class="col-sm-3 control-label">State</label>
            <div class="col-sm-6">
                <input type="text" name="state" id="state" class="form-control" value="{{$model['state'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="country" class="col-sm-3 control-label">Country</label>
            <div class="col-sm-6">
                <input type="text" name="country" id="country" class="form-control" value="{{$model['country'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="thumb_image" class="col-sm-3 control-label">Thumb Image</label>
            <div class="col-sm-6">
                <input type="text" name="thumb_image" id="thumb_image" class="form-control" value="{{$model['thumb_image'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/places_to_visits') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection