<?php $status = strtolower($subscription->status); ?>
<div class="card border-0">
	<div class="card-body">
		<div class="d-flex align-items-center justify-content-between mb-3">
			<a class="text-dark cursor-pointer" href="{{ route('admin.subscription', ['id' => $subscription->id]) }}">
				<em>By</em> {{ ucwords(\Str::limit($subscription->customer->contact_name, 12)) }}
			</a>
			<a class="text-dark" href="{{ route('admin.subscription', ['id' => $subscription->id]) }}">
				{{ ucfirst($status) }}
			</a>
		</div>
		<div class="progress mb-3" style="height: 10px;">
			@if($status === 'active' || $status === 'expired')
				<?php $timing = \App\Library\Timing::calculate($subscription->expiry_date, $subscription->start_date); ?>
			  <div class="progress-bar m-0 bg-{{ $timing->progress() >= 89 ? 'danger' : 'success' }}"  role="progressbar" style="width: {{ $timing->progress() }}%;" aria-valuenow="{{ $timing->progress() }}" aria-valuemin="0" aria-valuemax="100">
			  	<small>{{ $timing->progress() }}%</small>
			  </div>
			@else
			  <div class="progress-bar m-0"  role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
			  	<small>0%</small>
			  </div>
			@endif
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<a href="{{ route('admin.subscription', ['id' => $subscription->id]) }}" class="text-dark">{{ $subscription->sector->name }}</a>
			<a href="{{ route('admin.subscription', ['id' => $subscription->id]) }}" class="text-dark">
				{{ $subscription->type == 'bundle' ? $subscription->bundle->size : $subscription->package->name }}
			</a>
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