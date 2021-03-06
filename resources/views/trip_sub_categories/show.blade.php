@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Trip_sub_category</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Trip_sub_category    </div>

    <div class="panel-body">
                

        <form action="{{ url('/trip_sub_categories') }}" method="POST" class="form-horizontal">


                
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
            <label for="banner_image" class="col-sm-3 control-label">Banner Image</label>
            <div class="col-sm-6">
                <input type="text" name="banner_image" id="banner_image" class="form-control" value="{{$model['banner_image'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="trip_category_id" class="col-sm-3 control-label">Trip Category Id</label>
            <div class="col-sm-6">
                <input type="text" name="trip_category_id" id="trip_category_id" class="form-control" value="{{$model['trip_category_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/trip_sub_categories') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection