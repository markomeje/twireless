@include('layouts.header')
	<div class="position-relative">
		@include('frontend.layouts.navbar')
		<section class="pricing-banner position-relative">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<h1 class="text-white m-0">Our Pricing</h1>
					</div>
				</div>
			</div>
		</section>
		<section class="" style="padding: 90px 0;">
			<div class="container">
				<?php $packages = \App\Models\Package::all(); ?>
				@if(!empty($packages->count()))
					<div class="mb-4">
						<p class="text-dark bg-alabaster p-3 mb-4 rounded">Unlimited Fixed Wireless Internet Package(s)</p>
						<div class="row">
							@foreach($packages as $package)
								<div class="col-12 col-md-4 col-lg-3 mb-3">
									<div class="card border-0 rounded-bottom shadow-sm">
										<div class="card-body p-0">
											<p class="py-3 text-white mb-3 bg-darkblue px-3 border-bottom rounded-top">
												{{ empty($package->name) ? 'Nill' : ucwords($package->name) }}
											</p>
											<div class="pb-3 mb-3 px-3 border-bottom text-dark">
											 	({{ empty($package->devices) ? 'Nill' : $package->devices }}) Recommended Concurrent Devices
											</div>
											<div class="pb-3 mb-3 px-3 border-bottom text-dark">
												{{ empty($package->speed) ? 'Nill' : 'Up to '.$package->speed }}Mbps
											</div>
											<div class="pb-3 mb-3 px-3 border-bottom text-dark">
												{{ empty($package->price) ? 'Nill' : 'NGN'.number_format((int)$package->price) }} for {{ ucwords($package->duration) }}Days
											</div>
											<div class="pb-3 px-3 text-dark border-bottom mb-3">
											{{ empty($package->setup_fee) ? 'Nill' : 'NGN'.number_format((int)$package->setup_fee).' One-off setup fee'; }}
											</div>
											<div class="px-3 mb-4">
												<a href="javascript:;" class="btn btn-sm bg-primary px-5 rounded-pill text-white">Subscribe</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif
				<?php $bundles = \App\Models\Bundle::all(); ?>
				@if(!empty($bundles->count()))
					<div class="pb-3">
						<p class="text-dark bg-alabaster p-3 mb-4 rounded">Quota Package(s)</p>
						<div class="row">
							@foreach($bundles as $bundle)
								<div class="col-12 col-md-4 col-lg-3 mb-4">
									<div class="card border-0 rounded-bottom shadow-sm">
										<div class="card-body p-0">
											<p class="py-3 text-white mb-3 bg-darkblue px-3 border-bottom rounded-top">Data Size ({{ empty($bundle->size) ? 'Nill' : $bundle->size }}GB)
											</p>
											<div class="pb-3 mb-3 px-3 border-bottom text-dark">
												{{ empty($bundle->price) ? 'Nill' : 'NGN'.number_format((int)$bundle->price); }}
											</div>
											<div class="px-3 mb-4">
												<a href="javascript:;" class="btn btn-sm bg-primary px-5 rounded-pill text-white">Subscribe</a>
											</div>
										</div>
									</div>
								</div>
							@endforeach
						</div>
					</div>
				@endif
				<div>
					<h3 class="text-darkblue">For Event and Dedicated Packages</h3>
					<h5 class="mb-4">
						<h4>
							<a href="tel:+2349070133000" class="text-dark">Call +2349070133000</a>
						</h4>
					</h5>
				</div>
			</div>
		</section>
		@include('frontend.layouts.bottom')
	</div>
@include('layouts.footer')