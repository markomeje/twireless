<div class="card border-0 shadow">
	<div class="card-body" style="background-image:url('/images/title-bg.jpg'); background-size: cover;">
		<div class="d-flex align-items-center justify-content-between border-bottom mb-3 pb-3">
			<div class="dropdown">
			  <a href="javascript:;" class="dropdown-toggle text-white cursor-pointer" data-bs-toggle="dropdown" id="fee-name-{{ $fee->id }}">
			      {{ ucwords(\Str::limit($fee->name, 18)) }}
			  </a>
			  <ul class="dropdown-menu" style="width: 240px !important; height: auto !important;" aria-labelledby="fee-name-{{ $fee->id }}">
		      <li>
	          <a class="dropdown-item text-wrap" href="javascript:;">
	            {{ ucwords($fee->name) }}
	          </a>
		      </li>
			  </ul>
			</div>
			@if(empty($fee->form))
				<div class="text-white">No form</div>
			@else
				<div class="text-white" data-bs-toggle="modal" data-bs-target="#edit-fee-{{ $fee->id }}-">See form</div>
			@endif
		</div>
		<div class="d-flex align-items-center justify-content-between">
			<div class="text-white">
				NGN{{ number_format($fee->amount) }} 
			</div>
			<div class="text-white">
				{{ ucwords($fee->per ?? 'Nill') }}
			</div> 
		</div>	
	</div>
	<div class="card-footer d-flex align-items-center justify-content-between">
      <div>
        <small>{{ $fee->created_at->diffForHumans() }}</small>
      </div>
      <div class="d-flex align-items-center">
        <small class="text-primary cursor-pointer me-2" data-bs-toggle="modal" data-bs-target="#edit-fee-{{ $fee->id }}-">
          <i class="icofont-edit"></i>
        </small>
        <small class="text-danger cursor-pointer">
          <i class="icofont-trash"></i>
        </small>
      </div>
    </div>
</div>