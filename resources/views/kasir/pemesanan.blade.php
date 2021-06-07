@extends('layouts.backend')


@section('judul1')
<div class="content-header">
    <div class="container-fluid">
        <div class="mb-2 row">
        <div class="col-sm-6">
            <h1 class="m-0">{{ $title }}</h1>
        </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">{{$title }}</h3>
                <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> {{session('status')}}</h5>
                        </div>
                    @endif
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th width="30px" class="text-center">No</th>
                                    <th>Invoice Number</th>
                                    <th>Sales</th>
                                    <th>Price</th>
                                    <th>Bukti</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no=1; ?>
                                @foreach ($transaction as $item)
                                    <tr>
                                        <td class="text-center">{{ $no++ }}</td>
                                        <td>{{ $item->invoice_number }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>Rp. {{ number_format($item->total_price) }}</td>
                                        <td class="text-center">
                                            @if($item->bukti)
                                            <img src="{{ asset('bukti') }}/{{ $item->bukti }}" data-toggle="modal" data-target="#bukti{{ $item->id}}" width="100px">
                                            @endif
                                        </td>
                                        <td>{{ $item->status}}</td>
                                        <td class="text-center">
                                            <a href="/pemesanan/detail/{{ $item->id}}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-eye"></i></a>
                                            {{-- <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete{{ $item->id}}"><i class="fa fa-trash"></i></button> --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                </div>
                <!-- /.card-body -->
            </div>
         <!-- /.card -->
        </div>
        @foreach ($transaction as $item)
        <div class="modal fade" id="bukti{{ $item->id}}">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                  <div class="modal-header">
                        <h4 class="modal-title">Customer Name : {{ $item->customer_name}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3>Price : Rp.{{ number_format($item->total_price)}} </h3>
                        <center><img src="{{ asset('bukti') }}/{{ $item->bukti }}" width="1000px"></center>
                        <br>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Update Status</label>
                                    <select name="status" class="form-control">
                                        <option value="">--Pilih Status--</option>
                                        <option value="">Order</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                    <div class="text-danger">
                                        @error('status')
                                            {{ $message }}
                                        @enderror
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <a href="/pemesanan/update/{{ $item->id}}" type="button" class="btn btn-warning">Save</a>
                    </div>
                </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        @endforeach

        <script>
            $(function () {
              $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
              });
              $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
              });
            });
        </script>

@endsection
