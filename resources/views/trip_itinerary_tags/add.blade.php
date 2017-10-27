@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">Trip_itinerary_tag</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Add/Modify Trip_itinerary_tag    </div>

    <div class="panel-body">
                
        <form action="{{ url('/trip_itinerary_tags'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif


                                                            <div class="form-group">
                <label for="trip_itinerary_id" class="col-sm-3 control-label">Trip Itinerary Id</label>
                <div class="col-sm-2">
                    <input type="number" name="trip_itinerary_id" id="trip_itinerary_id" class="form-control" value="{{$model['trip_itinerary_id'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="tag_id" class="col-sm-3 control-label">Tag Id</label>
                <div class="col-sm-2">
                    <input type="number" name="tag_id" id="tag_id" class="form-control" value="{{$model['tag_id'] or ''}}">
                </div>
            </div>
                                                
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button> 
                    <a class="btn btn-default" href="{{ url('/trip_itinerary_tags') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection