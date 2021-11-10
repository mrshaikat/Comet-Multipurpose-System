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

					<h3 class="page-title">Product</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
						<li class="breadcrumb-item active">Create Product</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->


	{{-- START Product --}}
    <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="row">
        @include('admin.validate')

        <div class="col-md-7">


            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Information</h4>
                </div>
                <div class="card-body">

                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Regular price</label>
                            <input type="number" name="regular_price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Sale price</label>
                            <input type="number" name="sale_price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" name="quantity" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="desc" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Short description</label>
                            <textarea class="form-control" name="short_desc"></textarea>
                        </div>


                        <input type="checkbox" id="tranding_id" name="trending" value="1"> <label for="tranding_id">Make it tranding product</label>


                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Image Upload</h4>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <label for="">Image upload</label>
                            <div style="margin-bottom: 3px !important;" class="form-group">
                                <input class="form-control" type="file" name="image[]" multiple="multiple">
                              </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Category</h4>
                </div>
                <div class="card-body" style="max-height: 350px; overflow:auto;">
                   <ol style="list-style-type:upper-roman">
                       @foreach ($all_category as $item)
                           <li style="border-bottom: 1px solid rgba(0,0,0,0.15);"> <input name="cat[]" id="{{ $item->name }}" type="checkbox" value="{{ $item->id }}"><label class="ml-2" for="{{ $item->name }}">{{ $item->name }}</label>

                                <ul style="list-style: none;">
                                    @foreach ($item->getChild as $item1)
                                    <li>
                                        <input name="cat[]" id="{{ $item1->name }}" type="checkbox" value="{{ $item1->id }}"><label class="ml-2" for="{{ $item1->name }}">{{ $item1->name }}</label>
                                        <ul style="list-style: none;">
                                            @foreach ($item1->getChild as $item2)
                                            <li>
                                                <input name="cat[]" id="{{ $item2->name }}" type="checkbox" value="{{ $item2->id }}"><label class="ml-2" for="{{ $item2->name }}">{{ $item2->name }}</label>
                                                <ul style="list-style: none;">
                                                    @foreach ($item2->getChild as $item3)
                                                   <li>
                                                    <input name="cat[]" id="{{ $item3->name }}" type="checkbox" value="{{ $item3->id }}"><label class="ml-2" for="{{ $item3->name }}">{{ $item3->name }}</label>
                                                    <ul style="list-style: none;">
                                                        @foreach ($item3->getChild as $item4)
                                                            <li>                                                    <input name="cat[]" id="{{ $item4->name }}" type="checkbox" value="{{ $item4->id }}"><label class="ml-2" for="{{ $item4->name }}">{{ $item4->name }}</label>
                                                            <ul style="list-style: none;">
                                                                @foreach ($item4->getChild as $item5)
                                                                    <li>
                                                                        <input name="cat[]" id="{{ $item5->name }}" type="checkbox" value="{{ $item5->id }}"><label class="ml-2" for="{{ $item5->name }}">{{ $item5->name }}</label>
                                                                        <ul style="list-style: none;">
                                                                            @foreach ($item5->getChild as $item6)
                                                                                <li>
                                                                                    <input name="cat[]" id="{{ $item6->name }}" type="checkbox" value="{{ $item6->id }}"><label class="ml-2" for="{{ $item6->name }}">{{ $item6->name }}</label>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                   </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>

                        </li>
                       @endforeach
                   </ol>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Tag and Brand</h4>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Select Tags </label>

                                <select id="post_tag_select" class="form-control" name="tag[]" multiple="multiple">
                                    @foreach ($all_tag as $tag )
                                    <option value="{{ $tag -> id }}">{{ $tag -> name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="margin-bottom: 3px !important;" class="form-group">
                                <label>Select a Brand</label>
                                <select id="select_pcat" name="brand" class="form-control">
                                    <option value="" class="d-none">Select</option>
                                   @foreach ($all_brand as $item)
                                   <option value="{{ $item->id }}">{{ $item->name }}</option>
                                   @endforeach

                                </select>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <input type="checkbox" id="variable_otp" value="variable"> <label for="variable_otp">Variable Oprion</label>

           <div style="display: none" class="var-box">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Size</h4>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <div style="margin-bottom: 3px !important;" class="form-group">
                               <a id="psize_btn" class="btn btn-primary" href="#">Add Size</a>

                               <br><br>
                               <div class="box-size">

                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Color Add --}}
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Product Color</h4>
                </div>
                <div class="card-body">


                    <div class="row">
                        <div class="col-lg-12">
                            <div style="margin-bottom: 3px !important;" class="form-group">
                               <a id="psize_btn_color" class="btn btn-primary" href="#">Add color</a>

                               <br><br>
                               <div class="box-size-color">

                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           </div>
        </div>

        <div class="col-md-12 mb-5">
            <button class="btn btn-primary submit-btn" type="submit">Save</button>
        </div>

<br><br>

    </div>

    </form>




</div>
</div>
</div>
		<!-- /Page Wrapper -->

</div>
	<!-- /Main Wrapper -->




@endsection
