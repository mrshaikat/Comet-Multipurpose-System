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

					<h3 class="page-title">Product Category</h3>
					<ul class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
						<li class="breadcrumb-item"><a href="{{ route('post.index') }}">Product</a></li>
						<li class="breadcrumb-item active">Category</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /Page Header -->


        <div class="row">
            {{-- validate Message --}}
            @include('admin.validate')

            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Create Product Category </h4>
                    </div>
                    <div style="padding: 10px !important;" class="card-body">
                        <form action="{{ route('product-category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div style="margin-bottom: 3px !important;" class="form-group">
                                        <label> Name</label>
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                    <div style="margin-bottom: 3px !important;" class="form-group">
                                        <label> Icon</label>
                                        <input type="text" name="icon" class="form-control">
                                    </div>

                                    <div style="margin-bottom: 3px !important;" class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>

                                    <div style="margin-bottom: 3px !important;" class="form-group">
                                        <label>Parent Category</label>
                                        <select id="select_pcat" name="parent" class="form-control">
                                            <option value="" class="d-none">Select</option>
                                           @foreach ($all_data as $item)
                                           <option value="{{ $item->id }}">{{ $item->name }}</option>
                                           @endforeach

                                        </select>
                                    </div>

                                </div>

                            </div>


                            <div style="margin-top: 10px !important;margin-bottom: 7px !important;" class="submit-section">
                                <button class="btn btn-primary btn-sm" type="submit" name="form_submit" value="submit">Add Category</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-md-8" >
                <div class="card">
                    <div class="card-header" style="position: sticky; top:0; z-index:5;">
                        <h4 class="card-title">Product Category Structure </h4>
                    </div>
                    <div class="card-body" style="max-height: 385px; overflow:auto;">
                      <ul>
                          @foreach ($all_first_cat as $item1)
                              <li style="border-bottom: 1px solid rgba(0,0,0,0.19);">{{ $item1->name }}
                                <div class="cat-manage">
                                    <a class="text-primary pcat_edit" edit_id="{{ $item1->id }}" href="{{ route('pcat.edit',$item1->id) }}">Edit</a>
                                    <a class="text-danger" href="{{ route('pcat.delete', $item1->id) }}">Delete</a>
                                </div>
                                <ul>
                                    @foreach ($item1->getChild as $item2)
                                        <li>{{ $item2->name }}
                                            <div class="cat-manage">
                                                <a class="text-primary pcat_edit" edit_id="{{ $item2->id }}" href="{{ route('pcat.edit',$item2->id) }}">Edit</a>
                                                <a class="text-danger" href="{{ route('pcat.delete', $item2->id) }}">Delete</a>
                                            </div>
                                            <ul>
                                                @foreach ($item2->getChild as $item3)
                                                    <li>{{ $item3->name }}
                                                        <div class="cat-manage">
                                                            <a class="text-primary pcat_edit" edit_id="{{ $item3->id }}" href="{{ route('pcat.edit',$item3->id) }}">Edit</a>
                                                            <a class="text-danger" href="{{ route('pcat.delete', $item3->id) }}">Delete</a>
                                                        </div>
                                                        <ul>
                                                            @foreach ($item3->getChild as $item4)
                                                                <li>{{ $item4->name }}
                                                                    <div class="cat-manage">
                                                                        <a class="text-primary pcat_edit" edit_id="{{ $item4->id }}" href="{{ route('pcat.edit',$item4->id) }}">Edit</a>
                                                                        <a class="text-danger" href="{{ route('pcat.delete', $item4->id) }}">Delete</a>
                                                                    </div>
                                                                    <ul>
                                                                        @foreach ($item4->getChild as $item5)
                                                                            <li>{{ $item5->name }}
                                                                                <div class="cat-manage">
                                                                                    <a class="text-primary pcat_edit" edit_id="{{ $item5->id }}" href="{{ route('pcat.edit',$item5->id) }}">Edit</a>
                                                                                    <a class="text-danger" href="{{ route('pcat.delete', $item5->id) }}">Delete</a>
                                                                                </div>
                                                                                <ul>
                                                                                    @foreach ($item5->getChild as $item6)
                                                                                        <li>{{ $item6->name }}
                                                                                            <div class="cat-manage">
                                                                                                <a class="text-primary pcat_edit" edit_id="{{ $item6->id }}" href="{{ route('pcat.edit',$item6->id) }}">Edit</a>
                                                                                                <a class="text-danger" href="{{ route('pcat.delete', $item6->id) }}">Delete</a>
                                                                                            </div>
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
                    </div>
                </div>
            </div>

        </div>
</div>
			{{-- End Post --}}
</div>
</div>
		<!-- /Page Wrapper -->

</div>

{{-- Edit Category Modal START --}}
<div id="edit_pcat_modal" class="modal fade">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-2">
            <div class=" modal-header">
                <h3 class=" modal-title">Edit category</h3>



                <button class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class=" modal-body">
                <form action="{{ route('pcat.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="">Name</label>
                        <input id="focus_remove" name="name" class="form-control" type="text" placeholder="category Name">
                        <input id="focus_remove" name="edit_id" class="form-control" type="hidden">
                    </div>

                    <div class="form-group">
                        <label for="">Icon</label>
                        <input id="focus_remove" name="icon" class="form-control" type="text" placeholder="Icon Name">

                    </div>

                    <div class="form-group">

                        <label for="">Image</label>
                        <input id="focus_remove" name="image" class="form-control" type="file" placeholder="">
                        <img style="width:150px; height:auto;" src="" alt=""> <br>
                        <input id="focus_remove" name="old_image" class="form-control" type="hidden" placeholder="">
                    </div>

                    <div style="margin-bottom: 3px !important;" class="form-group">
                        <label>Parent Category</label>
                        <select id="select_pcat_edit" name="parent" class="form-control">

                        </select>
                    </div>

                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn-modal" type="submit" name="form_submit" value="submit">Update category</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
{{-- Edit Category Modal END--}}


@endsection
