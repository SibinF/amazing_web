@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">{{ ucfirst('packages') }}</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        List of {{ ucfirst('packages') }}
    </div>

    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Quote</th>
                                        <th>Description</th>
                                        <th>Thumb Image</th>
                                        <th>Banner Image One</th>
                                        <th>Banner Image Two</th>
                                        <th>Banner Image Three</th>
                                        <th>Trip Sub Category Id</th>
                                        <th>No Of Day</th>
                                        <th>No Of Night</th>
                                        <th>Travel Type Id</th>
                                        <th>Depature Date</th>
                                        <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <a href="{{url('packages/create')}}" class="btn btn-primary" role="button">Add package</a>
    </div>
</div>




@endsection



@section('scripts')
    <script type="text/javascript">
        var theGrid = null;
        $(document).ready(function(){
            theGrid = $('#thegrid').DataTable({
                "processing": true,
                "serverSide": true,
                "ordering": true,
                "responsive": true,
                "ajax": "{{url('packages/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/packages') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/packages') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": 13                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 13+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/packages') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection