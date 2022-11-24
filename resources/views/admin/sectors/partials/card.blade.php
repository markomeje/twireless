<div class="card shadow-sm">
	<div class="card-body">
		<div class="">
			{{ ucwords($sector->name) }}
		</div>
	</div>
	<div class="card-footer bg-primary d-flex align-items-center">
		<div class="text-white">
			{{ $sector->created_at->diffForHumans() }}
		</div>
	</div>
</div>