<?php $categoryname = strtolower($property->category->name ?? 'any'); ?>
<div class="card border-0 position-relative">
	<div class="position-relative" style="height: 160px; line-height: 160px;">
		<a href="{{ route('admin.property.edit', ['id' => $property->id, 'category' => $categoryname]) }}" class="text-decoration-none">
			<img src="{{ empty($property->image) ? '/images/banners/holder.png' : $property->image }}" class="img-fluid border-0 w-100 h-100 object-cover">
		</a>
		<div class="position-absolute w-100 px-3 border-top d-flex align-items-center justify-content-between" style="height: 45px; line-height: 45px; bottom: 0; background-color: rgba(0, 0, 0, 0.75);">
			<a href="{{ route('admin.properties.user', ['userid' => $property->user->id ?? 0]) }}" class="text-underline">
				<?php $fullname = empty($property->user->name) ? 'Nill' : ucwords($property->user->name); ?>
				<small class="text-white">
					By {{ \Str::limit(firstname($fullname), 16) }}
				</small>
			</a>
			<a href="{{ route('admin.properties.country', ['countryid' => $property->country->id ?? 0]) }}" class="text-underline">
				<?php $countryname = empty($property->country->name) ? 'Nill' : ucwords($property->country->name); ?>
				<small class="text-white">
					{{ \Str::limit(firstname($countryname), 16) }}
				</small>
			</a>
		</div>
	</div>
	<div class="card-body">
		<div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
			<a href="{{ route('admin.properties.category', ['categoryname' => $categoryname]) }}" class="text-underline text-dark">
				<small class="">
					{{ ucfirst($categoryname) }}
				</small>
			</a>
			<?php $action = strtolower($property->action ?? 'nill'); ?>
			<small class="{{ $action === 'sold' ? 'bg-danger' : 'bg-info' }} px-2 rounded-pill">
				<small class="text-white">
					{{ ucwords($action) }}
				</small>
			</small>
		</div>
		<div class="d-flex justify-content-between align-items-center">
			<a href="{{ route('admin.property.edit', ['category' => $categoryname, 'id' => $property->id]) }}" class="text-underline text-main-dark">
				<small class="">
					{{ \Str::limit($property->address, 16) }}
				</small>
			</a>
			<div class="dropdown">
                <a href="javascript:;" class="text-main-dark align-items-center df
                " id="status-{{ $property->id }}" data-toggle="dropdown">
                    <small>
                    	<i class="icofont icofont-caret-down"></i>
                    </small>
                </a>
                <div class="dropdown-menu border-0 shadow dropdown-menu-right" aria-labelledby="status-{{ $property->id }}">
                	<form class="p-4 w-100" action="javascript:;" style="width: 210px !important;">
					    <div class="form-group">
					      	<label for="exampleDropdownFormEmail1">Change status</label>
					      	<select class="custom-select change-status">
					      		<option value="">Change status</option>
					      	</select>
					    </div>
					    <button type="submit" class="btn btn-lg text-white btn-block bg-main-dark">Change status</button>
					</form>
                </div>
            </div>
		</div>
	</div>
	<div class="card-footer d-flex justify-content-between align-items-center bg-main-dark">
		<small class="text-white">
			<small>
				{{ $property->created_at->diffForHumans() }}
			</small>
		</small>
		<a href="{{ route('admin.property.edit', ['id' => $property->id, 'category' => $categoryname]) }}">
			<small class="text-warning">
				<small><i class="icofont-edit"></i></small>
			</small>
		</a>
	</div>
</div>