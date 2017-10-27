@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Package_tag</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Package_tag    </div>

    <div class="panel-body">
                

        <form action="{{ url('/package_tags') }}" method="POST" class="form-horizontal">


                
        <div class="form-group">
            <label for="package_id" class="col-sm-3 control-label">Package Id</label>
            <div class="col-sm-6">
                <input type="text" name="package_id" id="package_id" class="form-control" value="{{$model['package_id'] or ''}}" readonly="readonly">
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
                <a class="btn btn-default" href="{{ url('/package_tags') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection