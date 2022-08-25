<div class="modal fade" id="edit-fee-{{ $fee->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="plot">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Plot</h5>
        <button type="button" class="btn-close text-danger" data-bs-dismiss="modal" aria-label="Close">
          <i class="icofont-close"></i>
        </button>
      </div>
      <form class="edit-fee-form" action="javascript:;" method="post" data-action="{{ route('admin.plot.edit', ['id' => $fee->id]) }}">
        @csrf
        <div class="modal-body">
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Name</label>
              <input type="text" name="name" class="form-control name" placeholder="Enter plot name" value="{{ $fee->name }}">
              <small class="name-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Plot number</label>
              <input type="text" name="number" class="form-control number" placeholder="Enter plot number" value="{{ $fee->number }}">
              <small class="number-error text-danger"></small>
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label class="text-muted">Layout Name</label>
              <select class="form-control layout" name="layout">
                <option value="">Select layout</option>
                <?php $pers = \App\Models\Fee::PERS; ?>
                @if(empty($pers))
                  <option value="">No pers listed</option>
                @else
                  @foreach($pers as $per)
                    <option value="{{ $per }}" {{ $per == $fee->layout_id ? 'selected' : '' }}>
                      {{ ucwords($per) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="layout-error text-danger"></small>
            </div>
            <div class="form-group col-md-6">
              <label class="text-muted">Category</label>
              <select class="form-control category" name="category">
                <option value="">Select category</option>
                <?php $categories = \App\Models\Plot::CATEGORIES; ?>
                @if(empty($categories))
                  <option value="">No category listed</option>
                @else
                  @foreach($categories as $category)
                    <?php $slug = \Str::slug(strtolower($category)); ?>
                    <option value="{{ $slug }}" {{ $slug == $fee->category ? 'selected' : '' }}>
                      {{ ucwords($category) }}
                    </option>
                  @endforeach
                @endif
              </select>
              <small class="category-error text-danger"></small>
            </div>
          </div>
          <div class="form-group mb-3">
            <label class="text-muted">Description (optional)</label>
            <textarea class="form-control description" name="description" rows="4" placeholder="Layout description">{{ ucfirst($fee->description) }}</textarea>
            <small class="description-error text-danger"></small>
          </div>
          <div class="alert d-none edit-fee-message mb-2 text-white"></div>
        </div>
        <div class="modal-footer pb-0">
          <button type="submit" class="btn btn-primary edit-fee-button">
            <img src="/images/spinner.svg" class="me-2 d-none edit-fee-spinner mb-1">Save
          </button>
        </div>
      </form>
    </div>
  </div>
</div>