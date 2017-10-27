@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">Places_to_visit</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Add/Modify Places_to_visit    </div>

    <div class="panel-body">
                
        <form action="{{ url('/places_to_visits'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
                <label for="location" class="col-sm-3 control-label">Location</label>
                <div class="col-sm-6">
                    <input type="text" name="location" id="location" class="form-control" value="{{$model['location'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="state" class="col-sm-3 control-label">State</label>
                <div class="col-sm-6">
                    <input type="text" name="state" id="state" class="form-control" value="{{$model['state'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="country" class="col-sm-3 control-label">Country</label>
                <div class="col-sm-6">
                    <input type="text" name="country" id="country" class="form-control" value="{{$model['country'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="thumb_image" class="col-sm-3 control-label">Thumb Image</label>
                <div class="col-sm-6">
                    <input type="text" name="thumb_image" id="thumb_image" class="form-control" value="{{$model['thumb_image'] or ''}}">
                </div>
            </div>
                                                            
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button> 
                    <a class="btn btn-default" href="{{ url('/places_to_visits') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection