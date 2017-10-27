@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">Trip_activity</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Add/Modify Trip_activity    </div>

    <div class="panel-body">
                
        <form action="{{ url('/trip_activities'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif


                                    <div class="form-group">
                <label for="id" class="col-sm-3 control-label">Id</label>
                <div class="col-sm-6">
                    <input type="text" name="id" id="id" class="form-control" value="{{$model['id'] or ''}}" readonly="readonly">
                </div>
            </div>
                                                                                                            <div class="form-group">
                <label for="name" class="col-sm-3 control-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{$model['name'] or ''}}">
                </div>
            </div>
                                                                                                                                    <div class="form-group">
                <label for="description" class="col-sm-3 control-label">Description</label>
                <div class="col-sm-6">
                    <input type="text" name="description" id="description" class="form-control" value="{{$model['description'] or ''}}">
                </div>
            </div>
                                                            <div class="form-group">
                <label for="thumb_image" class="col-sm-3 control-label">Thumb Image</label>
                <div class="col-sm-6">
                    <input type="text" name="thumb_image" id="thumb_image" class="form-control" value="{{$model['thumb_image'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="banner_Image" class="col-sm-3 control-label">Banner Image</label>
                <div class="col-sm-6">
                    <input type="text" name="banner_Image" id="banner_Image" class="form-control" value="{{$model['banner_Image'] or ''}}">
                </div>
            </div>
                                                            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button> 
                    <a class="btn btn-default" href="{{ url('/trip_activities') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection