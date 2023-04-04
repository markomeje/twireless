<div class="card">
	<div class="card-body">
		<div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
			<div class="">
				NGN{{ number_format($bundle->price) }}
			</div>
			<div class="">
				{{ $bundle->size }}GB
			</div>
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<div>
				{{ $bundle->duration }} Days
			</div>
			<div class="">
				{{ 'Nill' }}
			</div>
		</div>
	</div>
	<div class="card-footer bg-dark d-flex justify-content-between align-items-center">
		<div class="text-white">
			{{ $bundle->created_at->diffForHumans() }}
		</div>
		{{-- <div class="d-flex align-items-center">
			<a href="" class="text-danger me-2">
				<small class="">
					<i class="icofont-trash"></i>
				</small>
			</a>
			<a href="javascript:;" class="text-warning">
				<small class="">
					<i class="icofont-edit"></i>
				</small>
			</a>
		</div> --}}
	</div>
</div>
