<?php $status = strtolower($subscription->status); ?>
<div class="card border-0">
	<div class="card-body">
		<div class="d-flex align-items-center justify-content-between border-bottom pb-3 mb-3">
			<div class="text-dark text-underline cursor-pointer">
				<em>By</em> {{ ucwords(\Str::limit($subscription->customer->contact_name, 12)) }}
			</div>
			<div>
				{{ ucfirst($subscription->status) }}
			</div>
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<a href="{{ route('admin.subscription', ['id' => $subscription->id]) }}" class="text-dark">View Details</a>
			<div>
				{{ $subscription->type == 'bundle' ? $subscription->bundle->size : $subscription->package->name }}
			</div>
		</div>
	</div>
	<div class="card-footer bg-primary d-flex justify-content-between">
		<div class="text-white">
			{{ $subscription->created_at->diffForHumans() }}
		</div>
		<div>
			<div></div>
		</div>
	</div>
</div>