<section style="padding: 0 0 100px;">
	<div class="container">
		<div>
			<div class="row justify-content-center">
				<div class="col-12 col-md-4">
					<h3 class="text-darkblue text-center mb-4">Some of our Clients and Partners</h3>
				</div>
			</div>
			<div class="">
				<div class="row align-items-center">
					<div class="col-4 col-md-1">
						<img src="/images/clients/hotr.png" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<div class="bg-dark">
							<img src="/images/clients/wicrypt.png" class="img-fluid mb-2">
						</div>
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/betking.jpeg" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/rewind.jpeg" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/enuguwifi.svg" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/polomall.png" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<div class="bg-dark">
							<img src="/images/clients/urbanradio.svg" class="img-fluid mb-2">
						</div>
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/enugusme.png" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/galaxybackbone.jpg" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/ejalet.jpg" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/solidfm.png" class="img-fluid mb-2">
					</div>
					<div class="col-4 col-md-1">
						<img src="/images/clients/mtn.png" class="img-fluid mb-2">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-box py-5" style="background-color: #0669b1;">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 mb-4" style="border-right: 2px dotted #fafafa;">
				<h1 class="text-white mb-4">Ready to Signup for Unlimited Internet? </h1>
				<a href="/signup" class="btn-lg text-white px-5 btn bg-darkblue rounded-pill">Signup</a>
			</div>
			<div class="col-12 col-md-6 pl-lg-5">
				<h1 class="text-white">Have Any Question?</h1>
				<h5 class="mb-4">
					<a href="tel:+2349070133000" class="text-white">Call +2349070133000</a>
				</h5>
				<div class="mb-3">
					<a href="/contact" class="btn-lg text-white px-5 btn bg-darkblue rounded-pill">Contact Us</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="footer-section position-relative">
	<div class="container pb-5 mb-5" style="border-bottom: 1px solid var(--saphire)">
		<div class="row">
			<div class="col-12 col-lg-5 mb-4">
				<div class="logo-wrapper mb-4">
					<img src="/images/logos/small.png" class="img-fluid object-fit-cover">
				</div>
				<p class="text-white">T-Wireless is a leading broadband communication service provider to corporate organizations in Nigeria, where we have our point-of-presence and complement of technical support staff.</p>
				<div class="mb-4">
					<a href="/about" class="btn-lg text-white px-5 btn btn-primary rounded-pill">Learn More</a>
				</div>
				<div class="d-flex mb-4">
					<a href="javascript:;" class="text-romansilver mr-3">
						<i class="icofont-facebook"></i>
					</a>
					<a href="javascript:;" class="text-romansilver mr-3">
						<i class="icofont-instagram"></i>
					</a>
					<a href="javascript:;" class="text-romansilver mr-3">
						<i class="icofont-twitter"></i>
					</a>
				</div>
			</div>
			<div class="col-12 col-lg-7">
				<div class="row">
					<div class="col-12 col-md-6">
						<h5 class="text-white mb-3">Quick Links</h5>
						<ul class="quick-links">
							<li>
								<a href="/" class="text-white d-block p-3 rounded mb-3 bg-primary">Home</a>
							</li>
							<li>
								<a href="/about" class="text-white d-block p-3 rounded mb-3 bg-primary">About</a>
							</li>
							<li>
								<a href="/services" class="text-white d-block p-3 rounded mb-3 bg-primary">Services</a>
							</li>
							<li>
								<a href="/pricing" class="text-white d-block p-3 rounded mb-3 bg-primary">Pricing</a>
							</li>
							<li>
								<a href="/contact" class="text-white d-block p-3 rounded mb-3 bg-primary">Contact</a>
							</li>
							@if(auth()->check())
								@if(auth()->user()->role === 'admin')
									<li>
										<a href="<?= ADMIN_DOMAIN; ?>" class="text-white d-block p-3 rounded mb-3 bg-primary" target="_blank">Dashboard</a>
									</li>
								@endif
							@else
								<li>
									<a href="/login" class="text-white d-block p-3 rounded mb-3 bg-primary">Login</a>
								</li>
								<li>
									<a href="/signup" class="text-white d-block p-3 rounded mb-3 bg-primary">Signup</a>
								</li>
							@endif
						</ul>
					</div>
					<div class="col-12 col-md-6">
						<h5 class="mb-3 text-white">Other Services</h5>
						<ul class="other-services">
							<li>
								<a href="https://taprap.net" target="_blank" class="text-white d-block p-3 rounded mb-3 bg-primary">Cloud Storage</a>
							</li>
							<li>
								<a href="https://taprap.net" target="_blank" class="text-white d-block p-3 rounded mb-3 bg-primary">RFID Based Technology</a>
							</li>
							<li>
								<a href="https://taprap.net" target="_blank" class="text-white d-block p-3 rounded mb-3 bg-primary">Website Design</a>
							</li>
							<li>
								<a href="https://taprap.net" target="_blank" class="text-white d-block p-3 rounded mb-3 bg-primary">Mobile App Development</a>
							</li>
							<li>
								<a href="https://taprap.net" target="_blank" class="text-white d-block p-3 rounded mb-3 bg-primary">Software Development</a>
							</li>
							<li>
								<a href="https://taprap.net" target="_blank" class="text-white d-block p-3 rounded mb-3 bg-primary">Web Hosting</a>
							</li>
							<li>
								<a href="https://taprap.net" target="_blank" class="text-white d-block p-3 rounded mb-3 bg-primary">Website Development</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pb-5">
		<div class="text-white">© Copyright <?= date("Y"); ?> T-Wireless, All Rights Reserved.</div>
	</div>
</section>