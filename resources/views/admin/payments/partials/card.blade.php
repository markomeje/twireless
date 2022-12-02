<div class="card border-0">
	<div class="card-body d-flex justify-content-between">
		<div class="text-dark">
			NGN{{ number_format($payment->amount) }}
		</div>
		<div>
			{{ ucfirst($payment->status) }}
		</div>
	</div>
	<div class="card-footer bg-primary">
		<div class="text-white">
			{{ $payment->created_at->diffForHumans() }}
		</div>
	</div>
</div>