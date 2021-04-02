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
					
					<h3 class="page-title">Post
						<a class="btn btn-danger btn-sm pull-right" href="{{ route('post.trash') }}"><i class="fas fa-trash mr-1"></i> Trash <span class=" badge badge-danger">{{ ($trash_data == 0) ? '' : $trash_data }}</span></a>

						<a class="btn btn-info btn-sm pull-right mr-2" href="{{ route('post.index') }}"><i class="fas fa-eye mr-1"></i> Published <span class=" badge badge-info">{{ ($published_data == 0) ? '' : $published_data }}</span></a>
						
					</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						{{-- <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li> --}}
						<li class="breadcrumb-item active">Post</li>
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
							<h4 class="card-title"><span class="text-info"><i class="fas fa-eye mr-2"></i>All Posts</span>
								<a class="btn btn-primary btn-sm pull-right" href="{{ route('post.create') }}"><i class="fas fa-plus mr-1"></i> Add Post</a>
							</h4>
					
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped mb-0">
									<thead>
										<tr>
											<th>SL</th>
											<th>Title</th>
											<th>Post Type</th>
											<th>Post Category</th>
											<th>Post Tag</th>
											<th>Date</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($all_data as $data )

											{{-- Featured Json Data Decode --}}
											@php
											$featured_data = json_decode($data -> featured);
											@endphp
										
											<td>{{ $loop -> index+1 }}</td>
											<td>{{ $data -> title }}</td>
											<td>
												{{ $featured_data -> post_type }}
											</td>
											
											<td>{{ $data -> created_at -> diffForHumans() }}</td>
											<td>{{ $featured_data -> post_type }}</td>
											<td>{{ $featured_data -> post_type }}</td>
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

													<a class="btn btn-sm bg-danger-light" href="{{ route('post.trash.update', $data -> id) }}">
														<i class="fe fe-trash"></i> Delete
													</a>



													

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
							<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Add Tag</button>
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
					<h3 class="modal-title">Edit Tag</h3>
					
					
	
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
							<button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Update Tag</button>
						</div>
	
					</form>
				</div>
			   
			</div>
		</div>
	</div>
	{{-- Edit Category Modal END--}}
	

@endsection