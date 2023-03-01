<?php $id = $payment->id; $status = strtolower($payment->status); ?>
<div class="card border-0">
	<div class="card-body">
		<div class="d-flex justify-content-between pb-3 mb-3 border-bottom">
			<div class="text-dark cursor-pointer" data-bs-toggle="modal" data-bs-target="#edit-payment-{{ $id }}">
				NGN{{ number_format($payment->amount) }}
			</div>
			<div class="text-{{ $status === 'paid' ? 'success' : 'danger' }} cursor-pointer" data-bs-toggle="modal" data-bs-target="#edit-payment-{{ $id }}">
				{{ ucfirst($status) }}
			</div>
		</div>
		<div class="d-flex justify-content-between">
			{{-- <div class="text-dark cursor-pointer" data-bs-toggle="modal" data-bs-target="#edit-payment-{{ $id }}"></div> --}}
			<div class=" cursor-pointer" data-bs-toggle="modal" data-bs-target="#edit-payment-{{ $id }}">
				{{ ucfirst($payment->type) }}
			</div>
		</div>	
	</div>
	<div class="card-footer bg-primary d-flex align-items-center justify-content-between">
		<div class="text-white">
			{{ $payment->created_at->diffForHumans() }}
		</div>
		<div>
			<a href="javascript:;" class="text-warning" data-bs-toggle="modal" data-bs-target="#edit-payment-{{ $id }}">
				<small class="">
					<i class="icofont-edit"></i>
				</small>
			</a>
		</div>
	</div>
</div>