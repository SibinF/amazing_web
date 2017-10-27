@extends('crudgenerator::layouts.master')

@section('content')



<h2 class="page-header">Tag</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        View Tag    </div>

    <div class="panel-body">
                

        <form action="{{ url('/tags') }}" method="POST" class="form-horizontal">


                
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
            <label for="icon" class="col-sm-3 control-label">Icon</label>
            <div class="col-sm-6">
                <input type="text" name="icon" id="icon" class="form-control" value="{{$model['icon'] or ''}}" readonly="readonly">
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
                <a class="btn btn-default" href="{{ url('/tags') }}"><i class="glyphicon glyphicon-chevron-left"></i> Back</a>
            </div>
        </div>


        </form>

    </div>
</div>







@endsection