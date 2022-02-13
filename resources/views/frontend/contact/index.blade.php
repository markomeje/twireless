@include('layouts.header')
    <div class="position-relative">
		@include('frontend.layouts.navbar')
		<section class="pricing-banner position-relative">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-12 col-lg-6">
						<h1 class="text-white">
							<span class="text-pink">Contact</span> Here
						</h1>
						<p class="text-white mb-2">
							Suite C9B Elim Plaza Ebeano Tunnel Enugu.
						</p>
						<p class="mb-0">
							<a href="tel:+2349070133000" class="text-white">Call +2349070133000</a>
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="position-relative" style="padding: 80px 0 100px;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<p class="text-romansilver">Please fill in all fields.</p>
						<div class="card shadow-sm bg-white">
							<div class="card-body">
								<form method="post" action="javascript:;" class="contact-form" data-action="/contact/process" autocomplete="off">
				                    <div class="d-flex justify-content-between pb-2 mb-3 border-bottom">
				                        <p class="modal-title text-romansilver mb-0">Send Message</p>
				                    </div>
				                    <div class="form-row">
				                        <div class="form-group col-md-6 input-group-lg">
				                            <label class="text-romansilver mb-2">Firstname</label>
				                            <input type="text" name="firstname" class="form-control bg-alabaster firstname" placeholder="e.g., Akan">
				                            <small class="error firstname-error text-danger"></small>
				                        </div>
										<div class="form-group col-md-6 input-group-lg">
											<label class="text-romansilver mb-2">Lastname</label>
											<input type="text" name="lastname" class="form-control bg-alabaster lastname" placeholder="e.g., John">
											<small class="error lastname-error text-danger"></small>
										</div>
				                    </div>
				                    <div class="form-row">
				                        <div class="form-group col-md-6 input-group-lg">
				                            <label class="text-romansilver mb-2">Email</label>
				                            <input type="email" name="email" class="form-control bg-alabaster email" placeholder="e.g., akan@john.com">
				                            <small class="error email-error text-danger"></small>
				                        </div>
										<div class="form-group col-md-6 input-group-lg">
											<label class="text-romansilver mb-2">Phone Number</label>
											<input type="number" name="phone" class="form-control bg-alabaster phone" placeholder="e.g., 09065675430">
											<small class="error phone-error text-danger"></small>
										</div>
				                    </div>
									<div class="mb-4">
										<label class="text-romansilver mb-2">Message</label>
										<textarea class="form-control bg-alabaster message" name="message" rows="5" placeholder="Enter your message here"></textarea>
										<small class="error message-error text-danger"></small>
									</div>
				                    <div class="alert mb-3 contact-message d-none"></div>
				                    <button type="submit" class="btn px-5 btn-lg rounded-pill bg-primary text-white contact-button px-5">
			                            <img src="/images/svgs/spinner.svg" class="mr-2 d-none contact-spinner mb-1">
			                            Submit
			                        </button>
					            </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		@include('frontend.layouts.bottom')
	</div>
@include('layouts.footer')