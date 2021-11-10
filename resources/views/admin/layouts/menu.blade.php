		<!-- Sidebar -->
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="menu-title">
							<span>Main</span>
						</li>
						<li class="active">
							<a href="{{ route('admin.dashboard') }}"><i class="fe fe-home"></i> <span>Dashboard</span></a>
						</li>
                        <li class="submenu">
							<a href="#"><i class="fe fe-document"></i> <span> Blog </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('post.index') }}"> Posts </a></li>
								<li><a href="{{ route('category.index') }}"> Category</a></li>
								<li><a href="{{ route('tag.index') }}"> Tag </a></li>

							</ul>
						</li>

                        <li class="submenu">
							<a href="#"><i class="fe fe-document"></i> <span> Product </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="{{ route('product.index') }}"> Product </a></li>
								<li><a href="{{ route('product-category.index') }}"> Category</a></li>
								<li><a href="{{ route('product-tag.index') }}"> Tag </a></li>
								<li><a href="{{ route('brand.index') }}"> Brand </a></li>
							</ul>
						</li>

                        <li class="submenu">
							<a href="#"><i class="fe fe-document"></i> <span> Pages </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="blog.html"> Product </a></li>
								<li><a href="blog-details.html"> Category</a></li>
								<li><a href="add-blog.html"> Tag </a></li>
								<li><a href=""> Brand </a></li>
							</ul>
						</li>

                        <li class="submenu">
							<a href="#"><i class="fe fe-users"></i> <span> Users </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="blog.html"> Users </a></li>
								<li><a href="blog-details.html"> Role</a></li>
								<li><a href="add-blog.html"> Permission </a></li>

							</ul>
						</li>


						<li>
							<a href="settings.html"><i class="fe fe-vector"></i> <span>Settings</span></a>
						</li>






					{{-- Multi Pages Menu --}}
						{{-- <li class="submenu">
							<a href="javascript:void(0);"><i class="fe fe-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li class="submenu">
									<a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
									<ul style="display: none;">
										<li><a href="javascript:void(0);"><span>Level 2</span></a></li>
										<li class="submenu">
											<a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
											<ul style="display: none;">
												<li><a href="javascript:void(0);">Level 3</a></li>
												<li><a href="javascript:void(0);">Level 3</a></li>
											</ul>
										</li>
										<li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);"> <span>Level 1</span></a>
								</li>
							</ul>
						</li> --}}
					</ul>
				</div>
			</div>
		</div>
		<!-- /Sidebar -->



        {{-- .sidebar-menu ul ul a.active {
            color: #20e3ff;
            text-decoration: underline;
        } --}}
