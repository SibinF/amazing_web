@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Package_places_to_visit</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Package_places_to_visit    </div>

    <div class="panel-body">
                

        <form action="{{ url('/package_places_to_visits') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="package_id" class="col-sm-3 control-label">Package Id</label>
            <div class="col-sm-6">
                <input type="text" name="package_id" id="package_id" class="form-control" value="{{$model['package_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
                
        <div class="form-group">
            <label for="places_to_visit_id" class="col-sm-3 control-label">Places To Visit Id</label>
            <div class="col-sm-6">
                <input type="text" name="places_to_visit_id" id="places_to_visit_id" class="form-control" value="{{$model['places_to_visit_id'] or ''}}" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <a class="btn btn-default" href="{{ url('/package_places_to_visits') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection