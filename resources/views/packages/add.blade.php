@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">Package</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Add/Modify Package    </div>

    <div class="panel-body">
                
        <form action="{{ url('/packages'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
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
                <label for="quote" class="col-sm-3 control-label">Quote</label>
                <div class="col-sm-6">
                    <input type="text" name="quote" id="quote" class="form-control" value="{{$model['quote'] or ''}}">
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
                <label for="banner_image_one" class="col-sm-3 control-label">Banner Image One</label>
                <div class="col-sm-6">
                    <input type="text" name="banner_image_one" id="banner_image_one" class="form-control" value="{{$model['banner_image_one'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="banner_image_two" class="col-sm-3 control-label">Banner Image Two</label>
                <div class="col-sm-6">
                    <input type="text" name="banner_image_two" id="banner_image_two" class="form-control" value="{{$model['banner_image_two'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="banner_image_three" class="col-sm-3 control-label">Banner Image Three</label>
                <div class="col-sm-6">
                    <input type="text" name="banner_image_three" id="banner_image_three" class="form-control" value="{{$model['banner_image_three'] or ''}}">
                </div>
            </div>
                                                                                                            <div class="form-group">
                <label for="trip_sub_category_id" class="col-sm-3 control-label">Trip Sub Category Id</label>
                <div class="col-sm-2">
                    <input type="number" name="trip_sub_category_id" id="trip_sub_category_id" class="form-control" value="{{$model['trip_sub_category_id'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="no_of_day" class="col-sm-3 control-label">No Of Day</label>
                <div class="col-sm-2">
                    <input type="number" name="no_of_day" id="no_of_day" class="form-control" value="{{$model['no_of_day'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="no_of_night" class="col-sm-3 control-label">No Of Night</label>
                <div class="col-sm-2">
                    <input type="number" name="no_of_night" id="no_of_night" class="form-control" value="{{$model['no_of_night'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="travel_type_id" class="col-sm-3 control-label">Travel Type Id</label>
                <div class="col-sm-2">
                    <input type="number" name="travel_type_id" id="travel_type_id" class="form-control" value="{{$model['travel_type_id'] or ''}}">
                </div>
            </div>
                                                                                                            <div class="form-group">
                <label for="depature_date" class="col-sm-3 control-label">Depature Date</label>
                <div class="col-sm-3">
                    <input type="date" name="depature_date" id="depature_date" class="form-control" value="{{$model['depature_date'] or ''}}">
                </div>
            </div>
                                    
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button> 
                    <a class="btn btn-default" href="{{ url('/packages') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection