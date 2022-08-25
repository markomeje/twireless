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
		{{-- <section class="" style="padding: 90px 0;">
			<div class="container">
				<?php if(empty($allPlans)): ?>
					<div class="alert alert-info">No Pricing Plans</div>
				<?php else: ?>
					<?php $plans = []; ?>
					<?php foreach($allPlans as $plan): ?>
						<?php if(isset($plan->type)) $plans[$plan->type][] = $plan; ?>
					<?php endforeach; ?>
				<?php endif; ?>
				<?php if(isset($plans['fixed'])): ?>
					<div class="pb-3 mb-4 border-bottom">
						<p class="text-romansilver bg-alabaster p-3 mb-4 rounded">Unlimited Fixed Wireless Internet Package(s)</p>
						<div class="row">
							<?php foreach($plans['fixed'] as $plan): ?>
								<div class="col-12 col-md-4 col-lg-3 mb-3">
									<div class="card border-0 rounded-bottom shadow-sm">
										<div class="card-body p-0">
											<p class="py-3 text-white mb-3 bg-darkblue px-3 border-bottom text-romansilver rounded-top">
												<?= empty($plan->bandwidth) ? 'Nill' : ucwords($plan->bandwidth); ?>
											</p>
											<div class="pb-3 mb-3 px-3 border-bottom text-romansilver">
											 	(<?= empty($plan->connections) ? 'Nill' : $plan->connections; ?>) Recommended Concurrent Devices
											</div>
											<div class="pb-3 mb-3 px-3 border-bottom text-romansilver">
												<?= empty($plan->speed) ? 'Nill' : 'Up to '.$plan->speed; ?>
											</div>
											<div class="pb-3 mb-3 px-3 border-bottom text-romansilver">
												<?= empty($plan->monthly) ? 'Nill' : 'NGN'.number_format((int)$plan->monthly).' Monthly'; ?>
											</div>
											<div class="pb-3 px-3 text-romansilver">
											<?= empty($plan->price) ? 'Nill' : 'NGN'.number_format((int)$plan->price).' One-off setup fee'; ?>
											</div>
											<div class="px-3 mb-4">
												<a href="<?= DOMAIN; ?>/subscriptions/plan/<?= empty($plan->id) ? 0 : $plan->id; ?>" class="btn btn-sm bg-primary px-5 rounded-pill text-white">Subscribe</a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
				<?php if(isset($plans['quota'])): ?>
					<div class="pb-3">
						<p class="text-romansilver bg-alabaster p-3 mb-4 rounded">Quota Package(s)</p>
						<div class="row">
							<?php foreach($plans['quota'] as $plan): ?>
								<div class="col-12 col-md-4 col-lg-3 mb-3">
									<div class="card border-0 rounded-bottom shadow-sm">
										<div class="card-body p-0">
											<p class="py-3 text-white mb-3 bg-darkblue px-3 border-bottom text-romansilver rounded-top">Data Size (<?= empty($plan->size) ? 'Nill' : $plan->size; ?>)
											</p>
											<div class="pb-3 mb-3 px-3 border-bottom text-romansilver">
												<?= empty($plan->price) ? 'Nill' : 'NGN'.number_format((int)$plan->price); ?>
											</div>
											<?php if(!empty($allActiveBundles)): ?>
			                				    <?php foreach($allActiveBundles as $bundle): ?>
			                				        <?php if((int)$bundle->id == (int)$plan->bundleid): ?>
			                				        	<div class="pb-3 px-3 text-romansilver">
			                				        		<?= empty($bundle->name) ? 'Nill' : $bundle->name; ?>
			                				        	</div>
			                				        <?php endif; ?>
			                				    <?php endforeach; ?>
			            				    <?php endif; ?>
											<div class="px-3 mb-4">
												<a href="<?= DOMAIN; ?>/subscriptions/plan/<?= empty($plan->id) ? 0 : $plan->id; ?>" class="btn btn-sm bg-primary px-5 rounded-pill text-white">Subscribe</a>
											</div>
										</div>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>
				<div>
					<h3 class="text-darkblue">For Event and Dedicated Packages</h3>
					<h5 class="mb-4">
						<h4>
							<a href="tel:+2349070133000" class="text-dark">Call +2349070133000</a>
						</h4>
					</h5>
				</div>
			</div>
		</section> --}}
		@include('frontend.layouts.bottom')
	</div>
@include('layouts.footer')