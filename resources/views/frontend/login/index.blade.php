@include('layouts.header')
	<div class="position-relative">
		@include('frontend.layouts.navbar')
		<section class="section-banner bg-alice position-relative">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<h1 class="text-darkblue mb-0">Login <span class="text-pink">Here</span></h1>
					</div>
				</div>
			</div>
		</section>
		<section class="py-5">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-md-4 mb-4">
						<form action="javascript:;" method="post" class="login-form rounded mb-3" data-action="/login" autocomplete="off">
							<div class="alert mt-4 px-3 login-message d-none"></div>
							<div class="form-row">
								<div class="form-group input-group-lg col-12">
									<label for="" class="text-romansilver mb-2">Email</label>
									 <input type="email" name="email" class="form-control bg-alabaster email" placeholder="e.g., john@doe.com">
									 <small class="error email-error text-danger"></small>
								</div>
								<div class="form-group input-group-lg col-12">
									<label for="" class="mb-2 text-romansilver">Password (<a href="/password">Forgot Password?</a>)
									</label>
									<input type="password" name="password" class="form-control bg-alabaster password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
									<small class="error password-error text-danger"></small>
								</div>
							</div>
							<div class="mb-3">
								<div class="custom-control custom-switch">
								    <input type="checkbox" class="custom-control-input" id="rememberme" value="on" name="rememberme">
								    <label class="custom-control-label cursor-pointer text-muted" for="rememberme">Remember Login</label>
								</div>
							</div>
							<button type="submit" class="btn btn-lg border-0 bg-primary px-5 rounded-pill text-white login-button">
								<img src="/images/svgs/spinner.svg" class="mr-2 d-none login-spinner mb-1">
								Login
							</button>
						</form>
						<p class="alert alert-info mt-2">
							Don't have an account? <a href="/signup">Signup Here</a>
						</p>
					</div>
					<div class="col-12 col-md-8 mb-4">
						<div class="">
							<img src="/images/banners/safe.png" class="img-fluid w-100">
						</div>
					</div>
				</div>
			</div>
		</section>
		@include('frontend.layouts.bottom')
	</div>
@include('layouts.footer')