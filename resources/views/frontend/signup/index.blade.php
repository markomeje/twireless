@include('layouts.header')
	<div class="position-relative">
		@include('frontend.layouts.navbar')
		<section class="section-banner bg-alice position-relative">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="">
							<h1 class="text-darkblue">Signup Here</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="" style="padding: 90px 0 100px;">
			<div class="container">
				<p class="text-romansilver">Please Fill In All Fields.</p>
				<div class="row">
					<div class="col-12">
						<form action="javascript:;" method="post" class="signup-form p-4 rounded border" data-action="{{ route('signup.process') }}" autocomplete="off">
							@csrf
							<div class="form-row">
								<div class="form-group input-group-lg col-md-6">
									<label for="" class="text-romansilver mb-2">Fullname</label>
									<input type="text" name="fullname" class="form-control fullname" placeholder="e.g., John Kelly">
									<small class="error fullname-error text-danger"></small>
								</div>
								<div class="form-group input-group-lg col-md-6">
									<label for="" class="text-romansilver mb-2">State</label>
									<select class="custom-select form-control state" name="state">
										<option value="">Select State</option>
										<?php if(empty($states)): ?>
										   <option value="">No state</option>
										<?php else: ?>
											<?php foreach($states as $state): ?>
												<?php $state = empty($state->statename) ? 'Enugu' : $state->statename; ?>
												<option value="<?= $state; ?>">
													<?= ucfirst($state); ?>
												</option>
											<?php endforeach; ?>
										<?php endif; ?>
									</select>
									<small class="error state-error text-danger"></small>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group input-group-lg col-md-6">
									<label for="" class="text-romansilver mb-2">Email</label>
									<input type="email" name="email" class="form-control email" placeholder="e.g., john@doe.com">
									<small class="error email-error text-danger"></small>
								</div>
								<div class="form-group input-group-lg col-md-6">
									<label for="" class="text-romansilver mb-2">Phone</label>
									<input type="text" name="phone" class="form-control phone" placeholder="e.g., 09011112113">
									<small class="error phone-error text-danger"></small>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group input-group-lg col-md-6">
									<label for="" class="mb-2 text-romansilver">Password
									</label>
									<input type="password" name="password" class="form-control password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
									<small class="error password-error text-danger"></small>
								</div>
								<div class="form-group input-group-lg col-md-6">
									<label for="" class="mb-2 text-romansilver">Confirm Password
									</label>
									<input type="password" name="confirmpassword" class="form-control confirmpassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
									<small class="error confirmpassword-error text-danger"></small>
								</div>
							</div>
							<div class="mb-3">
								<label for="" class="mb-2 text-romansilver">Address
									</label>
								<textarea class="form-control address" name="address" rows="2" placeholder="Enter Address"></textarea>
								<small class="error address-error text-danger"></small>
							</div>
							<div class="mb-3">
								<div class="custom-control custom-switch">
								  	<input type="checkbox" class="custom-control-input agree" name="agree" id="agree">
								  	<label class="custom-control-label" for="agree"><a href="/terms" target="_blank">Agree to Terms and Conditions?</a></label>
								</div>
								<small class="error agree-error text-danger"></small>
							</div>
							<button type="submit" class="btn mt-2 btn-lg border-0 bg-primary px-5 rounded-pill text-white signup-button">
								<img src="/images/svgs/spinner.svg" class="mr-2 d-none signup-spinner mb-1">
								Signup
							</button>
							<div class="alert mt-4 px-3 signup-message d-none"></div>
						</form>
					</div>
				</div>
			</div>
		</section>
		@include('frontend.layouts.bottom')
	</div>
@include('layouts.footer')