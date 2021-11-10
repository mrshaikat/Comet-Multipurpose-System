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

					<h3 class="page-title">Category</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('post.index') }}">Product</a></li>
						<li class="breadcrumb-item active">Brand</li>
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
							<h4 class="card-title">All Brand
								<a class="btn btn-primary btn-sm pull-right" href="#add_brand_modal" data-toggle="modal"><i class="fas fa-plus mr-1"></i> Add Brand</a>
							</h4>

						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="brand_table" class="table table-striped mb-0">
									<thead>
										<tr>
											<th>SL</th>
											<th>Brand Name</th>
											<th>Slug</th>
											<th>Logo</th>
											<th>Date</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>

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


	{{-- Add Category Modal START--}}
	<div id="add_brand_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content p-2">
				<div class=" modal-header">
					<h3 class="modal-title">Add New Brand</h3>



					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form id="brand_form" action="" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="form-group">
							<input id="focus_remove" name="name" class=" form-control" type="text" placeholder="Brand Name">
						</div>

                        <div class="form-group">
							<input id="focus_remove" name="logo" class=" form-control" type="file">
						</div>



						<div class="submit-section">
							<button class="btn btn-primary submit-btn-modal" type="submit">Add Brand</button>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
	{{-- Add brand Modal End--}}



	{{-- Edit brand Modal START --}}
	 <div id="edit_brand_modal" class="modal fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content p-2">
				<div class=" modal-header">
					<h3 class=" modal-title">Edit Brand</h3>



					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class=" modal-body">
					<form id="brand_edit_form" form_no="" method="POST" enctype="multipart/form-data">
						@csrf
						@method('PUT')
						<div class="form-group">
                            <label for="">Name</label>
							<input id="focus_remove" name="name" class="form-control" type="text" placeholder="Brand Name">
							<input id="focus_remove" name="edit_id" class="form-control" type="hidden">


						</div>

                        <div class="form-group">

                            <label for="">Photo</label>
							<input id="focus_remove" name="logo" class="form-control" type="file" placeholder="">
                            <img style="width:100%; height:auto;" id="edit_brand_photo" src="" alt="Brand Photo"> <br>
							<input id="focus_remove" name="old_photo" class="form-control" type="hidden" placeholder="">
						</div>



						<div class="submit-section">
							<button class="btn btn-primary submit-btn-modal" type="submit" name="form_submit" value="submit">Update brand</button>
						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
	{{-- Edit Category Modal END--}}


@endsection
