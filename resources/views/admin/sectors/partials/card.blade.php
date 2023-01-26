<div class="card shadow-sm">
	<div class="card-body d-flex align-items-center justify-content-between">
		<a href="{{ route('admin.sector', ['id' => $sector->id]) }}" class="text-underline text-dark">
			{{ ucwords($sector->name) }}
		</a>
		<a href="{{ route('admin.sector', ['id' => $sector->id]) }}" class="text-underline text-dark">
			({{ $sector->subscriptions->count() }})
		</a>
	</div>
	<div class="card-footer bg-primary d-flex align-items-center">
		<div class="text-white">
			{{ $sector->created_at->diffForHumans() }}
		</div>
	</div>
</div>