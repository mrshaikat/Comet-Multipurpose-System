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

					<h3 class="page-title">Trash
						<a class="btn btn-danger btn-sm pull-right" href="{{ route('post.trash') }}"><i class="fas fa-trash mr-1"></i> Trash <span class=" badge badge-danger">{{ ($trash_data == 0) ? '' : $trash_data }}</span></a>

						<a class="btn btn-info btn-sm pull-right mr-2" href="{{ route('post.index') }}"><i class="fas fa-eye mr-1"></i> Published <span class=" badge badge-info">{{ ($published_data == 0) ? '' : $published_data }}</span></a>

					</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
						<li class="breadcrumb-item active">Trash</li>
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
							<h4 class="card-title"><span class="text-danger"><i class="fas fa-trash mr-2"></i> Trash Posts  </span>
								<a class="btn btn-primary btn-sm pull-right" href="{{ route('post.index') }}"><i class="fas fa-angle-double-right mr-1"></i> All Posts</a>
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


											<td>
												<div class="actions">


													<a onclick="return confirm('Are you sure recovery this post?')" class="btn btn-sm bg-success-light" href="{{ route('post.trash.update', $data -> id) }}">
														<i class="fas fa-trash-restore-alt"></i> Data Recover
													</a>



													<form class="d-inline" action="{{ route('post.destroy', $data -> id) }}" method="POST">
														@csrf
														@method('DELETE')
														<button id="post_deleted" class="btn btn-sm bg-danger-light">
															<i class="fe fe-trash"></i> Permanently Delete
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





@endsection
