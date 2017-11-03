@extends('layouts.admin.frame')

@section('title', 'About Us')

@section('content')

    <ol class="breadcrumb breadcrumb-col-deep-purple">
        <li><a href="{{ url('/admin') }}">Home</a></li>
        <li class="active">About Us</li>
    </ol>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2>About Us <span class="pull-right"><!--<a href="{{ url('/admin/about-us/create') }}" class="btn bg-green waves-effect" title="Add New About Us">
                                  <i class="fa fa-plus" aria-hidden="true"></i> Add New</a></span>-->
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="about-us-table">
                                <thead>
                                    <tr>
                                        <th width="10%">#</th><th>Image</th><th>Title</th><th width="18%">Actions</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        var oTable;
        oTable = $('#about-us-table').DataTable({
            processing: true,
            order: [[ 0, "asc" ]],
            serverSide: true,
//            dom: 'Bfrtip',
//            buttons: [
//                'copy', 'csv', 'excel', 'pdf', 'print'
//            ],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            ajax: '{!! route('about-us.data') !!}',
            columns: [
                { data: "rownum", name: "rownum" },
                { data: 'image', name: 'image' },
                { data: 'title', name: 'title' },
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ]
        });

        function deleteData(id) {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: "POST",
                        url: '{{route("homepage.index")}}' + "/" + id + '?' + $.param({"_token" : '{{ csrf_token() }}' }),
                        data: {_method: 'delete'},
                         complete: function (msg) {
                            oTable.draw();
                            swal("Success", "Your data already deleted", "success");
                        }
                    });
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
        }
    </script>
@endpush
