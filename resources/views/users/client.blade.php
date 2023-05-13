@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Client</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Project</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
                                    <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">Add Client</a>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Name</th>
												<th class="wd-15p border-bottom-0">Email</th>
												<th class="wd-15p border-bottom-0">Mobile</th>
												<th class="wd-20p border-bottom-0">Processes</th>
											</tr>
										</thead>
										<tbody>
                                            @foreach ($data as $Client)
											<tr>
                                                <td>{{$Client->name}}</td>
												<td>{{$Client->email}}</td>
												<td>{{$Client->mobile}}</td>
												<td>

                                                        <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                        data-id="{{ $Client->id }}" data-name="{{ $Client->name }}"
                                                        data-toggle="modal" href="#exampleModal2"
                                                        title="Edit"><i class="las la-pen"></i></a>

                                                        <a class="modal-effect btn btn-sm btn-danger"
                                                        href="{{url('delete/clint')}}/{{ $Client->id }}"><i
                                                        title="Delete"
                                                        class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;</a>

                                                </td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>


                        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                @foreach($data as $Client)
                                <form action="{{url('update/client')}}/{{$Client->id}}" method="post" autocomplete="off">
                                    {{method_field('post')}}
                                    {{csrf_field()}}


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Client Name</label>
                                        <input type="text" class="form-control" value="{{$Client->name}}" id="name" name="name"  >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Client Email</label>
                                        <input type="text" class="form-control" value="{{$Client->email}}" id="email" name="email"  >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Client Mobile</label>
                                        <input type="text" class="form-control" value="{{$Client->mobile}}" id="mobile"  name="mobile"  >
                                    </div>
                                    @endforeach


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
					</div>
					<!--/div-->

					<!--div-->

					<!--/div-->

                    <div class="modal" id="modaldemo8">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content modal-content-demo">
                                <div class="modal-header">
                                    <h6 class="modal-title">Add Client</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{url('create/client')}}" method="post">
                                        {{csrf_field()}}

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Client Name</label>
                                        <input type="text" class="form-control" id="name" name="name"  >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Client Email</label>
                                        <input type="text" class="form-control" id="email" name="email"  >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Client Mobile</label>
                                        <input type="text" class="form-control" id="mobile" name="mobile"  >
                                    </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

					<!--div-->



					<!--/div-->

					<!--div-->

				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection
