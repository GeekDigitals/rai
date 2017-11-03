@extends('layouts.admin.frame')

@section('title', 'Homepage')

@section('content')

    <ol class="breadcrumb breadcrumb-col-deep-purple">
        <li><a href="{{ url('/admin') }}">Home</a></li>
        <li class="active">Homepage</li>
    </ol>

    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-12">
                                <h2>Homepage <span class="pull-right"><a href="{{ url('/admin/homepage/create') }}" class="btn bg-green waves-effect" title="Add New Homepage">
                                  <i class="fa fa-plus" aria-hidden="true"></i> Add New</a></span>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover" id="homepage-table">
                                <thead>
                                    <tr>
                                        <th width="10%">#</th><th>Image</th><th>Title</th><th>Order</th><th width="18%">Actions</th>
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
        oTable = $('#homepage-table').DataTable({
            processing: true,
            order: [[ 3, "asc" ]],
            serverSide: true,
//            dom: 'Bfrtip',
//            buttons: [
//                'copy', 'csv', 'excel', 'pdf', 'print'
//            ],
            rowReorder: {
                selector: 'td:nth-child(2)'
            },
            responsive: true,
            ajax: '{!! route('homepage.data') !!}',
            columns: [
                { data: "rownum", name: "rownum" },
                { data: 'image', name: 'image' },
                { data: 'title', name: 'title' },
                { data: 'order', name: 'order' },
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
