<div class="card">
	<div class="card-body">
		<div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
			<div class="cursor-pointer text-underline" data-bs-toggle="modal" data-bs-target="#edit-package-{{ $package->id }}">
				{{ ucwords(\Str::limit($package->name, 14)) }}
			</div>
			<div class="cursor-pointer text-dark" data-bs-toggle="modal" data-bs-target="#edit-package-{{ $package->id }}">
				{{ $package->speed }}Mbps
			</div>
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<div class="cursor-pointer text-dark" data-bs-toggle="modal" data-bs-target="#edit-package-{{ $package->id }}">
				NGN{{ number_format($package->price) }}
			</div>
			<div class="text-dark cursor-pointer text-underline" data-bs-toggle="modal" data-bs-target="#edit-package-{{ $package->id }}">
				{{ number_format($package->duration) }}Days
			</div>
		</div>
	</div>
	<div class="card-footer bg-primary d-flex justify-content-between align-items-center">
		<div class="text-white">
			{{ $package->created_at->diffForHumans() }}
		</div>
		<div class="d-flex align-items-center">
			<small class="text-danger me-2">
				<i class="icofont-trash"></i>
			</small>
			<a href="javascript:;" class="text-warning" data-bs-toggle="modal" data-bs-target="#edit-package-{{ $package->id }}">
				<small class="">
					<i class="icofont-edit"></i>
				</small>
			</a>
		</div>
	</div>
</div>