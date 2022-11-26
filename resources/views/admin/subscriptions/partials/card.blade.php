<?php $status = strtolower($subscription->status); ?>
<div class="card border-0">
	<div class="card-body">
		<div class="d-flex align-items-center justify-content-between mb-3">
			<a class="text-dark text-underline cursor-pointer" href="{{ route('admin.subscription', ['id' => $subscription->id]) }}">
				<em>By</em> {{ ucwords(\Str::limit($subscription->customer->contact_name, 12)) }}
			</a>
			<a class="text-dark" href="{{ route('admin.subscription', ['id' => $subscription->id]) }}">
				{{ ucfirst($subscription->status) }}
			</a>
		</div>
		<?php $percent = rand(12, 94); ?>
		<div class="progress mb-3" style="height: 10px;">
		  <div class="progress-bar m-0"  role="progressbar" style="width: {{ $percent }}%;" aria-valuenow="{{ $percent }}" aria-valuemin="0" aria-valuemax="100">
		  	<small>{{ $percent }}%</small>
		  </div>
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