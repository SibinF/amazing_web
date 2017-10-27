@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">Package_places_to_visit</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        Add/Modify Package_places_to_visit    </div>

    <div class="panel-body">
                
        <form action="{{ url('/package_places_to_visits'.( isset($model) ? "/" . $model->id : "")) }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            @if (isset($model))
                <input type="hidden" name="_method" value="PATCH">
            @endif


                                                            <div class="form-group">
                <label for="package_id" class="col-sm-3 control-label">Package Id</label>
                <div class="col-sm-2">
                    <input type="number" name="package_id" id="package_id" class="form-control" value="{{$model['package_id'] or ''}}">
                </div>
            </div>
                                                                                                <div class="form-group">
                <label for="places_to_visit_id" class="col-sm-3 control-label">Places To Visit Id</label>
                <div class="col-sm-2">
                    <input type="number" name="places_to_visit_id" id="places_to_visit_id" class="form-control" value="{{$model['places_to_visit_id'] or ''}}">
                </div>
            </div>
                                                
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Save
                    </button> 
                    <a class="btn btn-default" href="{{ url('/package_places_to_visits') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
                </div>
            </div>
        </form>

    </div>
</div>






@endsection