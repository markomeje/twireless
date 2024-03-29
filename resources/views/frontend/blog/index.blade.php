@include('layouts.header')
    @include('frontend.layouts.navbar')
    <div class="bg-main-ash min-vh-100">
    	<section class="blog-banner">
			<div class="container-fluid">
				<div class="row mb-4">
					<div class="col-12 mb-4">
						<h1 class="text-white">Welcome to our Blog</h1>
						<p class="text-white p-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco</p>
					</div>
				</div>
			</div>
		</section>
		<section class="position-relative" style="top: -80px;">
			<div class="container-fluid">
				<div class="">
                        @if(empty($blogs->count()))
                            <div class="alert-info alert">No Blogs Yet</div>
                        @else
                            <div class="row">
                                @foreach($blogs as $blog)
                                    <div class="col-12 col-md-6 col-lg-3 mb-4">
                                        @include('frontend.blog.partials.card')
                                    </div>
                                @endforeach
                            </div> 
                        @endif
                    </div>
                </div>
			</div>
		</section>
    </div>
	@include('frontend.layouts.bottom')
@include('layouts.footer')