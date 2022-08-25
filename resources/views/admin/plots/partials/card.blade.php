<div class="card border-0 shadow">
	<div class="card-body" style="background-image:url('/images/title-bg.jpg'); background-size: cover;">
		<div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
			<div class="text-white cursor-pointer" data-bs-toggle="modal" data-bs-target="#edit-plot-{{ $plot->id }}">
				{{ ucwords($plot->name) }}
			</div>
			<div class="text-white">
				({{ $plot->number }})
			</div>
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<div class="text-white">
				{{ ucwords($plot->layout->name) }}
			</div>
			<div class="text-white">
				<i class="icofont-caret-down"></i>
			</div> 
		</div>	
	</div>
	<div class="card-footer d-flex align-items-center justify-content-between">
      <div>
        <small>{{ $plot->created_at->diffForHumans() }}</small>
      </div>
      <div class="d-flex align-items-center">
        <small class="text-primary cursor-pointer me-2" data-bs-toggle="modal" data-bs-target="#edit-plot-{{ $plot->id }}">
          <i class="icofont-edit"></i>
        </small>
        <small class="text-danger cursor-pointer">
          <i class="icofont-trash"></i>
        </small>
      </div>
    </div>
</div>