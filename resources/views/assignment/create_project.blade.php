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
							<h4 class="content-title mb-0 my-auto">Assignment</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Project</span>
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
                                    <a href="{{ url('create/project')}}" class="modal-effect btn btn-sm btn-primary" style="color:white"><i
                                        class="fas fa-plus"></i>&nbsp; Add Project</a>
									<h4 class="card-title mg-b-0">create Project</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Title</th>
												<th class="wd-15p border-bottom-0">Description</th>
												<th class="wd-20p border-bottom-0">Deadline</th>
												<th class="wd-15p border-bottom-0">Assigned User</th>
												<th class="wd-25p border-bottom-0">Assigned Client</th>
												<th class="wd-25p border-bottom-0">Status</th>
												<th class="wd-25p border-bottom-0">Processes</th>
											</tr>
										</thead>
                                        @foreach($data as $datatable)
										<tbody>
											<tr>
												<td>{{$datatable->title}}</td>
												<td>{{$datatable->description}}</td>
												<td>{{$datatable->deadline}}</td>
												<td>{{$datatable->user->name}}</td>
												<td>{{$datatable->client->name}}</td>
												<td>{{$datatable->status}}</td>
												<td>

                                                    <a href="{{url('edit/project')}}/{{ $datatable->id }}"
                                                    class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"
                                                    title="Edit"><i class="las la-pen"></i></a>

                                                    <a class="modal-effect btn btn-sm btn-danger"
                                                    href="{{url('delete/project')}}/{{ $datatable->id }}"><i
                                                    title="Delete"
                                                    class="text-danger fas fa-trash-alt"></i>&nbsp;&nbsp;</a>



                                                </td>
											</tr>
										</tbody>
                                        @endforeach
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->

					<!--/div-->

					<!--div-->
                    <!-- edit -->


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
