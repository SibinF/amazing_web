@extends('crudgenerator::layouts.master')

@section('content')


<h2 class="page-header">{{ ucfirst('trip_itinerary_trip_activities') }}</h2>

<div class="panel panel-default">
    <div class="panel-heading">
        List of {{ ucfirst('trip_itinerary_trip_activities') }}
    </div>

    <div class="panel-body">
        <div class="">
            <table class="table table-striped" id="thegrid">
              <thead>
                <tr>
                                        <th>Trip Itinerary Id</th>
                                        <th>Trip Activity Id</th>
                                        <th style="width:50px"></th>
                    <th style="width:50px"></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
        </div>
        <a href="{{url('trip_itinerary_trip_activities/create')}}" class="btn btn-primary" role="button">Add trip_itinerary_trip_activity</a>
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
                "ajax": "{{url('trip_itinerary_trip_activities/grid')}}",
                "columnDefs": [
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/trip_itinerary_trip_activities') }}/'+row[0]+'">'+data+'</a>';
                        },
                        "targets": 1
                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="{{ url('/trip_itinerary_trip_activities') }}/'+row[0]+'/edit" class="btn btn-default">Update</a>';
                        },
                        "targets": 2                    },
                    {
                        "render": function ( data, type, row ) {
                            return '<a href="#" onclick="return doDelete('+row[0]+')" class="btn btn-danger">Delete</a>';
                        },
                        "targets": 2+1
                    },
                ]
            });
        });
        function doDelete(id) {
            if(confirm('You really want to delete this record?')) {
               $.ajax({ url: '{{ url('/trip_itinerary_trip_activities') }}/' + id, type: 'DELETE'}).success(function() {
                theGrid.ajax.reload();
               });
            }
            return false;
        }
    </script>
@endsection