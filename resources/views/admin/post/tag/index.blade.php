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
							<h3 class="page-title">Post</h3>
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
								<li class="breadcrumb-item"><a href="javascript:(0);">Posts</a></li>
								<li class="breadcrumb-item active">Add Post</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /Page Header -->
				

				{{-- Start Post --}}
				<div class="row">
					<div class="col-sm-12">
								
							<div class="row mb-5">
								<div class="col">
									<ul class="nav nav-tabs nav-tabs-solid">
										<li class="nav-item">
											<a class="nav-link" href="blog.html">Acitive Post</a>
										</li>
										<li class="nav-item">
											<a class="nav-link active" href="pending-blog.html">Pending Post</a>
										</li>
									</ul>
								</div>
								<div class="col-auto">
									<a class="btn btn-primary btn-sm" href="add-blog.html"><i class="fas fa-plus mr-1"></i> Add Post</a>
								</div>
							</div>
						
							<!-- Blog -->
							<div class="row blog-grid-row">

								<div class="col-md-6 col-xl-4 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="#"><img class="img-fluid" src="admin/assets/img/blog/blog-01.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="profile.html"><img src="admin/assets/img/doctors/doctor-thumb-01.jpg" alt="Post Author"> <span>Dr. Ruby Perrin</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 4 Dec 2019</li>

												
											</ul>

											<div class="row pt-2 pb-2">
												<div class="col"><a class="text-info"> Category sadfa adfsdf</a></div>
	
	
												<div class="col text-right"><a class="text-warning">akdfska asdjfka a akdfja lajsdf </a></div>
	
	
	
	
												
											</div>



											<h3 class="blog-title"><a href="#">Doccure – Making your clinic painless visit?</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
										<div class="row pt-3">
											<div class="col"><a href="edit-blog.html" class="text-success"><i class="far fa-edit"></i> Edit</a></div>


											<div class="col text-middle"><a href="javascript:void(0);" class="text-danger" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="far fa-trash-alt"></i> Delete</a></div>




											<div class="col text-right"><a href="javascript:void(0);" class="text-primary" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="fas fa-toggle-on"></i> Active</a></div>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>

								<div class="col-md-6 col-xl-4 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="#"><img class="img-fluid" src="admin/assets/img/blog/blog-01.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="profile.html"><img src="admin/assets/img/doctors/doctor-thumb-01.jpg" alt="Post Author"> <span>Dr. Ruby Perrin</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 4 Dec 2019</li>
											</ul>
											<h3 class="blog-title"><a href="#">Doccure – Making your clinic painless visit?</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
										<div class="row pt-3">
											<div class="col"><a href="edit-blog.html" class="text-success"><i class="far fa-edit"></i> Edit</a></div>


											<div class="col text-middle"><a href="javascript:void(0);" class="text-danger" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="far fa-trash-alt"></i> Delete</a></div>




											<div class="col text-right"><a href="javascript:void(0);" class="text-primary" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="fas fa-toggle-on"></i> Active</a></div>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>




								<div class="col-md-6 col-xl-4 col-sm-12">
								
									<!-- Blog Post -->
									<div class="blog grid-blog">
										<div class="blog-image">
											<a href="#"><img class="img-fluid" src="admin/assets/img/blog/blog-01.jpg" alt="Post Image"></a>
										</div>
										<div class="blog-content">
											<ul class="entry-meta meta-item">
												<li>
													<div class="post-author">
														<a href="profile.html"><img src="admin/assets/img/doctors/doctor-thumb-01.jpg" alt="Post Author"> <span>Dr. Ruby Perrin</span></a>
													</div>
												</li>
												<li><i class="far fa-clock"></i> 4 Dec 2019</li>
											</ul>
											<h3 class="blog-title"><a href="#">Doccure – Making your clinic painless visit?</a></h3>
											<p class="mb-0">Lorem ipsum dolor sit amet, consectetur em adipiscing elit, sed do eiusmod tempor.</p>
										</div>
										<div class="row pt-3">
											<div class="col"><a href="edit-blog.html" class="text-success"><i class="far fa-edit"></i> Edit</a></div>


											<div class="col text-middle"><a href="javascript:void(0);" class="text-danger" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="far fa-trash-alt"></i> Delete</a></div>




											<div class="col text-right"><a href="javascript:void(0);" class="text-primary" data-toggle="modal" data-target="#deleteNotConfirmModal"><i class="fas fa-toggle-on"></i> Active</a></div>
										</div>
									</div>
									<!-- /Blog Post -->
									
								</div>


								
								
							</div>
						
							<!-- Blog Pagination -->
							<div class="row">
								<div class="col-md-12">
									<div class="blog-pagination">
										<nav>
											<ul class="pagination justify-content-center">
												<li class="page-item disabled">
													<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#">1</a>
												</li>
												<li class="page-item active">
													<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#">3</a>
												</li>
												<li class="page-item">
													<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
							<!-- /Blog Pagination -->
							<!-- /Blog -->
					</div>			
				</div>
				{{-- End Post --}}
				
				
			</div>			
		</div>
		<!-- /Page Wrapper -->
	
	</div>
	<!-- /Main Wrapper -->
@endsection