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
							<h4 class="content-title mb-0 my-auto">CREATE PROJECT
                            </h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Project</span>
						</div>
					</div>

				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row opened -->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">create Project</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
                                    <form action="{{url('store/project')}}" method="post" autocomplete="off">
                                        {{method_field('post')}}
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <input type="hidden" name="title" id="title" value="">
                                            <label for="recipient-name" class="col-form-label">Title</label>
                                            <input class="form-control" name="title" id="title"   type="text">
                                        </div>
                                        <div class="form-group">
                                            <label for="message-text" class="col-form-label">description</label>
                                            <textarea   class="form-control" id="description" name="description"></textarea>
                                        </div>

                                        <div class="col">
                                            <label>Deadline</label>
                                            <input class="form-control fc-datepicker" name="deadline" placeholder="YYYY-MM-DD"
                                                type="text" value="{{ date('Y-m-d') }}" required>
                                        </div>

                                        <label for="name-user" class="col-form-label">Assigned user</label>
                                        <div class = "form-group">
                                            <select name="admin_id" class = "form-control input-sm" >
                                            @foreach($dataadmin as $admintable)
                                            <option value = "{{$admintable->id}}">{{$admintable->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>

                                        <label for="name-client" class="col-form-label">Assigned Client</label>
                                        <div class = "form-group">
                                            <select name="client_id" class = "form-control input-sm" >
                                                @foreach($dataclient as $clienttable)
                                                <option value = "{{$clienttable->id}}">{{$clienttable->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <label for="status"  class="col-form-label">Status</label>
                                        <div class = "form-group">
                                            <select class = "form-control input-sm" id="status" name="status">
                                            <option value = "Open">Open</option>
                                            <option value = "End">End</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{url('index/project')}}" type="button" class="btn btn-secondary" data-dismiss="modal">Close</a>
                                </div>
                                </form>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					<!--div-->

					<!--/div-->

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
