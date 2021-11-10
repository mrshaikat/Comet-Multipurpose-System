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
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
						<li class="breadcrumb-item active">Create Post</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->


	{{-- START Post --}}
    <div class="row">

        {{-- Validation Error Include --}}
        @include('admin.validate')

        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Create New Post
                        <a class="btn btn-primary btn-sm pull-right" href="{{ route('post.index') }}"><i class="fas fa-angle-double-right mr-1"></i> All Posts</a>
                    </h4>

                </div>
                <div class="card-body custom-edit-service">



                <!-- Add Blog -->
                <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" >
                    @csrf

                    {{-- Post Formate START --}}
                    <div class="service-fields mb-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">

                                    <label><strong class="text-info">Post Format </strong><span class="text-danger">*</span></label>

                                    <select id="post_format" class="form-control" name="post_type">

                                        <option value="">Select Post Formate</option>
                                        <option value="Image">Image</option>
                                        <option value="Gallery">Gallery</option>
                                        <option value="Video">Video</option>
                                        <option value="Audio">Audio</option>

                                    </select>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Post Formate END --}}



                    {{-- Post Title START --}}
                    <div class="service-fields mb-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label><strong>Post Title </strong><span class="text-danger">*</span></label>

                                    <input class="form-control" type="text" name="title" id="" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Post Title END --}}

                    {{-- Post Category START --}}
                    <div class="service-fields mb-3">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label><strong>Category </strong><span class="text-danger">*</span></label>
                                    <div class="col-md-10">

                                        @foreach ( $all_cat as $cat )
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="cat[]" value="{{ $cat -> id }}"> {{ $cat -> name }}
                                            </label>
                                        </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Post Category END --}}


                    {{-- post Tag START --}}
                    <div class="service-fields mb-3">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label><strong>Tags </strong><span class="text-danger">*</span></label>

                                    <select id="post_tag_select" class="form-control" name="tag[]" multiple="multiple">
                                        @foreach ($all_tag as $tag )
                                        <option value="{{ $tag -> id }}">{{ $tag -> name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- post Tag END --}}



                   {{-- Post Content START--}}
                   <div class="service-fields mb-3">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label><strong>Post Content</strong><span class="text-danger">*</span></label>
                                <textarea id="post_editor" class="form-control" name="content"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                   {{-- Post Content END--}}


                    {{-- Post Image START --}}
                    <div class="service-fields mb-3 post-image">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="service-upload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span><strong>Upload Post Images</strong>*</span>
                                    <input class="post_select_img" type="file" name="post_img" id="images" accept="image/jpeg, image/png, image/gif, image/jpg">
                                </div>

                                {{-- Images Load --}}
                                <div id="uploadPreview">
                                    <ul class="upload-wrap">
                                        <li>
                                            <div class="upload-images">
                                                <img  class="post_img_load shadow" src="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    {{-- Post Image END --}}


                    {{-- Post Gallery START --}}
                    <div class="service-fields mb-3 post-gallery">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="service-upload">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span><strong>Upload Post Gallery Images</strong>*</span>
                                    <input class="post_select_gall" type="file" name="post_gall[]" id="images" multiple="multiple" accept="image/jpeg, image/png, image/gif, image/jpg">
                                </div>

                                {{-- Images Load --}}
                                <div class="post_img_gall text-center">

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Post Gallery END--}}



                    {{-- Post Audio LInk START--}}
                    <div class="service-fields mb-3 post-audio">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label><strong>Post Audio Link </strong><span class="text-danger">*</span></label>

                                    <input class="form-control" type="text" name="post_audio" id="" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Post Audio Link END--}}



                    {{-- Post Video Link START --}}
                    <div class="service-fields mb-3 post-video">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label><strong>Post Video Link </strong><span class="text-danger">*</span></label>

                                    <input class="form-control" type="text" name="post_video" id="" value="">
                                    <div class="youtube-vimeo">Youtube or Vimeo Link</div>
                                </div>
                            </div>
                        </div>
                    </div>
                     {{-- Post Video Link END --}}


                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn" type="submit" name="form_submit" value="submit">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
	{{-- END Post --}}



</div>
</div>
</div>
		<!-- /Page Wrapper -->

</div>
	<!-- /Main Wrapper -->




@endsection
