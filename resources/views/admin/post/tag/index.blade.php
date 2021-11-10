@extends('admin.layouts.app')

@section('main-content')
	<!-- Main Wrapper -->
	<div class="main-wrapper">

		{{-- Header Topbar --}}
		@include('admin.layouts.header')

		@include('admin.layouts.menu')

		<!-- Page Wrapper -->
		<div class="page-wrapper">

			<div class="content container-fluid">

		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col-sm-12">

					<h3 class="page-title">Tag</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
						<li class="breadcrumb-item active">Tag</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->


	{{-- Start Post --}}
	<div class="row">
		<div class="col-sm-12">

			@include('admin.validate')

			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title">All Tag
								<a class="btn btn-primary btn-sm pull-right" href="#add_tag_modal" data-toggle="modal"><i class="fas fa-plus mr-1"></i> Add Tag</a>
							</h4>

						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="tag_table" class="table table-striped mb-0">
									<thead>
										<tr>
											<th>SL</th>
											<th>Tag Name</th>
											<th>Slug</th>
											<th>Date</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

                                        @foreach ($all_data as $data )
										<tr>
											<td>{{ $loop -> index+1 }}</td>
											<td>{{ $data -> name }}</td>
											<td>{{ $data -> slug }}</td>

											<td>{{ date('F d Y', strtotime($data -> created_at)) }}</td>
											<td>




											<div class="status-toggle">
												<input type="checkbox" status_id="{{ $data -> id }}" {{ ($data -> status == true ? 'checked="checked"' : '' ) }} id="tag_status_{{ $loop -> index+1 }}" class="check tag_check">
												<label for="tag_status_{{ $loop -> index+1 }}" class="checktoggle">checkbox</label>
											</div>



											</td>
											<td>
												<div class="actions">


													<a id="edit_tag" edit_tag_id="{{ $data -> id }}" class="btn btn-sm bg-success-light" data-toggle="modal" href="#">
														<i class="fe fe-pencil"></i> Edit
													</a>



													<form class="d-inline" action="{{ route('tag.destroy', $data -> id) }}" method="POST">
														@csrf
														@method('DELETE')
														<button id="tag_deleted" class="btn btn-sm bg-danger-light">
															<i class="fe fe-trash"></i> Delete
														</button>
													</form>

												</div>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
			{{-- End Data Table Datatable --}}

	</div>
</div>
			{{-- End Post --}}
</div>
</div>
		<!-- /Page Wrapper -->

</div>
	<!-- /Main Wrapper -->


	{{-- Add Tag Modal START--}}
	<div id="add_tag_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content p-2">
				<div class=" modal-header">
					<h3 class=" modal-title">Add New Tag</h3>



					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('tag.store') }}" method="POST">
						@csrf
						<div class="form-group">
							<input id="focus_remove" name="name" class=" form-control" type="text" placeholder="Tag Name">
						</div>



						<div class="submit-section">
							<button class="btn btn-primary submit-btn-modal" type="submit" name="form_submit" value="submit">Add Tag</button>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
	{{-- Add Category Modal End--}}



	{{-- Edit Category Modal START--}}
	<div id="edit_tag_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content p-2">
				<div class=" modal-header">
					<h3 class=" modal-title">Edit Tag</h3>



					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form action="{{ route('tag.update', 1) }}" method="POST">
						@csrf
						@method('PUT')
						<div class="form-group">
							<input id="focus_remove" name="name" class=" form-control" type="text" placeholder="Tag Name">

							<input id="focus_remove" name="edit_id" class=" form-control" type="hidden" placeholder="">
						</div>



						<div class="submit-section">
							<button class="btn btn-primary submit-btn-modal" type="submit" name="form_submit" value="submit">Update Tag</button>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
	{{-- Edit Category Modal END--}}


@endsection
